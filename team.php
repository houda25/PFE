<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title></title>
<script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include "header.php" ?>
<div class = "product-collection">
<div class = "container">
<div class = "product-collection-wrapper">
<!-- person left -->
<div class = "product-col-left flex">
<div class = "product-col-content">
<h2 class = "sm-title">Chef  </h2>
<h2 class = "md-title">Samadi Youcef </h2>
<p class = "text-light"></p>
<li><a href="https://www.facebook.com/samadi.you"><button type = "button" class = "btn-dark">Contact</button></a></li>
</div>
</div>
<!-- person right -->
<div class = "product-col-right">
<div class = "product-col-r-top flex">
<div class = "product-col-content">
<h2 class = "sm-title">Cooker </h2>
<h2 class = "md-title"> Grine Rayenne </h2>
<p class = "text-light">I grew up in the family business and now put my experience in production, maintenance and procurement to work to guide our company. My servant leadership ensures that we deliver a Great Pizza Experience – not only our company mission, but also Rayenne’s personal mission. I can often be seen on the production floor or in other areas of the business.</p>
<li><a href="https://www.facebook.com/rianna.gree"><button type = "button" class = "btn-dark">Contact</button></a></li>
</div>
</div>
<div class = "product-col-r-bottom">
<!-- left -->
<div class = "flex">
<div class = "product-col-content">
<h2 class = "sm-title">Cooker </h2>
<h2 class = "md-title"> Guerza Wiam </h2>
<p class = "text-light">My passion for Pizza and people is without a doubt a tribute to my grandparents, whose spirit continues to guide the business they founded more than 50 years ago. I'm proud to be part of the third generation of Gueras involved in the family business.</p>
<li><a href="https://www.facebook.com/wiam.gr.1297"><button type = "button" class = "btn-dark">Contact</button></a></li>
</div>
</div>
<!-- right -->
<div class = "flex">
<div class = "product-col-content">
<h2 class = "sm-title">Cooker </h2>
<h2 class = "md-title"> Bendjedidi Nor Elhouda </h2>
<p class = "text-light"> I'm responsible for providing a comprehensive vision for the Savorlee's brand. I manage the creative process to ensure that Savorlee’s achieves its goals while retaining its authentic Algerian heritage.</p>
<li><a href="https://www.facebook.com/houda.hiza"><button type = "button" class = "btn-dark">Contact</button></a></li>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include "footer.php" ?>

</body>
</html>

<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700;900&display=swap');
:root{
--white-light: rgba(255, 255, 255, 0.5);
--alice-blue: #f8f9fa;
--carribean-green: #40c9a2;
--gray: #ededed;
}
*{
padding: 0;
margin: 0;
box-sizing: border-box;
}
body{
font-family: 'Quicksand', sans-serif;
background-color: #0A0A0A;
}
/* Utility stylings */

.container{
width: 88vw;
margin: 0 auto;
}
.lg-title,
.md-title,
.sm-title{
font-family: 'Roboto', sans-serif;
padding: 0.6rem 0;
text-transform: capitalize;
}
.lg-title{
font-size: 2.5rem;
font-weight: 500;
text-align: center;
padding: 1.3rem 0;
opacity: 0.9;
}
.md-title{
font-size: 2rem;
font-family: 'Roboto', sans-serif;
}
.sm-title{
font-weight: 300;
font-size: 1rem;
text-transform: uppercase;
}
.text-light{
font-size: 1rem;
font-weight: 600;
line-height: 1.5;
opacity: 0.5;
margin: 0.4rem 0;
}
/* product collection */
.product-collection{
padding: 3.2rem 0;
}
.product-collection-wrapper{
padding: 3.2rem 0;
}
.product-col-left{
	background-image:url(images/you.png);
    margin:0px;
	padding:0px;
	background-size:cover;
			background-repeat:no-repeat;
			background-attachment:center;
}
.product-col-r-top{
	background-image:url(images/rayenne.png);
    margin:0px;
	padding:0px;
	background-size:cover;
			background-repeat:no-repeat;
			background-attachment:center;
}
.flex{
display: flex;
justify-content: center;
align-items: flex-end;
height: 50vh;
padding: 2rem 1.5rem 3.2rem;
margin: 5px;
}
.product-col-r-bottom > div:first-child{
	background-image:url(images/wiam.png);
    margin:0px;
	padding:0px;
	background-size:cover;
			background-repeat:no-repeat;
			background-attachment:center;
}
.product-col-r-bottom > div:last-child{
	background-image:url(images/houda.png);
    margin:0px;
	padding:0px;
	background-size:cover;
			background-repeat:no-repeat;
			background-attachment:center;
}
.product-col-content{
text-align: center;
color: white;
}
.product-collection .text-light{
opacity: 1;
font-size: 0.8;
font-weight: 400;
line-height: 1.7;
}
.btn-dark{
background: black;
color: white;
outline: 0;
border-radius: 25px;
padding: 0.7rem 1rem;
border: 0;
margin-top: 1rem;
cursor: pointer;
transition: all 0.6s ease;
font-size: 1rem;
font-family: inherit;
}
.btn-dark:hover{
background: var(--carribean-green);
}
/* Media Queries */
@media screen and (min-width: 992px){
.product-items{
display: grid;
grid-template-columns: repeat(2, 1fr);
}
.product-col-r-bottom{
display: grid;
grid-template-columns: repeat(2, 1fr);
}
}
@media screen and (min-width: 1200px){
.product-items{
grid-template-columns: repeat(3, 1fr);
}
.product{
margin-right: 1rem;
margin-left: 1rem;
}
.products .text-light{
width: 50%;
}
}
@media screen and (min-width: 1336px){
.product-items{
grid-template-columns: repeat(4, 1fr);
}
.product-collection-wrapper{
display: grid;
grid-template-columns: repeat(2, 1fr);
}
.flex{
height: 60vh;
}
.product-col-left{
height: 121.5vh;
}
}
</style>