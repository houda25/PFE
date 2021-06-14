<?php
require 'db.class.php';
$DB = new DB('');
var_dump($DB->query('SELECT * FROM panier'));
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Savorlee's menu</title>
<body>
<?php include "header.php" ?>
<br>
<br>
<br>
<br>
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p1.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">PIZZA</h2>
</div>
<a href = "#" class = "product-name">PANACHÉE L</a>
<p class = "product-price">450 DA</p>
</div>

</div>
<!-- end of single product -->
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p2.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">PIZZA</h2>
</div>
<a href = "#" class = "product-name">PANACHÉE XL</a>
<p class = "product-price">900 DA</p>
</div>

</div>
<!-- end of single product -->
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p3.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">PIZZA</h2>
</div>
<a href = "#" class = "product-name">PANACHÉE XXL</a>
<p class = "product-price">1300 DA</p>
</div>

</div>
<!-- end of single product -->
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p4.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">PIZZA</h2>
</div>
<a href = "#" class = "product-name">3 SAISONS THON XL</a>
<p class = "product-price">900 DA</p>
</div>

</div>
<!-- end of single product -->
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p5.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">PIZZA</h2>
</div>
<a href = "#" class = "product-name">3 SAISONS THON XXL</a>
<p class = "product-price">1300 DA</p>
</div>

</div>
<!-- end of single product -->
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p6.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">PIZZA</h2>
</div>
<a href = "#" class = "product-name">3 SAISONS MERGUEZ XL</a>
<p class = "product-price">900 DA</p>
</div>

</div>
<!-- end of single product -->
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p7.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">PIZZA</h2>
</div>
<a href = "#" class = "product-name">3 SAISONS MERGUEZ XXL</a>
<p class = "product-price">1300 DA</p>
</div>

</div>
<!-- end of single product -->
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p8.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">PIZZA</h2>
</div>
<a href = "#" class = "product-name">4 SAISONS XL</a>
<p class = "product-price">900 DA</p>
</div>

</div>
<!-- end of single product -->
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p9.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">PIZZA</h2>
</div>
<a href = "#" class = "product-name">4 SAISONS XXL</a>
<p class = "product-price">1300 DA</p>
</div>

</div>
<!-- end of single product -->
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p10.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">PIZZA</h2>
</div>
<a href = "#" class = "product-name">LA BOISÉE 5 FROMAGES L</a>
<p class = "product-price">550 DA</p>
</div>

</div>
<!-- end of single product -->
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p11.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">PIZZA</h2>
</div>
<a href = "#" class = "product-name">LA BOISÉE 5 FROMAGES XL</a>
<p class = "product-price">1100 DA</p>
</div>

</div>
<!-- end of single product -->
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p12.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">PIZZA</h2>
</div>
<a href = "#" class = "product-name">LA BOISÉE 5 FROMAGES XXL</a>
<p class = "product-price">1600 DA</p>
</div>

</div>
<!-- end of single product -->
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p13.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">PIZZA</h2>
</div>
<a href = "#" class = "product-name">PIZZA CHEF L</a>
<p class = "product-price">550 DA</p>
</div>

</div>
<!-- end of single product -->
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p14.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">PIZZA</h2>
</div>
<a href = "#" class = "product-name">PIZZA CHEF XL</a>
<p class = "product-price">1100 DA</p>
</div>

</div>
<!-- end of single product -->
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p15.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">PIZZA</h2>
</div>
<a href = "#" class = "product-name">PIZZA CHEF XXL</a>
<p class = "product-price">1600 DA</p>
</div>

</div>
<!-- end of single product -->
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p16.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">PIZZA</h2>
</div>
<a href = "#" class = "product-name">PIZZA 3 VIANDES XL</a>
<p class = "product-price">1100 DA</p>
</div>

</div>
<!-- end of single product -->
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p17.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">PIZZA</h2>
</div>
<a href = "#" class = "product-name">PIZZA 3 VIANDES XXL</a>
<p class = "product-price">1600 DA</p>
</div>

</div>
<!-- end of single product -->
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p18.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">PIZZA</h2>
</div>
<a href = "#" class = "product-name">4 SAISONS ROYAL XL</a>
<p class = "product-price">1500 DA</p>
</div>

</div>
<!-- end of single product -->
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p19.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">PIZZA</h2>
</div>
<a href = "#" class = "product-name">4 SAISONS ROYAL XXL</a>
<p class = "product-price">2200 DA</p>
</div>

