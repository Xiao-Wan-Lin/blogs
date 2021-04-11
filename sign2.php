<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-firestore.js"></script> 
  <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-analytics.js"></script>
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
  
  var account="<?php echo $_POST['acc']; ?>";
  var password="<?php echo $_POST['pwd']; ?>";
  var db = firebase.firestore();
  var ref=db.collection('personal').doc(account);

  //var name="<?php echo $_POST['acc']; ?>";
  
  function login() {
	 	ref.get().then(function(doc) {
      try{
         if(account == doc.data().帳號){  //判斷帳號是否相同
          if(password == doc.data().密碼){ //判斷密碼是否相同
            alert("登入成功");
            <?PHP
            setcookie("name",$_POST['acc'],time()+3600);  //登入成功存入cookie
            setcookie("id",$_POST['pwd'],time()+3600);//存入cookie
            ?>
            window.location.href='signed_home.php'; //跳轉頁面
          }
          else{
            alert("密碼錯誤");
            window.location.href='sign.php';//跳轉頁面
          }
         }
      } catch(error){
          alert("帳號或密碼錯誤");
          window.location.href='sign.php';//跳轉頁面
        }
    });
  }
  
  </script>  

</head>

<body>

<?php
   if(empty($_POST['acc']) && empty($_POST['pwd'])){  //如果欄位有空
    echo "<script>alert('請輸入完整資訊')</script>"; //跳警告
    echo "<meta http-equiv = 'refresh' content = '0;url=sign.php' >"; //跳轉頁面
   }
   else{
     echo "<script>login()</script>"; //如果都有填執行function
   }

?>


</body>
</html>