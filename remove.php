<html>
<head>  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
 <!-- The core Firebase JS SDK is always required and must be listed first -->
 <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-firestore.js"></script> 
  <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-analytics.js"></script>
<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
</head>

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

  var id = "<?php echo $_GET['name']; ?>";
  var sort="<?php echo $_GET['s']; ?>";
  
  var ref=db.collection(sort).doc(id);
  
  var msg="您確定要刪除嗎？";
  
  function remove(){ //刪除資料
    ref.delete();
  }
  
  if(confirm(msg)==true){ //如果確定刪除
    remove(); //執行刪除function
    alert("刪除成功");
  }
  else{
    window.location.href='article.php'; //取消刪除則跳轉頁面
  }
  
  
</script>

  <meta http-equiv = 'refresh' content = '1;url=article.php' >

</body>
</html>