"use strict";

let productString = localStorage.getItem('cart');
let product = JSON.parse(productString);


    
document.getElementById("product-name-1").innerHTML = product[0].name;
document.getElementById("product-price-1").innerHTML = product[0].price+"$";
document.getElementById("prod-1").src = product[0].image;

document.getElementById("product-name-2").innerHTML = product[1].name;
document.getElementById("product-price-2").innerHTML = product[1].price+"$";
document.getElementById("prod-2").src = product[1].image;

document.getElementById("product-name-3").innerHTML = product[2].name;
document.getElementById("product-price-3").innerHTML = product[2].price+"$";
document.getElementById("prod-3").src = product[2].image;

document.getElementById("product-name-4").innerHTML = product[3].name;
document.getElementById("product-price-4").innerHTML = product[3].price+"$";
document.getElementById("prod-4").src = product[3].image;

let tot=parseInt(product[0].price)+parseInt(product[1].price)+parseInt(product[2].price)+parseInt(product[3].price);
document.getElementById("total").innerHTML = "Total: "+tot;
 
 


let fermer1 = document.getElementById('ferme-1');
 fermer1.addEventListener ('click', function() {
 let element = document.getElementById('item-1');
 element.remove(); 
 tot=tot-parseInt(product[0].price);
 document.getElementById("total").innerHTML = "Total: "+tot;   });

   let fermer2 = document.getElementById('ferme-2');
 fermer2.addEventListener ('click', function() {
 let element = document.getElementById('item-2');
 element.remove(); 
 tot=tot-parseInt(product[1].price);
 document.getElementById("total").innerHTML = "Total: "+tot;
});

   let fermer3 = document.getElementById('ferme-3');
 fermer3.addEventListener ('click', function() {
 let element = document.getElementById('item-3');
 element.remove(); 
 tot=tot-parseInt(product[2].price);
 document.getElementById("total").innerHTML = "Total: "+tot;
});

   let fermer4 = document.getElementById('ferme-4');
 fermer4.addEventListener ('click', function() {
 let element = document.getElementById('item-4');
 element.remove();  
 tot=tot-parseInt(product[3].price);
 document.getElementById("total").innerHTML = "Total: "+tot;});  
 


