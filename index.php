<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site Top</title>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
  <h1>SITE TOP</h1>
  <div id="main">

    <form action="input.php" method="post">
      Nome: <input type="text" name="nome" class="nome"><br>
      Texto: <textarea cols="50" rows="5" name="texto"></textarea><br>
      <input type="submit" value="Enviar" class="submit">
    </form>

    <?php  include 'getContent.php'; ?>

    <div ></div>
  </div>
</body>

</html>