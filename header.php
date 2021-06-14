<header>
<div class="navigation-container">
<div class="navigation-content">
<div class="logo"><img src="images/capture.png" width="150px" /></div>
<div class="menu">
<ul>
<li><a href="index.php">ACCUEIL</a></li>
<li><a href="menu.php">MENU</a></li>
<li><a href="special.php">SPECIAL</a></li>
<li><a href="promotions.php">PROMOTIONS</a></li>
<li><a href="login.php">SIGN-IN</a></li>
<li><a href="registration.php">SIGN-UP</a></li>
<li><a href="team.php">TEAM</a></li>
</ul>

</div>
<div class="cart">
<img src="images/cart.png" height="30px">
<a href="panier.php">Panier</a>
</div>
</div>
</div>
</header>  
<style>
    @charset "utf-8";
/* CSS Document */
*{
	box-sizing:border-box;}

ul{
	list-style:none;}
a{
	text-decoration:none;}

.navigation-container{
	width:100%;
	height:75px;
	background-color:#921E22;
	box-shadow:2px 2px 12px rgba(0,0,0,0.20);
	position:fixed;
	top:0px;}
.navigation-content{
		height:75px;
	margin:0px 12%;
	display:flex;
	align-items:center;
	justify-content:space-between;
	}
    .navigation-content{
			border-bottom:2px solid rgba(255,255,255,0.10)}
    .menu ul{
	display:flex;
	}
.menu ul li a{
	padding:0px 30px;
	font-family:calibri;
	font-weight:bold;
	color:#FFFFFF;
	border-left:3px solid #992E31;}
    .cart{
	display:flex;
	align-items:center;
	font-family:calibri;
	font-weight:bold;}
.cart a{
	color:#FFFFFF;
	margin:0px 10px;}
</style>  


