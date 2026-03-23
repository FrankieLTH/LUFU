<?php
/**
 * Thư viện kết nối CSDL và thực thi truy vấn an toàn dùng PDO
 */
function pdo_get_connection() {
    $dburl = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8";
    $username = DB_USER;
    $password = DB_PASS;
    $opt = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );
    try {
        $conn = new PDO($dburl, $username, $password, $opt);
        return $conn;
    } catch (PDOException $e) {
        return null; // Trả về null khi DB không tồn tại, để web phục vụ mockup data
    }
}

/**
 * Thực thi câu lệnh SQL thao tác dữ liệu (INSERT, UPDATE, DELETE)
 */
function pdo_execute($sql) {
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        if(!$conn) return false;
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    } catch(PDOException $e){
        throw $e;
    } finally {
        unset($conn);
    }
}

/**
 * Thực thi câu lệnh SQL truy vấn dữ liệu (SELECT) và trả về nhiều dòng
 */
function pdo_query($sql) {
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        if(!$conn) return []; // Fallback
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    } catch(PDOException $e){
        throw $e;
    } finally {
        unset($conn);
    }
}

/**
 * Thực thi câu lệnh SQL truy vấn và trả về 1 dòng
 */
function pdo_query_one($sql) {
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        if(!$conn) return null; // Fallback
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch();
        return $row;
    } catch(PDOException $e){
        throw $e;
    } finally {
        unset($conn);
    }
}

/**
 * Thực thi SQL truy vấn và trả về 1 giá trị duy nhất
 */
function pdo_query_value($sql) {
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        if(!$conn) return null; // Fallback
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        return $row[0];
    } catch(PDOException $e){
        throw $e;
    } finally {
        unset($conn);
    }
}
