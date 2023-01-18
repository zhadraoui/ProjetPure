<?php
session_start(); 
include_once 'inc/db.php';
if(empty($_SESSION['articles']) || !isset($_SESSION['articles']))
    $_SESSION['articles']='';

$articles = R::findAll('articles');  
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" 		content="width=device-width, initial-scale=1.0">
<meta name="description" 	content="A layout example that shows off a responsive item table.">
<title>pure store</title>
<link rel="stylesheet" 		href="css/pure-min.css">
<link rel="stylesheet" 		href="css/grids-responsive-min.css">
<link rel="stylesheet" 		href="css/forms-min.css">
<link rel="stylesheet"		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
<link rel="stylesheet" 		href="css/style.css">
<link rel="stylesheet" 		href="css/cart.css">
<link rel="stylesheet" 		href="css/menu.css">
</head>
<body>
	
	
<div class="pure-g" id="haut">
  <div class="pure-u-1 pure-u-md-1-5">
    <center>
      <img  src="img/lo.png"   id="logo" alt="logo">
    </center>
  </div>
  <div class="pure-u-1 pure-u-md-3-5">
    <center>
      <div class="pure-menu pure-menu-horizontal"> 
      <!--a href="index.php" class="pure-menu-heading">artisanal Souk</a-->
        <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="about.html" class="pure-menu-link">A propos</a></li>
          <li class="pure-menu-item"><a href="index.php" class="pure-menu-link">Home</a></li>
          <li class="pure-menu-item "><a href="index.php" class="pure-menu-link">Produits</a></li>
          <li class="pure-menu-item"><a href="contact.php" class="pure-menu-link"><!--i class="fa fa-fw fa-envelope"--></i>Contact</a></li>
        </ul>
      </div>
      <br>
      <div class="pure-u-1 form-box">
        <div class="l-box">
          <form class="pure-form">
            <input type="text" placeholder="Search your product" />
            <button type="submit" class="pure-button">Search</button>
          </form>
        </div>
      </div>
      <br>
    </center>
  </div>
  <div class="pure-u-1 pure-u-md-1-5" id="main">
    <center>
      <br>
		
<?php if(isset($_SESSION['login'])){ ?>
  		<a  class="pure-button"  href='destroy.php'><i class="fa fa-sign-out-alt"></i></a>
		<i class="">
	 <button class="pure-button" ><a href="cart.php"><span id='nbrArticle'> </span><i class="fa fa-shopping-cart"></i></a></button>
		<?php
			echo 'Bienvenu '.$_SESSION['login']; ?>
        <?php
		}else{?>
	
 		<button  class="pure-button" onclick="openNav()"><i class="fa fa-sign-in-alt"></i> Se Connecter</button>
			<?php } ?>
			
	
    </center>
  </div>
</div>
<div class="pure-g">
  <div class="pure-u-1">
    <div id="mySidebar" class="sidebar"> <a href="javascript:void(0)" class="closebtn" id="ferme" onclick="closeNav()">&times;</a>
      <form action="auth.php" method="post" accept-charset="UTF-8" autocomplete="off" >
        <div class="container">
          <h2>Authentification</h2>
          <hr>
          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Login" name="username" id="username" required>
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" id="password" required>
          <hr>
          <button type="submit" class="registerbtn">Se connecter</button>
        </div>
        <div class="container signin" style="padding: 1px;">
          <p>Créer un compte <a href="Register.php" >Cliquez ici</a>.</p>
        </div>
      </form>
    </div>
  </div>
</div>



<!--Start Menu Responsive-->

<div id="mySidenav_" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeMenu()">&times;</a>
  <a href="about.html">A propos</a>
  <a href="index.php">Produits</a>
  <a href="contact.php">Contact</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openMenu()">&#9776; </span>

<div class="banner ">
</div>
	
<!--End Menu Responsive-->


<div class="pure-g">
  <div class="pure-u-1 pure-u-md-1-3"> <img src="img/sbaner1.png" class="pure-img" alt="sbaner" id="sbaner1"> </div>
  <div class="pure-u-1 pure-u-md-1-3"> <img src="img/sbaner2.png" class="pure-img" alt="sbaner" id="sbaner2"> </div>
  <div class="pure-u-1 pure-u-md-1-3"> <img src="img/sbaner4.png" class="pure-img" alt="sbaner" id="sbaner3"> </div>
</div>

   <!-- Start Card -->
<div class="l-content">
  <h2>OUR PRODUCTS</h2>
	 
  <div class="item-tables pure-g">
	  
 <?php
foreach($articles as $a)
{ 
    echo '<div class="pure-u-1 pure-u-md-1-3"  > 
      <div class="item-table item-table-one card">
        <div class="item-table-header">
			<h2 class="product">'.$a->name.'</h2>
          	<img src="'.$a->image.'" class="pure-img product-image" alt="'.$a->name.'" > 
		</div>
        <ul class="item-table-list">
          	<li>'.$a->prix.' '.$a->devise.'</li>
			<li>
				<span class="fas fa-star" data-star="1"></span>
				<span class="fas fa-star" data-star="2"></span>
				<span class="fas fa-star" data-star="3"></span>
				<span class="fas fa-star" data-star="4"></span>
				<span class="fas fa-star" data-star="5"></span>
			</li>
          <li>'.$a->stock.' articles restants</li>
        </ul>
        <a onclick="check('.$a->id.')" class="button-choose pure-button">Ajouter au panier</a>

      </div>
    </div>';
}
 ?>
	 
  </div>
  <!--     End l-content --> 
</div>
<div class="footer l-box">
  <center>
    <div class="pure-u-1 form-box">
      <div class="l-box">
        <h2 style="color: azure;">Subscribe Newsletter</h2>
        <form class="pure-form">
          <input type="text" placeholder="Enter Email" />
          <button type="submit" class="pure-button">Subscribe</button>
        </form>
      </div>
    </div>
  </center>
  <hr>
  <div class="pure-g">
    <div class="pure-u-1 pure-u-md-1-3">
      <p> © 2023 All rights reserved. Artisanal Souk </p>
    </div>
    <div class="pure-u-1 pure-u-md-1-3" > </div>
    <div class="pure-u-1 pure-u-md-1-3" id="payment">
      <center>
        <img class="pure-img" src="img/payment.png" id="pay" alt="payment" >
      </center>
    </div>
  </div>
</div>
<script src="js/jquery-3.6.3.min.js"></script>
<script src="js/star.js"></script>
<script src="js/myjs.js"></script>
	<script >
	var arr = [];
	    function check(value){
	        var chec = confirm("Voulez-vous continuer l'achat? Cliquez sur annuler pour aller directement au panier");
	        arr.push(value);
            $('#nbrArticle').html(arr.length);
            //$.session.set("articles", arr);
            const jsonArray = JSON.stringify(arr);
            document.cookie = "js_var_value = " + jsonArray;
            <?php 
            $val= $_COOKIE['js_var_value'];
            $_SESSION['articles']=$val;
            ?>
            
	        if(chec){
	            //console.log("continu l'achat "+ value);
	            
	        }else{
	            //console.log("fin d'achat "+ value);
	            window.location.href="cart.php";
	            
	        }
	    }
	</script>
</body>
</html>