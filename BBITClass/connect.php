<?php
$connect = mysqli_connect('localhost', 'root', '', 'dbitjuly');
if (!$connect) {
    die(mysqli_error($connect));
}
?>