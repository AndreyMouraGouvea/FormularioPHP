<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <section id="corpo">
    <?php

        ini_set('default_charset', 'utf-8');
        $nome = $_POST["f_nome"];
        $email = $_POST["f_email"];
        $data = $_POST["f_data"];


        echo ('Seu nome é: '.$nome.'<br>Seu e-mail é: '.$email.'<br>Sua data de nascimento é: '.$data.'<br>');

    ?>

</section>

</body>
</html>
