<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_SESSION[
            'login'])){
            if(isset($_POST['acao'])){
                echo 'formulario enviado';
                $login = 'insertuserhere';
                $senha = 'insertpassword';
                $loginform = $_POST['login'];
                $senhaform = $_POST['senha'];

                if($login == $loginform && $senha == $senhaform){
                echo'logado com sucesso';
                    $_SESSION['login']= $login;
                    header('Location: login.php');
                }else{
                echo 'erro no login. dados invalidos';
                }
            }            
            include('login.php');
        }else{
            include ('home.php');
        }
    ?>
</body>
</html>