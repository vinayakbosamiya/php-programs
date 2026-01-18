<?php

echo "the value of cookie is :" . $_COOKIE["users"];

// removed the cookie
setcookie("users","",time() - (10),"/");
?>