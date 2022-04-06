<?php
$name = $_POST["name"];
$code = $_POST["code"];
fopen("$name.html", "w");
file_put_contents("$name.html", $code);
echo " Web Page successfully hosted!!!! visit: <a href= 'https://freehost321.herokuapp.com/$name.html'>https://freehost321.herokuapp.com/$name.html</a>"
?>
