<?php
    function sanitize($str, $len = 255) {
        $str = trim($str);
        $str = htmlentities($str, ENT_QUOTES);
        return substr($str, 0, $len);
    }
?>