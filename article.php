<!DOCTYPE HTML>
<?php include("configure.php"); ?>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>article</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
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
    
    
    var account="<?php echo $_COOKIE['name']; ?>";
    
    var db = firebase.firestore();
    var ref=db.collection('food');
    
    var ref2=db.collection('travel');
    var ref3=db.collection('fasion');
    var ref4=db.collection('mood');
    var ref5=db.collection('life');
    
    function art(){
      ref.where('帳號','==',account).get().then(function(querySnapshot) { //抓取firebase資料
       querySnapshot.forEach(function(doc) { 
          if(doc.data() != null){ //如果資料不為空
            let jtest=JSON.stringify(doc.data()); //將資料存入jtest
            let jtest1 = JSON.parse(jtest);
            let sort=jtest1.分類;
            let title=jtest1.標題;
            let content=jtest1.文章;
            var id=jtest1.編號;
            
            //動態新增表格
            var t=document.getElementById("test"); //取得table名稱
            var rowCount=t.rows.length; //取得tr數量
            var newrow=t.insertRow(rowCount); //新增tr
            
            var col1 = newrow.insertCell(0); //第0個td
            col1.innerHTML=sort;
            
            var col2 = newrow.insertCell(1);//第1個td
            col2.innerHTML=title;
            
            var col3 = newrow.insertCell(2);//第2個td
            col3.innerHTML=content;
            
            var col4 = newrow.insertCell(3);//第3個td
            col4.innerHTML="<a href='modify.php?name="+id+"&s="+sort+"'>修改</a>"; //取得編號跟分類做修改
            
            var col5 = newrow.insertCell(4);//第4個td
            col5.innerHTML="<a href='remove.php?name="+id+"&s="+sort+"'>刪除</a>"; //取得編號跟分類做刪除
            
          }
          else {
          }
        });
      });
      
      
      //以下開始是上面的重複動作 但是不同分類文件
      ref2.where('帳號','==',account).get().then(function(querySnapshot) {
       querySnapshot.forEach(function(doc) {
          if(doc.data() != null){
            let jtest=JSON.stringify(doc.data());
            let jtest1 = JSON.parse(jtest);
            let sort=jtest1.分類;
            let title=jtest1.標題;
            let content=jtest1.文章;
            var id=jtest1.編號;
            
            var t=document.getElementById("test");
            var rowCount=t.rows.length;
            var newrow=t.insertRow(rowCount);
            
            var col1 = newrow.insertCell(0);
            col1.innerHTML=sort;
            
            var col2 = newrow.insertCell(1);
            col2.innerHTML=title;
            
            var col3 = newrow.insertCell(2);
            col3.innerHTML=content;
            
            var col4 = newrow.insertCell(3);
            col4.innerHTML="<a href='modify.php?name="+id+"&s="+sort+"'>修改</a>";
            
            var col5 = newrow.insertCell(4);
            col5.innerHTML="<a href='remove.php?name="+id+"&s="+sort+"'>刪除</a>";
          }
          else {
          }
        });
      });
      
      ref3.where('帳號','==',account).get().then(function(querySnapshot) {
       querySnapshot.forEach(function(doc) {
          if(doc.data() != null){
            let jtest=JSON.stringify(doc.data());
            let jtest1 = JSON.parse(jtest);
            let sort=jtest1.分類;
            let title=jtest1.標題;
            let content=jtest1.文章;
            var id=jtest1.編號;
            
            var t=document.getElementById("test");
            var rowCount=t.rows.length;
            var newrow=t.insertRow(rowCount);
            
            var col1 = newrow.insertCell(0);
            col1.innerHTML=sort;
            
            var col2 = newrow.insertCell(1);
            col2.innerHTML=title;
            
            var col3 = newrow.insertCell(2);
            col3.innerHTML=content;
            
            var col4 = newrow.insertCell(3);
            col4.innerHTML="<a href='modify.php?name="+id+"&s="+sort+"'>修改</a>";
            
            var col5 = newrow.insertCell(4);
            col5.innerHTML="<a href='remove.php?name="+id+"&s="+sort+"'>刪除</a>";
          }
          else {
          }
        });
      });
      
      ref4.where('帳號','==',account).get().then(function(querySnapshot) {
       querySnapshot.forEach(function(doc) {
          if(doc.data() != null){
            let jtest=JSON.stringify(doc.data());
            let jtest1 = JSON.parse(jtest);
            let sort=jtest1.分類;
            let title=jtest1.標題;
            let content=jtest1.文章;
            var id=jtest1.編號;
            
            var t=document.getElementById("test");
            var rowCount=t.rows.length;
            var newrow=t.insertRow(rowCount);
            
            var col1 = newrow.insertCell(0);
            col1.innerHTML=sort;
            
            var col2 = newrow.insertCell(1);
            col2.innerHTML=title;
            
            var col3 = newrow.insertCell(2);
            col3.innerHTML=content;
            
            var col4 = newrow.insertCell(3);
            col4.innerHTML="<a href='modify.php?name="+id+"&s="+sort+"'>修改</a>";
            
            var col5 = newrow.insertCell(4);
            col5.innerHTML="<a href='remove.php?name="+id+"&s="+sort+"'>刪除</a>";
          }
          else {
          }
        });
      });
      
      ref5.where('帳號','==',account).get().then(function(querySnapshot) {
       querySnapshot.forEach(function(doc) {
          if(doc.data() != null){
            let jtest=JSON.stringify(doc.data());
            let jtest1 = JSON.parse(jtest);
            var sort=jtest1.分類;
            let title=jtest1.標題;
            let content=jtest1.文章;
            var id=jtest1.編號;
            
            var t=document.getElementById("test");
            var rowCount=t.rows.length;
            var newrow=t.insertRow(rowCount);
            
            var col1 = newrow.insertCell(0);
            col1.innerHTML=sort;
            
            var col2 = newrow.insertCell(1);
            col2.innerHTML=title;
            
            var col3 = newrow.insertCell(2);
            col3.innerHTML=content;
            
            var col4 = newrow.insertCell(3);
            col4.innerHTML="<a href='modify.php?name="+id+"&s="+sort+"'>修改</a>";
            
            var col5 = newrow.insertCell(4);
            col5.innerHTML="<a href='remove.php?name="+id+"&s="+sort+"'>刪除</a>";
          }
          else {
          }
        });
      });
    }
    </script>
  </head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="signed_home.php">Blogs</a> :P</h1>
					<nav id="nav">
						<ul>
							<li><a href="signed_home.php">Home</a></li>
              <li><a href="article2_signed.php?name=food">美食</a></li>
              <li><a href="article2_signed.php?name=travel">旅遊</a></li>
              <li><a href="article2_signed.php?name=mood">心情</a></li>
              <li><a href="article2_signed.php?name=life">生活</a></li>
              <li><a href="article2_signed.php?name=fasion">流行</a></li>
							<li>
								<a href="#" class="icon solid fa-angle-down">More</a>
								<ul>
                <li><a href="article.php">article</a></li>
									<li><a href="contact_logined.php">Contact</a></li>
								</ul>
							</li>
							<li><a href="#"><?php echo $_COOKIE["name"]."已登入"; ?></a></li>
							<li><a href="signout.php" class="button">Sign out</a></li> <!--登出-->
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>My article</h2>
            <ul class="actions special">
						<li><a href="write.php" class="button primary">write an essay</a></li> <!--寫文章-->
            </ul>
					</header>
					<div class="box">
						<span class="image featured"><img src="com.jpg" alt="" /></span>
          
            <script>  art(); </script>
            
            <table id="test">
            <tr><td width="10px">分類</td><td width="150px">標題</td><td width="200px">內容</td><td width="10px">修改</td><td width="10px">刪除</td></tr>
            </table>
            
          </div>
        </section>
            

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>