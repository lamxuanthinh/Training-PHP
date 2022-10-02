<?php
echo 'cookies in PHP';
// password username 
setcookie('name', 'thinh', time() + 24 * 36000);

if (isset($_COOKIE['name'])) { 
    echo $_COOKIE['name'];
};
