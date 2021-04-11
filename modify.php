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
    
    <style>
      fieldset {
      border: 0;
      }
      label {
      display: block;
      margin: 30px 0 0 0;
      }
    </style>
    
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
    
    
    
    
    function find(){
      
    <?php setcookie("idd",$_GET['name'],time()+3600); 
        setcookie("sortt",$_GET['s'],time()+3600); ?>
        
        
      ref.onSnapshot(doc => {
        var t=doc.data().標題;
        var des =doc.data().文章;
        var sort=doc.data().分類;
        
        console.log(t);
        
        var des1=des.replace(/<br>/ig,"\n"); //將從firebase抓出來的值 <br>轉成\n
        
        document.getElementById("des").value=des1; //將firebase抓出來的值 設成預設值
        document.getElementById("tit").value=t; //將firebase抓出來的值 設成預設值
        document.getElementById("speed").value=sort; //將firebase抓出來的值 設成預設值
        
      });

    } 
    
    find();
    
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
									<!--<li><a href="elements.html">Elements</a></li>
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


			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>write an essay</h2>
					</header>
					<div class="row">
						<div class="col-12">

							<!-- Text-->
								<section class="box"> 
									<h3>Write what you want</h3>
									<form action="mofify2.php" method="POST" name="form1">
                  Title：<input type="text" name="title" id="tit" value="">
                   <fieldset>
                      <label>class selection</label>
                      <select name="speed" id="speed">
                        <option value="nosort">未分類</option>
                        <option value="food">美食</option>
                        <option value="travel">旅遊</option>
                        <option value="fasion">流行</option>
                        <option value="mood">心情</option>
                        <option value="life">生活</option>
                      </select>
                   </fieldset>
                  <br>
                  Description：
                  <textarea name="des" rows="6" id="des"></textarea>
                  
                  <!--<input type="textarea" Wrap="off" name="des" style="height:100px;" value="">-->
                  <br>
                  <br>
                  <input type="submit" id="bt" value="發佈">
                  </form>
									<hr />
								</section>
						</div>
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