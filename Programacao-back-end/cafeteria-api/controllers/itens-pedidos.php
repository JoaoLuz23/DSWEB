<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') { exit; }

require_once __DIR__ . '/../database.php';
$database = new Database();

$method = $_SERVER['REQUEST_METHOD'];

// --- SALVAR NOVO ITEM ---
if ($method === 'POST') {
    $body = json_decode(file_get_contents('php://input'), true);
    
    // IMPORTANTE: O nome aqui deve ser IGUAL ao do JS (id_produto e id_pedido)
    $id_produto = $body['id_produto'] ?? null;
    $id_pedido  = $body['id_pedido'] ?? null;
    $quantidade = $body['quantidade'] ?? null;

    if (!$id_produto || !$id_pedido || !$quantidade) {
        echo json_encode(['status' => 'error', 'message' => 'Dados incompletos']);
        exit;
    }

    // 1. Busca o preço para não confiar no preço vindo do front-end
    $prod = $database->executeQuery("SELECT preco FROM produtos WHERE id = :id", [
        ':id' => $id_produto
    ])->fetch(PDO::FETCH_ASSOC);

    if ($prod) {
        $sql = "INSERT INTO pedido_itens (pedido_id, produto_id, quantidade, preco) 
                VALUES (:ped, :prod, :qtd, :pre)";
        
        $database->executeQuery($sql, [
            ':ped'  => $id_pedido,
            ':prod' => $id_produto,
            ':qtd'  => $quantidade,
            ':pre'  => $prod['preco']
        ]);

        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Produto não encontrado']);
    }
    exit;
}

// --- LISTAR ITENS DO PEDIDO ---
if ($method === 'GET') {
    $pedido_id = $_GET['id_pedido'] ?? null;
    $sql = "SELECT i.*, p.nome AS nome_produto 
            FROM pedido_itens i 
            JOIN produtos p ON i.produto_id = p.id 
            WHERE i.pedido_id = :id";
    $res = $database->executeQuery($sql, [':id' => $pedido_id]);
    echo json_encode(['status' => 'success', 'data' => $res->fetchAll(PDO::FETCH_ASSOC)]);
    exit;
}