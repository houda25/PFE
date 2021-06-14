<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Savorlee's pizzeria</title>
  
<body>
<?php include "header.php" ?>
<div class="content-container">
<div class="whats-new">
<img src="images/WHATS NEW.png">
</div>
<div class="content">
<div class="first-row">
<div class="new">
<p>VARIEGATED</p>
<p>Drinks Available</p>
<button >HOT AND SPICY</button>
</div>
<barsearch>
<div class="find">
<div class="search">
<p>SEARCH FOR SOMETHING?</p>
<div class="text">
<input type="search"/>
<button>Search</button>
</div>
</div>
</barsearch><div class="order">
<a href="#"><font style="color:#F9A609;">ORDER</font> ONLINE</a>
</div>
</div>
</div>
<div class="second-row">
<div class="food-one">
<div class="name">
<p>3 SEASONS</p>
<p>TUNA</p>
</div>
<div class="price"><button>900<sup>DA</sup></button></div>
</div>
<div class="food-two">
<div class="name">
<p>4 SEASONS</p>
<p>ROYAL</p>
</div>
<div class="price"><button>1500<sup>DA</sup></button></div>
</div>
<div class="food-three">
<div class="name">
<p>3 SEASONS</p>
<p>MERGUEZ</p>
</div>
<div class="price"><button>900<sup>DA</sup></button></div>
</div>
</div>
<div class="third-row">
<div class="flavor">
<a href="#">
<p>AND MORE!</p>
<p>CREVETTE| SAUMON| DINDE</p>
</a>
</div>
<div class="breakfast">
<a href="#">
<p>SPECIAL PIZZA</p>
<p>MAKE YOUR SPECIAL ONE</p>
</a>
</div>
</div>
</div>
</div>
</div>
<?php include "footer.php" ?>
</body>
</html>

<style>
/* CSS Document */
body{
	margin:0px;
	padding:0px;
	background-image:url(images/bg2.png);
	background-size:cover;
			background-repeat:no-repeat;
			background-attachment:fixed;}
