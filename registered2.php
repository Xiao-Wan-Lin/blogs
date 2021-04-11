<html>
<head>  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
 <!-- The core Firebase JS SDK is always required and must be listed first -->
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
  
  var db = firebase.firestore();
  var acc="<?php echo $_POST['acc']; ?>";     //將表單送出的直存入acc
  var pwd="<?php echo $_POST['pwd']; ?>"; //將表單送出的直存入pwd
  var name="<?php echo $_POST['name']; ?>";//將表單送出的直存入name
  var ref=db.collection('personal').doc(acc);//指定firebase路徑
  
  function register() {
    ref.get().then(function(doc) {   //抓取firebase的資料
      try{
        if(acc == doc.data().帳號){  //帳號已被註冊
            alert("此帳號已被註冊，請登入或改用其他帳號註冊");
            window.location.href='registered.php';
         }
      }
      catch(error){
          ref.set({   //沒被註冊則存入firebase
            帳號: acc,
            密碼: pwd,
            姓名: name
          });
          
          alert("註冊成功");

      }
    });
  }

  
</script>


  <?php
   
   if(empty($_POST['acc']) && empty($_POST['pwd']) && empty($_POST['name'])){ //如果欄位有空
    echo "<script>alert('請輸入完整資訊')</script>"; //跳出警告
    echo "<meta http-equiv = 'refresh' content = '0;url=registered.php' >"; //跳轉回到註冊頁面
   }
   else{
     echo "<script>register()</script>"; //如果沒有空就呼叫function
   }
   
   setcookie("name",$_POST['name'],time()+3600); //註冊好後存入cookie
   setcookie("id",$_POST['acc'],time()+3600);

   ?>
   
   <meta http-equiv = "refresh" content = "2;url=signed_home.php" >

</body>
</html>