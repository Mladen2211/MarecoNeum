<?php 
$fileUpload = new File();
//define('ROOTPATH', __DIR__);       
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Upload</title>
</head>
<body>
<form action="/shares/file" method='post' enctype='multipart/form-data'>
      <input type="file" id="file" name="file" />
      <input class="btn" type="submit" value='Upload'/>
</form>
  </body>
</html>