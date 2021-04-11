<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
  <?php
		
    Setcookie("name","", time()-86400); //清除cookie
    Setcookie("ID","", time()-86400);
		header("Location: index.php"); //轉址
    
	?>

</body>
</html>