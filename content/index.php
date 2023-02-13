<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1> <?= getenv('TITRE')?> </h1>
  <h4>Tentative de connexion MariaDB depuis PHP...</h4>
  <?php 
  $host = getenv('MARIADBHOST', true);
  $user = 'root';
  $pass = 'rootpassword';
  $conn = new mysqli($host, $user, $pass);

  if ($conn->connect_error) {
      die("La connexion a échoué: " . $conn->connect_error);
  } 
  echo "Connexion réussie à $host!";
  ?>
</body>
</html>