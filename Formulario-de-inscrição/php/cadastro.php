<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\css\style.css">
    <title>Informatica</title>
</head>
<body>
<nav class="cent" style="border: 1px solid red;
                         height: 800px;"   >
<div class="respostas">
<p style="color: white;" >
Bem Vindo <?php echo $_POST["nome"]; ?><br>
O seu e-mail : <?php echo $_POST["e-mail"]; ?><br>
O seu CIM : <?php echo $_POST["cim"]; ?>
</p>

<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "suporte@gob-rj.org.br";
    $to = "wesnnen@gmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
    ?>
</div>
</nav>
</body>
</html>