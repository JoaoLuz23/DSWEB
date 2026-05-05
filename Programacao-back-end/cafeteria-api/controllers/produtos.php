<?php
// Configurações de erro - impede que o PHP suje a saída com HTML
ini_set('display_errors', 0); 
error_reporting(E_ALL);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit;
}

try {
    // Tenta carregar o banco. Verifique se o caminho está correto!
    $dbPath = __DIR__ . '/../database.php';
    if (!file_exists($dbPath)) {
        throw new Exception("Arquivo database.php não encontrado em: " . $dbPath);
    }
    
    require_once $dbPath;
    $database = new Database();

    $method = $_SERVER['REQUEST_METHOD'];

    if ($method === 'GET') {
        $resultado = $database->executeQuery('SELECT * FROM produtos');
        $produtos = $resultado->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode([
            'status' => 'success',
            'data'   => $produtos
        ]);
    } else {
        throw new Exception("Método não suportado.");
    }

} catch (Exception $e) {
    // Se der qualquer erro, enviamos como JSON
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage()
    ]);
}