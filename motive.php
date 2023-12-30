<?php
include 'header.php';
?>
<style>
.box{

width: 100%; height: 5vh;
background-color: orange;

}
.motive {
font-family: content;
height: 120vh;
align-content: center; 
margin:auto ;
margin-bottom: 0px;
padding: 10%;
padding-top: 0px;
padding-bottom: 0px;
}

.motive h1{
font-family: main;
word-spacing: 10px;
display: flex;
justify-content: center;
align-items:center;
text-decoration: underline;
font-weight: bold;
font-size: 50px;

}
.motive h2{
word-spacing: 5px;
color: red;
font-size: 32px;	
}
.motive h4{
font-size: 24px;
word-spacing: 2px;	
}
.center-content{
margin-top: 20px;
}

.image{
background-image: url("motive/Untitled-2.png");
width: 50%; height:50vh;
float: left;
background-size: 140%, 200%;
background-repeat: no-repeat;

}
.content{
font-family: content;
font-size: 24px;
word-spacing: 2px;
width: 50%; height: 50vh;
float: right;
text-align: center;

    
}
.points{

font-size: 28px;
word-spacing: 2px;
color: blue;
padding-left: 5px;
        
}




.logo{
border-radius: 50%;
background-color: orange;
width: 80px;
height: 80px;

}
.logo img{
margin: 8px;
width: 60px; height: 60px;}
.benifits{
font-family: content;
align-content: center; 
padding: 10%;
padding-top: 50px;
width: 100%; height: 120vh;
background-image: url('motive/background.jpg');
background-repeat: no-repeat;
background-position: right;
/*background-color: rgba(0, 0, 0, 0.3);*/

}
.benifits h2{
word-spacing: 5px;
color: orange;
font-size: 38px;	
}
.box1{
position: relative;
width: 100%; height: 50px;
background-color: white;
}
.square{
position: absolute;
left: 45%; right: 45%;
bottom: 50%;
width: 50px; height:50px;
background-color:rgba(255, 0, 0, 1) ;
transform: rotate(45deg);

}

</style>
<main>
	  <div class="motive">
			<h1>Motive</h1><br>
			<h2>Issac Newton</h2>
 <h4>Falling of an "apple" on his head lead him to know about the gravity.</h4><br>

<h2>Archimede</h2>
 <h4>After accidental diving in bathtub, he goes to know about upthrust by fluid.</h4><br>
<div class="center-content">
			<div class="image"></div>
			<div class="content">	
<h5>In the same way we also have such type of experiences which help us to understand
any concept more easily.<br>Such phenomenon confuse us at that part of time but they make us curious as well.<br>
We find answers, What, Why, How is this happening?
</h5>
</div>
</div>
</div>
<div class="benifits">
<h2>By interchanging of such type of learning experiances  can </h2>
		<table>
			<tr>
				<td class="logo"><img src="motive/brain.png" alt="brain"></td>
				<td class="points">help us to make concepts more stronger,</td>
			</tr>
			<tr>
				<td class="logo"><img src="motive/study.png" alt="study"></td>
				<td class="points">increase intrest in studying,</td>
			</tr>
			<tr>
				<td class="logo"><img src="motive/idea.png" alt="book"></td>
				<td class="points">improve the connection between theoretical studies and real world,</td>
			</tr>
			<tr>
				<td class="logo"><img src="motive/thinking.png" alt="book"></td>
				<td class="points">change the way of observing and</td>
			</tr>
			<tr>
				<td class="logo"><img src="motive/question.png" alt="book"></td>
				<td class="points">teach us How to Think.</td>

			</tr>
		</table>

	</div>
	  <div class="box1">
	  	<div class="square"></div>
	  </div>

  
</main>