<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-firestore.js"></script> 
  <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-analytics.js"></script>
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

  var acc="<?php echo $_COOKIE['name']; ?>";
  var title="<?php echo $_POST['title']; ?>";
  var sort="<?php echo $_POST['speed']; ?>";
  <?php //$e04 = str_replace(array("\r", "\n", "\r\n", "\n\r"),"<br>",$_POST['des'])
  $e04 = str_replace(array("\n"),"<br>",$_POST['des']); //將textarea的\n換成<br>
  $e04e04 = str_replace(array("\r"),"",$e04); //將textarea的\r換成<br>
  
  date_default_timezone_set('Asia/Taipei'); //取得時間
  $d = date('Y/m/d H:i:s');
  ?>
  var des="<?php echo $e04e04; ?>";
  var d="<?php echo $d; ?>";
  //var ddd = des.replace(System.Environment.NewLine, "<br/>");

  function get_count(){
    var ref = db.collection(sort);
    ref.orderBy('編號','desc').limit(1).get().then(querySnapshot => { //抓取firebase最後一個編號
        querySnapshot.forEach(doc => { 
          console.log(doc.id, doc.data());
          var count = doc.data().編號+1; //將抓取到的編號+1
          var b=count.toString(); //將編號int轉成str
          save_write(count,b); //將int&str的編號送到function
        });
    });
  }

  function save_write(c,a) {
	  
    db.collection(sort).doc(a).set({ //將str的編號存至文件
      編號: c, //int的編號存至內容
      帳號: acc,
      標題: title,
      分類: sort,
      文章: des,
      時間: d
    });
    
    alert("發布成功");
    
  }
    // 執行
    get_count();
</script>

   <meta http-equiv = "refresh" content = "2;url=article.php" >

</body>
</html>