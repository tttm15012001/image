<?php
function removeSpecialCharacter($str) {
	$str = str_replace('\\', '\\\\', $str);
	$str = str_replace('\'', '\\\'', $str);
	return $str;
}

function getPost($key) {
	$value = '';
	if(isset($_POST[$key])) {
		$value = $_POST[$key];
	}

	return removeSpecialCharacter($value);
}

function getGet($key) {
	$value = '';
	if(isset($_GET[$key])) {
		$value = $_GET[$key];
	}

	return removeSpecialCharacter($value);
}

function getMD5Security($pwd) {
    return md5(md5($pwd).MDS_PRIMARY_KEY);
}

function validateToken() {
    if(isset($_SESSION['user'])) {
        return $_SESSION['user'];
    }

    $token = '';
    if(isset($_COOKIE['token'])) {
        $token = $_COOKIE['token'];

        $sql = "select * from users where token = '$token'";
        $result = executeResult($sql, true);

        $_SESSION['user'] = $result;

        return $result;
    }

    return false;
}