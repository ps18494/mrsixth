<?php declare(strict_types=1);

    // Danh sách người dùng bình thường
    function getAllUsers(): array {
        $sql = "SELECT * FROM users";
        $result = pdo_query($sql);
        return $result;
    }

    // Thêm người dùng
    function insertUser(string $username, string $password, string $email, string $fullname, string $address, string $phone, string $role): bool {
        $sql = "INSERT INTO users (username, password, email, fullname, address, phone, role) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $result = pdo_execute($sql, $username, $password, $email, $fullname, $address, $phone, $role);
        return $result;
    }

    // Chi tiết người dùng theo id
    function getUserById(int $id): array {
        $sql = "SELECT * FROM users WHERE id = ?";
        $result = pdo_query_one($sql, $id);
        return $result;
    }

    // Cập nhật thông tin người dùng
    function updateUser(int $id, string $username, string $password, string $email, string $fullname, string $address, string $phone, string $role): bool {
        $sql = "UPDATE users SET username = ?, password = ?, email = ?, fullname = ?, address = ?, phone = ?, role = ? WHERE id = ?";
        $result = pdo_execute($sql, $username, $password, $email, $fullname, $address, $phone, $role, $id);
        return $result;
    }


    // Xóa người dùng
    function deleteUser(int $id): bool {
        $sql = "DELETE FROM users WHERE id = ?";
        $result = pdo_execute($sql, $id);
        return $result;
    }


    // Tìm kiếm người dùng theo tên
    function searchUserByName(string $keyword): array {
        $sql = "SELECT * FROM users WHERE username LIKE '%$keyword%'";
        $result = pdo_query($sql);
        return $result;
    }

    // Tìm kiếm người dùng theo email
    function searchUserByEmail(string $keyword): array {
        $sql = "SELECT * FROM users WHERE email LIKE '%$keyword%'";
        $result = pdo_query($sql);
        return $result;
    }


    // Kiểm tra người dùng theo tên
    function checkUserByName(string $username): bool {
        $sql = "SELECT * FROM users WHERE username = ?";
        $result = pdo_query_one($sql, $username);
        return $result;
    }

    // Kiểm tra người dùng theo email
    function checkUserByEmail(string $email): bool {
        $sql = "SELECT * FROM users WHERE email = ?";
        $result = pdo_query_one($sql, $email);
        return $result;
    }
