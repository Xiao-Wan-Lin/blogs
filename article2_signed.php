<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>文章</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
    
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-firestore.js"></script> 
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-analytics.js"></script>
    
    <style>
    #banner
    {
    background: url(5dbff40d15db5.jpg);
    background-repeat:no-repeat;
    background-size: 100%;
    }
    </style>
    
	</head>
  
	<body class="landing is-preload">
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
    
    var sort = "<?php echo $_GET['name']; ?>"; //取得分類
    var ref=db.collection(sort);
   function find(){
      if (sort != null){
        ref.get().then(function(querySnapshot) { //抓取firebase資料
        querySnapshot.forEach(function(doc) {
            if(doc.data() != null){ //如果資料不為空
              let jtest=JSON.stringify(doc.data()); //將資料存入jtest
              let jtest1 = JSON.parse(jtest);
              let poster=jtest1.帳號;
              let sort=jtest1.分類;
              let title=jtest1.標題;
              let content=jtest1.文章;
              let time=jtest1.時間;
              
              //動態新增表格
              var t=document.getElementById("test");  //取得table名稱
              var rowCount=t.rows.length;//取得tr數量
              var newrow=t.insertRow(rowCount);//新增tr
              
              
              var col1 = newrow.insertCell(0);//第0個td
              col1.innerHTML="<h3>"+title.bold()+"</h3><h4>作者："+poster+"／分類："+sort+"／更新時間："+time+"</h4><h4>"+content+"</h4>";
              
            }
            else {
            }
          });
        });
      }
    }
    
    find();
    
  </script>
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
									<!--<li><a href="elements.html">Elements</a></li>
                  <li><a href="generic.html">文章</a></li>
									<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Option One</a></li>
											<li><a href="#">Option Two</a></li>
											<li><a href="#">Option Three</a></li>
											<li><a href="#">Option Four</a></li>
										</ul>
									</li>-->
								</ul>
							</li>
							<li><a href="#"><?php echo $_COOKIE["name"]."已登入"; ?></a></li>
							<li><a href="signout.php" class="button">Sign out</a></li> <!--登出-->
						</ul>
					</nav>
				</header>
        
        <br>
        <br>
        <br>
        <br>
        <br>
        <br><br><br><br><br>
        
        <section id="main" class="container">
          <table id="test">
          </table>
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