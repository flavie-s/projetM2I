<!DOCTYPE html>
<html>
<title>LOGIN</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-content" style="max-width:1300px">

<!-- First Grid: Logo & About -->
<div class="w3-row">
  <div class="w3-third w3-black w3-container w3-center">
    <div class="w3-padding-60">
      <h1>LOGIN</h1>
    </div>
  </div>
  <div class="w3-three-quarters w3-blue-grey w3-container w3-center" style="height:700px">
    <div class="w3-padding-64 w3-center">
<form action="auth.php" method="post">
  		Login :<br>
  		<input type="text" name="login" ><br><br>
  		Mot de passe :<br>
  		<input type="password" name="password" ><br><br>
<input type="submit" name="submit" value="Se connecter"/>
</form>
    </div>
  </div>
</div>
</body>
</html>
