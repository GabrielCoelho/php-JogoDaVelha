<?php

//rotas da aplicação

//a variável $uri já contém os dados da rota solicitada

switch ($uri) {
    
    case '/':

        require './app/views/index.php';
        break;

    case '/enviar':

        $messageController->send();
        break;
    
    case '/tabela/show':

        $tabelaController->show();
        break;

    case '/tabela/create':

        $tabelaController->create();
        break;
    
    case '/tabela/update':

        $tabelaController->update();
        break;
    
    case '/tabela/delete':

        $tabelaController->delete();
        break;
    
    default:
        die('Essa rota não é valida');
        break;
}
