<?php

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (empty($dados['email'])) {
    $retorna = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert'> Erro: Necessario preencher o campo usuário! </div>"];
} elseif (empty($dados['senha'])) {
    $retorna = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert'> Erro: Necessario preencher o campo usuário! </div>"];
} else {
    $retorna = ['error' => true, 'msg' => "<div class='alert alert-success' role='alert'> Validar!</div>"];
}

echo json_encode($retorna);