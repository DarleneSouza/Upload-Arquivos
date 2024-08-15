<?php
include 'config_upload.php';

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $assunto = htmlspecialchars($_POST['assunto']);
    $mensagem = htmlspecialchars($_POST['mensagem']);
    $arquivo = $_FILES['arquivo'];

    // Fazer upload do arquivo
    $nomeArquivo = uploadFile($arquivo);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Enviados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .container {
            background-color: #e6e6fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px 5px #888888;
            max-width: 600px;
            margin: 0 auto;
        }
        h2 {
            text-align: center;
            color: #4b0082;
            margin-bottom: 20px;
        }
        .dados {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 15px;
            border-left: 5px solid #4b0082;
        }
        .dados strong {
            display: inline-block;
            width: 120px;
        }
        .dados a {
            color: #28a745;
            text-decoration: none;
            font-weight: bold;
        }
        .dados a:hover {
            text-decoration: underline;
        }
        .botao {
            display: block;
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }
        .botao a {
            background-color: #4b0082;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        .botao a:hover {
            background-color: #37005b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Dados Recebidos</h2>
        <div class="dados">
            <p><strong>Nome:</strong> <?php echo $nome; ?></p>
        </div>
        <div class="dados">
            <p><strong>Email:</strong> <?php echo $email; ?></p>
        </div>
        <div class="dados">
            <p><strong>Assunto:</strong> <?php echo $assunto; ?></p>
        </div>
        <div class="dados">
            <p><strong>Mensagem:</strong> <?php echo nl2br($mensagem); ?></p>
        </div>
        <div class="dados">
            <p><strong>Arquivo Enviado:</strong> <a href="uploads/<?php echo $nomeArquivo; ?>" target="_blank"><?php echo $nomeArquivo; ?></a></p>
        </div>
        <div class="botao">
            <a href="index.php">Enviar Novo Formulário</a>
        </div>
    </div>
</body>
</html>
