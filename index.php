<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar E-mail</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</head>
<body>
    <h1 class="text-center py-3">Envio de E-mail com PHPMailer</h1>
    <div class="container">
        <div class="border border-black border-2 p-5">
            <div class="text-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                  </svg>
            </div>
            <form action="php/enviarEmail.php" method="post">
                <div class="form-group mb-3">
                    <label for="nomeDestinaratio"><span class="h4">Nome do destinatario:</span></label>
                    <input class="form-control border-black" type="text" name="nomeDestinatario" id="nomeDestinaratio">
                </div>

                <div class="form-group mb-3">
                    <label for="emailDestinaratio"><span class="h4">E-mail destino:</span></label>
                    <input class="form-control border-black" type="text" name="emailDestinatario" id="emailDestinaratio">
                </div>

                <div class="form-group mb-3">
                    <label for="mensagem"><span class="h4">Mensagem:</span></label>
                    <input class="form-control border-black" type="text" name="mensagem" id="mensagem">
                </div>

                <input class="btn btn-success" type="submit" value="Enviar E-mail">
            </form>
        </div>
    </div>
</body>
</html>

<?php
    if(isset($_GET['envio'])){
        if($_GET['envio'] == 'sucesso'){
            echo '<script>alert("Mensagem enviada com sucesso!")</script>';
        }
    }
?>
