<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script> -->
</head>
<body>
    <?php 
        include('partials/navigation.php');
    ?>
    <h1>Contact</h1>
    <form method="POST" action="/names">
        <input id="name" name="name" class="form-control" type="text">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>