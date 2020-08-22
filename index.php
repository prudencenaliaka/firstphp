
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>signup</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
  <body>
    <div class="container">
    <form class="was-validated"  action='connect.php' method='post' accept-charset='UTF-8'>
    <h2>Create Account</h2>

    <div class="form-group">
      <label>username:</label>
    <input type='text' name='email' id='username' maxlength="50" required/>
  </div>

    <div class="form-group">
      <label>E-mail:</label>
    <input type='text' name='email' id='email' maxlength="50" required/>
    </div>

    <div class="form-group">
      <label>password:</label>
    <input type='password' name='password' id='password' maxlength="50" required/>
    </div>

    <div class="form-group">
      <label>confirm password:</label>
    <input type='password' name='passwordRepeat' id='password' maxlength="50" required/>
    </div>

    <button type='submit' name='submit' value='submit'/>submit</button>
    <p>Already have an account?<a href="login.php">login</p></h2>
  </form>
</div>
  </body>
</html>
