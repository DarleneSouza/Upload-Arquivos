<?php
// Configuração do upload
$uploadDirectory = "uploads/";
$allowedFileTypes = ["application/pdf"]; // Apenas arquivos PDF
$maxFileSize = 5 * 1024 * 1024; // Tamanho máximo do arquivo em bytes (5 MB)

function uploadFile($file) {
    global $uploadDirectory, $allowedFileTypes, $maxFileSize;

    // Verificar se há erros
    if ($file['error'] !== UPLOAD_ERR_OK) {
        die("Erro no upload: " . $file['error']);
    }

    // Verificar o tipo de arquivo
    if (!in_array($file['type'], $allowedFileTypes)) {
        die("Tipo de arquivo não permitido. Apenas arquivos PDF são aceitos.");
    }

    // Verificar o tamanho do arquivo
    if ($file['size'] > $maxFileSize) {
        die("Arquivo muito grande. O tamanho máximo permitido é 5 MB.");
    }

    // Gerar um nome único para o arquivo
    $fileName = uniqid() . "_" . basename($file['name']);
    $filePath = $uploadDirectory . $fileName;

    // Mover o arquivo para o diretório de uploads
    if (move_uploaded_file($file['tmp_name'], $filePath)) {
        return $fileName;
    } else {
        die("Erro ao mover o arquivo para o diretório de uploads.");
    }
}
?>
