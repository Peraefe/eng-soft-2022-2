<?php

namespace src\routes;

require_once 'vendor/autoload.php';

class ProdutoRoute
{
  private $method;
  private $payload;
  private $query;
  private $params;

  const GET = 'get';
  const POST = 'post';
  const PATCH = 'patch';
  const DELETE = 'delete';

  public function __construct($method, $payload, $query, $params)
  {
    $this->method = $method;
    $this->payload = $payload;
    $this->query = $query;
    $this->params = $params;
  }

  public function produtoRouting()
  {
    // var_dump($this->method);
    switch ($this->method) {
      case self::GET:
        // var_dump($this->params);
        if ($this->params == 'unique') {
          include __DIR__ . '/../views/pages/Produto.php';
          return;
        }
        include __DIR__ . '/../views/pages/ListaProdutos.php';
        break;
      case self::POST:
        include __DIR__ . '/../views/pages/Produto.php';
        break;
      case self::PATCH:
        break;
      case self::DELETE:
        break;
      default:
        break;
    }
  }
}
