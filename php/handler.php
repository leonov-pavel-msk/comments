<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/php/db.php");
    if( !empty( $_POST['name'] ) && !empty( $_POST['text'] ) && !empty( $_POST['date'] ) && !empty( $_POST['time'] ) ){
        $link = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, 'database');
        mysqli_set_charset($link, 'utf8');
        
        $q = "INSERT INTO comments (id, name, text, date, time) VALUE ".
            "(NULL, '{$_POST['name']}', '{$_POST['text']}', '{$_POST['date']}', '{$_POST['time']}')"; 

        $result = mysqli_query($link, $q);

        if( $result ){
            header ("Location: ".$_SERVER['HTTP_REFERER']);
        }
    }
?>


