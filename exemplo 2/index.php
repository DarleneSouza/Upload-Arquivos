<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Email com PHPMailer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            width: 400px;
            margin: 0 auto;
            padding: 40px;
            background-color: #e6e6fa;
            border-radius: 10px;
            box-shadow: 0px 0px 15px 5px #888888;
        }
        h2 {
            text-align: center;
            color: #ffffff;
            background-color: #4b0082;
            padding: 10px;
            border-radius: 10px;
        }
        label, input[type="text"], textarea {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        input[type="text"], textarea {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="file"] {
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Envio de Email com PHPMailer</h2>
        <form action="saida.php" method="post" enctype="multipart/form-data">
            <label for="nome">Digite seu nome</label>
            <input type="text" name="nome" id="nome" required>

            <label for="email">Digite o email</label>
            <input type="text" name="email" id="email" required>

            <label for="assunto">Digite o assunto</label>
            <input type="text" name="assunto" id="assunto" required>

            <label for="mensagem">Digite a mensagem</label>
            <textarea name="mensagem" id="mensagem" rows="5" required></textarea>

            <label for="arquivo">Selecione um arquivo:</label>
            <input type="file" name="arquivo" id="arquivo" accept=".pdf" required>

            <input type="submit" value="Enviar Dados">
        </form>
    </div>
</body>
</html>
