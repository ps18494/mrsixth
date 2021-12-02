<?php declare(strict_types=1);

require "config.php";
require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/SMTP.php";
require "PHPMailer/src/Exception.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

/**
 * Lấy các thành phần của url
 *
 * Ví dụ:
 * echo $_SERVER['REQUEST_URI'];  // /benh/chitiet/1?pattern=2&scope=quickrefarray
 * $url = getUrl();
 * echo $url; // ['', 'benh', 'chitiet', '12']
 *
 * echo $_SERVER['REQUEST_URI'];  // mrsixtth/benh/chitiet/1?pattern=2&scope=quickrefarray
 * $url = getUrl();
 * echo $url; // ['', 'mrsixth', 'benh', 'chitiet', '12']
 *
 * @return array url parts
 */
function getUrl()
{
    // $request_uri = str_replace("?". $_SERVER["QUERY_STRING"], '', $_SERVER['REQUEST_URI']);
    $request_uri = strtok($_SERVER["REQUEST_URI"], "?");
    $url = rtrim($request_uri, "/"); // Xóa dấu gạch chéo cuối cùng
    $url = filter_var($url, FILTER_SANITIZE_URL);
    $url = explode("/", $url);
    return $url;
}

/**
 *
 */
function getController(string $controllerPath, string $controllerName): string
{
    $controllerName = strtolower($controllerName);
    return file_exists($controllerPath . $controllerName . ".php")
        ? $controllerName
        : "home";
}

/**
 *
 */
function getAction(string $actionName): string
{
    $actionName = strtolower($actionName);
    return function_exists($actionName) ? $actionName : "index";
}

/**
 *
 */
function getRequestController(int $app_level, string $controllerPath): string
{
    $URL = getUrl();
    $CURRENT_CONTROLLER = "home";

    foreach (range(0, $app_level) as $part) {
        unset($URL[$part]);
    }

    //kiểm tra tồn tại controller thì cập nhật controller lại
    $requestController = $URL[1 + $app_level] ?? null;
    if ($requestController) {
        $CURRENT_CONTROLLER = getController(
            $controllerPath,
            $requestController
        );
        unset($URL[1 + $app_level]);
    }

    return $CURRENT_CONTROLLER;
}

/**
 *
 */
function getRequestAction(int $app_level): string
{
    $URL = getUrl();
    $CURRENT_ACTION = "index";

    $requestAction = $URL[2 + $app_level] ?? null;
    if ($requestAction) {
        $CURRENT_ACTION = getAction($requestAction);
        unset($URL[2 + $app_level]);
    }

    return $CURRENT_ACTION;
}

// https://css-tricks.com/snippets/php/truncate-string-by-words/
function limit_words($words, $limit, $append = " &hellip;")
{
    // Add 1 to the specified limit becuase arrays start at 0
    $limit = $limit + 1;
    // Store each individual word as an array element
    // Up to the limit
    $words = explode(" ", $words, $limit);
    // Shorten the array by 1 because that final element will be the sum of all the words after the limit
    array_pop($words);
    // Implode the array for output, and append an ellipse
    $words = implode(" ", $words) . $append;
    // Return the result
    return $words;
}

// https://www.w3schools.com/php/php_form_validation.asp
// Xóa khoảng trắng dư thừa
// Xóa dấu gạch chéo /
// Chuyển đổi kí tự đặc biệt thành HTML entities
function clean_input($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

function replace_accents($string)
{
    $transliterator = Transliterator::createFromRules(
        ":: Any-Latin; :: Latin-ASCII; :: NFD; :: [:Nonspacing Mark:] Remove; :: Lower(); :: NFC;",
        Transliterator::FORWARD
    );
    $string = $transliterator->transliterate($string);
    return $string;
}

function send_mail(
    $from = EMAIL,
    array $to,
    string $subject,
    string $body,
    string $altBody = ""
) {
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = "smtp.gmail.com"; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = EMAIL; //SMTP username
        $mail->Password = EMAIL_PASSWORD; //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
        $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($from, "MR. Sixth");
        foreach ($to as $toEmail) {
            $mail->addAddress($toEmail);
        }
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AltBody = $altBody;

        $mail->send();
        echo "Message has been sent";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

/**
 * Phương thức upload vào thư mục uploads
 *
 * @param fileInput: là tên của input
 * @param folder: là thư mục trong ./uploads/. Mặc định "là default"
 *
 * Referenced: https://www.php.net/manual/en/features.file-upload.php
 */
function upload($fileInput, $folder = "default")
{
    try {
        // Undefined | Multiple Files | $_FILES Corruption Attack
        // If this request falls under any of them, treat it invalid.
        if (
            !isset($_FILES[$fileInput]["error"]) ||
            is_array($_FILES[$fileInput]["error"])
        ) {
            throw new RuntimeException("Invalid parameters.");
        }

        // Check $_FILES[$fileInput]['error'] value.
        switch ($_FILES[$fileInput]["error"]) {
            case UPLOAD_ERR_OK:
                break;
            case UPLOAD_ERR_NO_FILE:
                throw new RuntimeException("No file sent.");
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                throw new RuntimeException("Exceeded filesize limit.");
            default:
                throw new RuntimeException("Unknown errors.");
        }

        // You should also check filesize here.
        if ($_FILES[$fileInput]["size"] > 1000000) {
            throw new RuntimeException("Exceeded filesize limit.");
        }

        // DO NOT TRUST $_FILES[$fileInput]['mime'] VALUE !!
        // Check MIME Type by yourself.
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        if (
            false ===
            ($ext = array_search(
                $finfo->file($_FILES[$fileInput]["tmp_name"]),
                [
                    "jpg" => "image/jpeg",
                    "png" => "image/png",
                    "gif" => "image/gif",
                ],
                true
            ))
        ) {
            throw new RuntimeException("Invalid file format.");
        }

        // You should name it uniquely.
        // DO NOT USE $_FILES[$fileInput]['name'] WITHOUT ANY VALIDATION !!
        // On this example, obtain safe unique name from its binary data.
        $upload_folder = UPLOADS_FOLDER . "$folder/";
        if (!is_dir($upload_folder)) {
            mkdir($upload_folder);
        }
        $filename = sha1_file($_FILES[$fileInput]["tmp_name"]) . "." . $ext;
        if (
            !move_uploaded_file(
                $_FILES[$fileInput]["tmp_name"],
                $upload_folder . $filename
            )
        ) {
            throw new RuntimeException("Failed to move uploaded file.");
        }

        return $filename;
        // echo 'File is uploaded successfully.';
    } catch (RuntimeException $e) {
        // echo $e->getMessage();
    }
}
