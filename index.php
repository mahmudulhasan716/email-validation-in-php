
<?php
 

 if(isset($_POST['submit'])){
    $url = $_POST['text'];
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        echo $url;
        header('location:'. $url.'.');
      } else {
        
        $link= 'https://www.google.com/search?q='. $url.'.';
        header('location:'. $link.'.');
      }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="text" placeholder="input url">
        <input type="submit" name="submit">
    </form>
</body>
</html>


`