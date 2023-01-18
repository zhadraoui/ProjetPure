<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <title>Registration Form</title>
</head>
<body>
  <div class="pure-g">
    <div class="pure-u-1 pure-u-md-1-2"></div>
    <div class="pure-u-1 pure-u-md-1-2">
      <form class="pure-form pure-form-stacked" action="register.php" method="post">
        <fieldset>
          <legend>Registration Form</legend>
            <label for="name">Username</label>
            <input id="name" type="text" placeholder="UserName" name="Usernname" required>
            <label for="email">Email</label>
            <input id="email" type="email" placeholder="Email" name="email" required>
            <label for="password">Password</label>
            <input id="password" type="password" placeholder="Password" name="password" required>
            <label for="confirm_password">Confirm Password</label>
            <input id="confirm_password" type="password" placeholder="Confirm Password" name="confirm_password" required>
            <button type="submit" class="pure-button pure-button-primary">Register</button>
        </fieldset>
      </form>
    </div>
    <div class="pure-u-1 pure-u-md-1-3"></div>
  </div>
</body>
</html>
