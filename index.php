<?php
session_start();
$_SESSION['nome'] = 'Thalles Rangel Lopes';
?>
<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="public/bootstrap.4.1.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="script.js"></script>
    <title>WhatsApp</title>
    <link rel="icon" href="img/icon.png">
    <script type="text/javascript">

      $(document).ready(function(){
        $('#mensagens').load("ver.php");
        
        var refreshId = setInterval(function(){
            $('#mensagens').load("ver.php");
        }, 500);
        
      $.ajaxSetup({ cache: false });
      });

    </script>
  </head>
<body>

  <div class="sidebar">
    aaaa
  </div>

  <div class="menu">
    <img src="img/eu.jpeg">
    <p id="nome"><b><?= $_SESSION['nome'] ?></b></p>
  </div>

  <div id="mensagens">
  </div>
  <form onsubmit="enviar(); return false" method="POST">
    <input autocomplete="off" type="text" name="mensagem" id="mensagem" placeholder="Digite uma mensagem" maxlength="50" />
  </form>

</body>  
</html>