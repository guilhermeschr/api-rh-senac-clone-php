<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

/**
 * Chamada da api Folha Pagamento
 */
require_once("ControllerApiBase.php");
class ControllerApiFolhaPagamento extends ControllerApiBase {
    
    public function index(Request $request, Response $response, array $args) {
        $sSql = "SELECT * FROM tbfolha ORDER BY 1";
    
        $aDados = $this->getQuery()->selectAll($sSql);
    
        return $response->withJson($aDados, 200);
    }
}
