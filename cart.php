<?php 
session_start();  
include_once 'inc/db.php';
if(empty($_SESSION['articles']) || !isset($_SESSION['articles']))
    $_SESSION['articles']=array();
else
 $_SESSION['articles']= str_replace(str_split('[]'), '', $_SESSION['articles']); 
 //var_dump($_SESSION);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive item table.">
    <title>Cart</title>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/grids-responsive-min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/forms-min.css">
    

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="css/cart.css">
   
  </head>
  <body>

    <div class="pure-g" id="haut">

        <div class="pure-u-1 pure-u-md-1-5"> 
           <center><img class="pure-img" src="img/lo.png"   id="logo" alt="logo"></center> 
        </div>
    
        <div class="pure-u-1 pure-u-md-3-5">
            <center>
            <div class="pure-menu pure-menu-horizontal">
                <ul class="pure-menu-list">
                    <li class="pure-menu-item"><a href="index.php" class="pure-menu-link">Home</a></li>
                    <li class="pure-menu-item"><a href="index.php" class="pure-menu-link">Product</a></li>
                    <li class="pure-menu-item"><a href="index.php" class="pure-menu-link">Contact</a></li>
                </ul>
            </div>
    
            </center>
        </div>
        
        <div class="pure-u-1 pure-u-md-1-5" id="main">
            <center>
                <br>
                <button class="pure-button" onclick=window.location.href='cart.html';><i class="fa fa-shopping-cart"></i></button>
                <button  class="pure-button"  onclick="openNav()"><i class="fa fa-sign-in"></i></button>
            </center> 
        </div>
    </div>

<div class="l-content">
    <div class="pure-g">
      <div class="pure-u-1">
        <h3>Votre panier</h3>
      </div>
      <table class="pure-table">
  <thead>
    <tr>
      <th></th>
      <th>Article</th>
      <th>Quantité</th>
      <th>Prix</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody> 
  
        <?php 
        $s = $_SESSION['articles'];
        $articles = R::findAll('articles', 'id IN ('.$s.')');
        $total = 0;
        foreach ($articles as $a) { 
            
            echo ' 
            <tr>
                    <td><img style="max-width:100px" src="'.$a->image.'" alt="'.$a->name_article.'"></td>
                    <td>'.$a->name.'</td>
                    <td><input type="number" min="1" max="9" step="1" value="1" id="number"></td>
                    <td>'.$a->prix.' Dhs</td>
                    <td>   <div class="remove">
            <a href="#" id="ferme-2" >&times;</a></td>
                  </tr>'; 
                  $total += $a->prix; 
               }
        ?>        
    <tr>
      
      <td></td><td></td><td></td>
      <td><?php echo 'Total: '.$total;?></td>
    </tr>
 
  </tbody>
</table>
    <center>
      <div class="form-box" >
        <button class="pure-button pure-button-primary" onclick=window.location.href='confirmation.php';>Continuer l'achat</button>
      </div>
  </center>
  </div>
    </div>

  </body>
</html>