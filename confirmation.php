<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive item table.">
    <title>Cart</title>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/pure/pure-min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/grids-responsive-min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/forms-min.css">
    
    <link rel="stylesheet" href="/css/pure/grids-responsive-min.css">
    <link rel="stylesheet" href="/layouts/item/styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css">
    <style>
      .checkout-form {
        max-width: 600px;
        margin: 0 auto;
      }
      .checkout-form h1 {
        text-align: center;
      }
      .checkout-form fieldset {
        border: none;
        margin: 2em 0;
      }
      .checkout-form legend {
        font-size: 1.2em;
        font-weight: bold;
        margin-bottom: 0.5em;
      }
      .checkout-form label {
        display: block;
        margin-bottom: 0.5em;
      }
      .checkout-form input[type="text"],
      .checkout-form input[type="email"],
      .checkout-form input[type="tel"],
      .checkout-form input[type="number"],
      .checkout-form select {
        width: 100%;
        padding: 0.5em;
        font-size: 1em;
        border: 1px solid #ccc;
      }
      .checkout-form input[type="text"]:focus,
      .checkout-form input[type="email"]:focus,
      .checkout-form input[type="tel"]:focus,
      .checkout-form input[type="number"]:focus,
      .checkout-form select:focus {
        border-color: #999;
      }
      .checkout-form .half {
        width: 50%;
        float: left;
      }
      .checkout-form .half:last-child {
        width: 50%;
        float: right;
      }
      .checkout-form .full {
        width: 100%;
        clear: both;
      }
      .checkout-form .button-container {
        text-align: center;
        margin-top: 2em;
      }
      .checkout-form button {
        display: inline-block;
        padding: 0.5em 1em;
        font-size: 1em;
        background-color: #999;
        color: #fff;
        border: none;
        cursor: pointer;
      }
      .checkout-form button:hover {
        background-color: #777;
      }
    </style>
  </head>
  <body>
    <form class="checkout-form pure-form pure-form-stacked">
      <h1>Checkout</h1>
      <fieldset>
        <legend>Shipping Information</legend>
        <div class="pure-g">
          <div class="pure-u-1 pure-u-md-1-2">
            <label for="shipping-name">Name</label>
            <input id="shipping-name" type="text" required>
          </div>
          <div class="pure-u-1 pure-u-md-1-2">
            <label for="shipping-email">Email</label>
            <input id="shipping-email" type="email" required>
          </div>
          <div class="pure-u-1 pure-u-md-1-2">
            <label for="shipping-phone">Phone</label>
            <input id="shipping-phone" type="tel">
          </div>
          <div class="pure-u-1 pure-u-md-1-2">
            <label for="shipping-address">Address</label>
            <input id="shipping-address" type="text" required>
          </div>
          <div class="pure-u-1 pure-u-md-1-2">
            <label for="shipping-city">City</label>
            <input id="shipping-city" type="text" required>
          </div>
          <div class="pure-u-1 pure-u-md-1-2">
            <label for="shipping-state">State</label>
            <select id="shipping-state" required>
              <option value="">Select a state</option>
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <!-- More options -->
            </select>
          </div>
          <div class="pure-u-1 pure-u-md-1-2">
            <label for="shipping-zip">Zip</label>
            <input id="shipping-zip" type="number" required>
          </div>
        </fieldset>
        <fieldset>
          <legend>Payment Information</legend>
          <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-2">
              <label for="payment-name">Name on Card</label>
              <input id="payment-name" type="text" required>
            </div>
            <div class="pure-u-1 pure-u-md-1-2">
              <label for="payment-card">Card Number</label>
              <input id="payment-card" type="text" required>
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
              <label for="payment-expiration">Expiration</label>
              <input id="payment-expiration" type="text" placeholder="MM/YY" required>
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
              <label for="payment-cvv">CVV</label>
              <input id="payment-cvv" type="number" required>
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
              <label for="payment-zip">Zip</label>
              <input id="payment-zip" type="number" required>
            </div>
          </div>
        </fieldset>
        <div class="button-container">
          <button type="submit" class="pure-button pure-button-primary">Submit Order</button>
        </div>
      </form>

     
    </body>
  </html>
    