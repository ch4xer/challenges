<?php
session_start();
if ($_SERVER["REMOTE_ADDR"] === "127.0.0.1") {
    if(!preg_match('/[a-z0-9]/is',$_GET['i'])) {
        eval($_GET['i']);
    }else{
        die('go away');
    }
} else {
    die( 'only localhost can get flag!');
}
?>
