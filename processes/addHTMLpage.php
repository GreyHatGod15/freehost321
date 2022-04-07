<?php
$name = $_POST["name"];
$code = $_POST["code"];
fopen("sites/$name.html", "w");
file_put_contents("sites/$name.html", $code);
include "./index.php";
echo "Web Page successfully hosted!!!! visit: <a href= 'https://freehost321.herokuapp.com/processes/sites/$name.html'>https://freehost321.herokuapp.com/processes/sites/$name.html</a>"
?>

