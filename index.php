<html>
  <head>
    <title>PHP Test</title>
<link rel="stylesheet" href="main.css">
    <style>
body {
  justify-content: center;
  align-content: center;
  
}
<script>
alert()
</script>
    </style>
  </head>
  <body>
<h1>ABSOLUTELY FREE HOSTING</h1>

    
    <?php 
$name = $_POST["name"];
$code = $_POST["code"];
fopen("$name.html", "w");
file_put_contents("$name.html", $code);
    ?> 
    <form action="index.php" method="POST">
      <input type = "text" name = "name" placeholder="enter a name for your site...   ">
     <br>
      <textarea name = "code" placeholder="enter the *HTML* code for your site..."></textarea>
      <br>
     <input type="submit">
    </form>



    <i>after submitting you must open "https://freehost321.herokuapp.com/yoursitename.html" to access!!!!</i>

    
  </body>
</html>