</div>
<!-- end of single product -->
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p20.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">PIZZA</h2>
</div>
<a href = "#" class = "product-name">PIZZA MAIKY XL</a>
<p class = "product-price">1700 DA</p>
</div>

</div>
<!-- end of single product -->
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p21.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">PIZZA</h2>
</div>
<a href = "#" class = "product-name">PIZZA MAIKY XXL</a>
<p class = "product-price">2700 DA</p>
</div>
</div>
<!-- end of single product -->
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p23.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">BOISSONS</h2>
</div>
<a href = "#" class = "product-name">JUS 1L</a>
<p class = "product-price">150 DA</p>
</div>
</div>
<!-- end of single product -->
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p25.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">BOISSONS</h2>
</div>
<a href = "#" class = "product-name">CANETE SLIM</a>
<p class = "product-price">100 DA</p>
</div>
</div>
<!-- end of single product -->
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p26.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">BOISSONS</h2>
</div>
<a href = "#" class = "product-name">JUS FRAISE </a>
<p class = "product-price">450 DA</p>
</div>
</div>
<!-- end of single product -->
<!-- single product -->
<div class = "product">
<div class = "product-content">
<div class = "product-img">
<img src = "images/p27.jpg" width="350px" alt = "product image">
</div>
<div class = "product-btns">
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-cart">Add to cart</a></li>
<span><i class = "fas fa-plus"></i></span>
</button>
<li><a href="addpanier.php?id=<?=$product->id;?>"><button type = "button" class = "btn-buy">Buy now</a></li>
<span><i class = "fas fa-shopping-cart"></i></span>
</button>
</div>
</div>
<div class = "product-info">
<div class = "product-info-top">
<h2 class = "sm-title">BOISSONS</h2>
</div>
<a href = "#" class = "product-name">MOJITO</a>
<p class = "product-price">450 DA</p>
</div>
</div>
<!-- end of single product -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
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
background-image:url(images/bg2.png);
	background-size:cover;
			background-repeat:no-repeat;
			background-attachment:fixed;}
}
/* Utility stylings */
img{
width: 100%;
display: block;
}
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
/* product section */
.products{
background: var(--alice-blue);
padding: 3.2rem 0;
}
.products .text-light{
text-align: center;
width: 70%;
margin: 0.9rem auto;
}
.product{
margin: 2rem;
position: relative;
float: left;
}
.product-content{
background: var(--gray);
padding: 3rem 0.5rem 2rem 0.5rem;
cursor: pointer;
}
.product-img{
background: var(--white-light);
box-shadow: 0 0 20px 10px var(--white-light);
height: 200px;
margin: 0 auto;
}
.product-btns{
display: flex;
justify-content: center;
margin-top: 1.4rem;
opacity: 0;
transition: opacity 0.6s ease;
}
.btn-cart, .btn-buy{
background: transparent;
border: 1px solid black;
padding: 0.8rem 0;
width: 125px;
font-family: inherit;
text-transform: uppercase;
cursor: pointer;
border: none;
transition: all 0.6s ease;
}
.btn-cart{
background: black;
color: white;
}
.btn-cart:hover{
background: var(--carribean-green);
}
.btn-buy{
background: white;
}
.btn-buy:hover{
background: var(--carribean-green);
color: #fff;
}
.product-info{
background: white;
padding: 2rem;
}
.product-info-top{
display: flex;
justify-content: space-between;
align-items: center;
}
.rating span{
color: var(--carribean-green);
}
.product-name{
color: black;
display: block;
text-decoration: none;
font-size: 1rem;
text-transform: uppercase;
font-weight: bold;
}
.product-price{
padding-top: 0.6rem;
padding-right: 0.6rem;
display: inline-block;
}
.product-img img{
transition: transform 0.6s ease;
}
.product:hover .product-img img{
transform: scale(1.1);
}
.product:hover .product-img{
background: var(--carribean-green);
}
.product:hover .product-btns{
opacity: 1;
}

/* product collection */
.product-collection{
padding: 3.2rem 0;
}
.product-collection-wrapper{
padding: 3.2rem 0;
}
.product-col-left{
background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3)), url("images/fashion-img-1.jpg") center/cover no-repeat;
}
.product-col-r-top{
background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3)), url("images/fashion-img-2.png") center/cover no-repeat;
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
background: #eaa001;
}
.product-col-r-bottom > div:last-child{
background: #0090ff;
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
 </style>   

