const form = document.getElementById("formdangky");

// Form input elements
const inputName = document.querySelector("input[name='name']");
const pwd = document.querySelector("input[name='pass']");
const rePwd = document.querySelector("input[name='repass']");
const birthDay = document.querySelector("input[name='date]");
const email = document.querySelector("input[name='email']");
const phone = document.querySelector("input[name='sdt']");
const tinhtrangsuckhoe = document.querySelector("input[name='tinhtrangsuckhoe']");


// Kiểm tra string rỗng hay không
const isEmpty = (string) => {
  return string.length === 0;
}


const removeValidationClasses = (ele) => {
  ele.classList.remove('is-valid', 'is-invalid');
}

const removeFeedBack = (ele) => {
  const feedBackClasses = ['valid-feedback', 'invalid-feedback'];
  let found;
  if (ele.nextElementSibling) {
    found = feedBackClasses.some(r=> ele.nextElementSibling.classList.contains(r))
  }
  if (found) ele.nextElementSibling.remove();
}

const clearInput = (ele) => {
  removeValidationClasses(ele);
  removeFeedBack(ele);
}

// Thêm error
const addError = (ele, msg) => {
  ele.classList.add('is-invalid');
  if (msg)
  {
    addFeedBack(ele.parentElement, 'invalid-feedback', msg);
  }
}

// Thêm success 
const addSuccess = (ele, msg) => {
  ele.classList.add('is-valid');
  if (msg) 
  {
    addFeedBack(ele.parentElement, 'valid-feedback', msg);
  }
}

const addFeedBack = (ele, className, msg) => {
  const div = document.createElement("div");
  div.classList.add(className)
  div.innerText = msg;
  ele.appendChild(div);
}


// Kiểm tra tên đăng nhập
// Nếu tên đăng nhập rỗng thì hiển thị lỗi, return false
const validateUserName = () => {
  clearInput(inputName);
  if (isEmpty(inputName.value))
  {
    addError(inputName, "Tên đăng nhập là bắt buộc");
    return false;
  } else if (!/^[a-z][a-z0-9]{5,19}$/.test(nonAccentVietnamese(inputName.value))){
    addError(inputName, "Tên đăng nhập từ 6-20 ký tự, chỉ tồn tại ký tự (a-z) và số và không bắt đầu bằng số");
    return false;
  }
  addSuccess(inputName)
  return true
}

// Nếu password hoặc confirm password rỗng thì báo lỗi
// Nếu confirm password không giống password thì báo lỗi
const validatePassword = () => {
  clearInput(pwd);
  clearInput(rePwd);
  if (isEmpty(pwd))
  {
    addError(pwd, "Mật khẩu không được để trống")
    return false;
  } else if (isEmpty(rePwd))
  {
    addError(rePwd, "Xác nhận mật khẩu không được để trống")
    return false;
  } else if (pwd.value.length < 8 || pwd.value.length > 32)
  {
    addError(pwd, "Độ dài mật khẩu từ 8-32 ký tự")
  } else if (pwd.value !== rePwd.value)
  {
    addError(rePwd, "Xác nhận mật khẩu không chính xác")
    return false;
  }
  return true;
}

const validateEmail = () => {
  clearInput(email);
  if (isEmpty(email.value)){
    addError(email, "Email là bắt buộc");
    return false;
  } else if (!isEmailFormat(email.value))
  {
    addError(email, "Email không đúng định dạng");
    return false
  }
  return true
}

function isEmailFormat(email) {
  const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}

// Kiểm tra form
const handleForm = () => {
  const vUserName = validateUserName();
  const vPassWord = validatePassword();
  const vEmail = validateEmail();

  // return validateUserName() && validatePassword() && validateEmail()
  return vUserName && vPassWord && vEmail;
}

// Chuyển sang dạng chữ thường khi nhập tên đăng nhập
inputName.addEventListener("keyup", (e) => {
  // e.target.value = e.target.value.toLowerCase().trim();
  e.target.value = e.target.value.toLowerCase().replace(/\s/g, '');
  e.target.value = nonAccentVietnamese(e.target.value);
})

// Thêm sự kiện kiểm tra form khi submit form đăng ký
form.addEventListener("submit", e => {
  e.preventDefault();

  if (handleForm()) {
    e.target.submit();
  }
})  


// https://gist.github.com/jarvisluong/f01e108e963092336f04c4b7dd6f7e45
function nonAccentVietnamese(str) {
  str = str.toLowerCase();
//     We can also use this instead of from line 11 to line 17
//     str = str.replace(/\u00E0|\u00E1|\u1EA1|\u1EA3|\u00E3|\u00E2|\u1EA7|\u1EA5|\u1EAD|\u1EA9|\u1EAB|\u0103|\u1EB1|\u1EAF|\u1EB7|\u1EB3|\u1EB5/g, "a");
//     str = str.replace(/\u00E8|\u00E9|\u1EB9|\u1EBB|\u1EBD|\u00EA|\u1EC1|\u1EBF|\u1EC7|\u1EC3|\u1EC5/g, "e");
//     str = str.replace(/\u00EC|\u00ED|\u1ECB|\u1EC9|\u0129/g, "i");
//     str = str.replace(/\u00F2|\u00F3|\u1ECD|\u1ECF|\u00F5|\u00F4|\u1ED3|\u1ED1|\u1ED9|\u1ED5|\u1ED7|\u01A1|\u1EDD|\u1EDB|\u1EE3|\u1EDF|\u1EE1/g, "o");
//     str = str.replace(/\u00F9|\u00FA|\u1EE5|\u1EE7|\u0169|\u01B0|\u1EEB|\u1EE9|\u1EF1|\u1EED|\u1EEF/g, "u");
//     str = str.replace(/\u1EF3|\u00FD|\u1EF5|\u1EF7|\u1EF9/g, "y");
//     str = str.replace(/\u0111/g, "d");
  str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
  str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
  str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
  str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
  str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
  str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
  str = str.replace(/đ/g, "d");
  // Some system encode vietnamese combining accent as individual utf-8 characters
  str = str.replace(/\u0300|\u0301|\u0303|\u0309|\u0323/g, ""); // Huyền sắc hỏi ngã nặng 
  str = str.replace(/\u02C6|\u0306|\u031B/g, ""); // Â, Ê, Ă, Ơ, Ư
  return str;
}