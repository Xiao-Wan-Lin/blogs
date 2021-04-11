<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>write an essay</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!--<link rel="stylesheet" href="/resources/demos/style.css"> -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-firestore.js"></script> 
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-analytics.js"></script>
    
    <body>
    <script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyArmax_oftk-45xmWC15F8UoHq3ec7fjkc",
    authDomain: "test2-24449.firebaseapp.com",
    projectId: "test2-24449",
    storageBucket: "test2-24449.appspot.com",
    messagingSenderId: "470569851844",
    appId: "1:470569851844:web:eb17c9154a740e21352291"
  };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();

    var db = firebase.firestore();

    var id = "<?php echo $_COOKIE['idd']; ?>";
    var sort="<?php echo $_COOKIE['sortt']; ?>";

    var ref=db.collection(sort).doc(id);
    
    function update(){
      var new_sort = "<?php if(isset($_POST['speed'])){ echo $_POST['speed']; } ?>";
      var new_title = "<?php if(isset($_POST['title'])){ echo $_POST['title']; } ?>";

      <?php
        if(isset($_POST['des'])){
          $e04 = str_replace(array("\n"),"<br>",$_POST['des']); //將textarea的\n轉成<br>
          $e04e04 = str_replace(array("\r"),"",$e04); //將textarea的\r轉成<br>
        }
        date_default_timezone_set('Asia/Taipei'); //取得時間
        $d = date('Y/m/d H:i:s');
      ?>
      
      var new_des="<?php echo $e04e04; ?>";
      var new_d="<?php echo $d; ?>";
      
      var ref2=db.collection(new_sort).doc(id);
      ref.update({ //更新firebase內容
        分類: new_sort,
        標題: new_title,
        文章: new_des,
        時間: new_d
      }).then(() => {
        alert("更新成功");
      });
      
    }
    
    update();
    
  </script>
  <meta http-equiv = "refresh" content = "2;url=article.php" >
	</body>
</html>