.whats-new{
	display:flex;
	justify-content:center;
	margin:7% 0px 20px 0px;}
	.content{
		display:flex;
		flex-direction:column;
		align-items:center;}
		.first-row{
			display:flex;}

	.new{
		width:540px;
		height:320px;
		margin:10px;
		background-color:#B1B1B1;}
	.search,.order{
		width:540px;
		height:150px;
		margin:10px;
		background-color:#B1B1B1;
		display:flex;
		flex-direction:column;}
		.find{
	display:flex;
	flex-direction:column;
	justify-content:center;
	align-content:center;}
	.search p{
		color:#FFFFFF;
		font-size:25px;
		font-family:calibri;
		font-weight:bold;
		line-height:0px;
		text-shadow:2px 2px 12px rgba(0,0,0,0.5);
		
	}
.food-one,.food-two,.food-three{
	width:354px;
		height:350px;
		margin:10px;
		
		background-color:#B1B1B1;
	}
.second-row{
	display:flex;
	}
.flavor,.breakfast{
	width:540px;
	height:180px;
	margin:10px;
	background-color:#b1b1b1;}
	.third-row{
		display:flex;}
	.new p{
		color:#FFFFFF;
		line-height:50px;
		padding:0px;
		margin:0px;
		
		}
	.new p:nth-child(1){
		font-size:40px;
		font-family:calibri;
		font-weight:bold;}
			.new p:nth-child(2){
		font-size:30px;
		font-family:myriad pro;
		}
		.new{
			padding:40px;
			display:flex;
			flex-direction:column;
			justify-content:center;
		
			}
	.new button{
		width:120px;
		height:35px;
		border-radius:10px;
		background-color:#ea272d;
		text-align:center;
		font-family:calibri;
		font-weight:400;
		color:#FFFFFF;
		font-size:16px;
		border:none;
		box-shadow:2px 2px 12px rgba(0,0,0,0.2);
		outline:none;}
	button:active{
		transform:scale(1.1);
		transition:all ease 0.5s;}
	
	.text{
		background-color:#F1F1F1;
		border-radius:20px ;
		width:250px;
		height:35px;
		display:flex;
		justify-content:space-around;
		align-items:center;
		box-shadow:2px 2px 12px rgba(0,0,0,0.2);}
		.text input[type=search]{
			border:none;
			background-color:transparent;
			color:#000000;
			text-align:center;
			outline:none;}
		.search{
			display:flex;
			justify-content:center;
			align-items:center;}
		.text button{
			height:35px;
			width:100px;
			border:none;
			color:#0B0B0B;
			font-family:calibri;
			font-weight:bold;
			outline:none;
			border-radius:0px 20px 20px 0px;
			}
	.text button:hover{
		color:#ea272d;
		transition:all ease 0.5s;}
	.order{
		display:flex;
		justify-content:center;
		align-items:center;
		}
	.order a{
		font-family:calibri;
		font-weight:bold;
		color:#FFFFFF;
		font-size:40px;
		text-shadow:2px 2px 12px rgba(0,0,0,0.1);}
	.name p{
		font-family:calibri;
		color:#FFFFFF;
		line-height:40px;
		margin:0px;
		padding:0px;}
	.name p:nth-child(1){
		font-weight:bold;
		font-size:40px;}
		.name p:nth-child(2){
		font-weight:200;
		font-size:30px;}
	.food-one,.food-two,.food-three{
		display:flex;
		flex-direction:column;
		justify-content:space-between;
		padding:5%;
		text-shadow:2px 2px 12px rgba(0,0,0,0.2);
		}
	.price button{
		color:#FFFFFF;
		border:none;
		background-color:transparent;
		outline:none;
		width:70px;
		height:35px;
		border-radius:20px;
		background-color:#ea272d;
		box-shadow:2px 2px 12px rgba(0,0,0,0.2);
		}
	.flavor,.breakfast{
		font-family:calibri;
		display:flex;
		justify-content:center;
		align-items:center;
		line-height:0px;
		}
		.flavor p:nth-child(1),
		.breakfast p:nth-child(1){
			color:#FFFFFF;
			font-weight:bold;
			font-size:40px;}
		.flavor p:nth-child(2),
		.breakfast p:nth-child(2){
			font-size:20px;
			color:rgba(255,255,255,0.50);
			text-align:center;}
		.new{
			background-image:url(images/eating.gif);
			background-size:cover;
			background-repeat:no-repeat;
			
			
			}
			.search{
			background-image:url(images/find.png);
			background-size:cover;
			background-repeat:no-repeat;

			}
		.order{
			background-image:url(images/order.png);
			background-size:cover;
			background-repeat:no-repeat;
			}
		.food-one{
			background-image:url(images/food-1.png);
			background-size:cover;
			background-repeat:no-repeat;
			}
		.food-two{
			background-image:url(images/food-4.gif);
			background-size:cover;
			background-repeat:no-repeat;
		}
		.food-three{
			background-image:url(images/food-2.png);
			background-size:cover;
			background-repeat:no-repeat;
			}
			
		.flavor{
			background-image:url(images/flavor.png);
			background-size:cover;
			background-repeat:no-repeat;
			}
		.breakfast{
			background-image:url(images/preparing.gif);
			background-size:cover;
			background-repeat:no-repeat;
			}
	
::-webkit-scrollbar{
	width:15px;
	background-color:#1B1B1B;
	border:1px solid #1b1b1b;}

::-webkit-scrollbar-track{
	box-shadow: 0 0 5px rgba(0,233,253,1.00);
	}
::-webkit-scrollbar-thumb{
	background-color:#ea272d;
	border-left:2px solid #1b1b1b;

	}
.new,.search,.order,.food-one,.food-two,.food-three,.breakfast,.flavor{
	border-radius:5px;
}
</style>