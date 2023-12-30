<!DOCTYPE html>
<html>
<head>
	<title>curious.com</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
<link type="text/css" rel="stylesheet" href="http://www.dreamtemplate.com/dreamcodes/tabs/css/tsc_tabs.css" />
<link rel="stylesheet" href="css/tsc_tabs.css" type="text/css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='js/jquery.color-RGBa-patch.js'></script>
<script src='js/example.js'></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>

<body>
	<header>
	
	  <div class="bgimg"> 
		<div class="nav">
			     <h1> I'm Curious</h1>
				 
					 <div class="container1">
						 <div class="das"></div>
						 <div class="das"></div>
						 <div class="das"></div>
					 </div> 
	  
	
   				<ul class="navber">
					<li class="nav-item">
	     				<a href="home.php" class="nav-link" name="home">HOME</a>
					</li>
					<li class="nav-item">
     					<a href="motive.php" target="blank" class="nav-link">MOTIVE</a>
					</li>
					<li class="nav-item">
						<a href="reg.php" target="blank" class="nav-link">POST</a>
					</li>
					<li class="nav-item">
					    <a  onClick="loginBox()" id="logi" href="#" class="nav-link">LOGIN</a>				
					</li>
				</ul>
				
		</div>
	
				
				<div class= "animation">
					<div class="change_content"></div>
					<p> &nbspa Question ? mark </p>
				</div>

				<div class="main_div" >
					<div class="box1" id="box"style="display: none;">
					<div class="choice">
						<input type="submit" style="border-radius: 10px 0px 0px 0px;  background-color:#1c7299; "id="log" onclick="fun1()" value="Login">
						<input  onclick="fun2()"type="submit"style="border-radius: 0px 10px 0px 0px;"id="sign" value="Signin">
					</div>
					<div class="box"style="display:visible;"id='login'>
						<form action="" method="">
							<div class="inputBox">
							  <input type="text" name="username" autocomplete="off" required >
							  <label>username</label>
							</div>
							
							<div class="inputBox">
							  <input type="password" name="password" autocomplete="off" required >
							  <label>password</label>
							</div>
							<input type="submit" name="" value="login">
						</form>.
					</div>
				
					<div class="box"style="display:none"id="signin" >
						<form action="" method="">
							<div class="inputBox">
							  <input type="text" name="username" autocomplete="off" required >
							  <label>create username</label>
							</div>
							
							<div class="inputBox">
							  <input type="text" name="password" autocomplete="off" required >
							  <label>create password</label>
							</div>
							<input type="submit" name="" value="Signup">
						</form>.
					</div>
				</div>
				</div>
				<script type="text/javascript">
				
					var log= document.getElementById('login');
					var sign= document.getElementById('signin');
					var lbut= document.getElementById('log');
					var sbut= document.getElementById('sign');
				
					function fun1(){
						if(log.style.display="none"){
						log.style.display="block";
						sign.style.display="none";
						lbut.style.backgroundColor="#1c7299";
						sbut.style.backgroundColor="transparent";
						// lbut.setAttribute("style","border-bottom:0px;");
						// sbut.setAttribute("style","border-bottom:1px;");
				
					}
					else{
						
					}
					}
				
					function fun2(){
						if(sign.style.display="none"){
							sign.style.display="block";
							log.style.display="none";
							lbut.style.backgroundColor="transparent";
							sbut.style.backgroundColor="#1c7299";
						}
						
					}
				
				
				</script>

	 </div>
</header>
<div class="menu2">
				<a href="">  Do You Know</a>
				<a href="">  Experiances</a>
				<a href="">  Questions</a>
				
			</div>
<script>
	const navSlide = () => {
 const c= document.querySelector('.container1');
 const nav= document.querySelector('.navber');
//  const link= document.querySeleter('.navber-item');

 c.addEventListener('click',()=>{
     nav.classList.toggle('nav-active');

 });

//  link.forEach((link,index)=> {
//      console.log(index);
//      link.style.animation = 'navLinkFade 0.5s ease forward ${index/7 + 2}s';
//     //  console.log(index/5 + 0.2);
//  });
}

navSlide();


	var lbox = document.getElementById("box");
	function loginBox(){
        if(lbox.style.display="none"){
		lbox.style.display="block";
		}
		else if(lbox.style.display="block"){
			lbox.style.display="none";
		}
	     
	}
		
</script>