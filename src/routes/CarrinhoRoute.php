<?php

namespace src\routes;

require_once 'vendor/autoload.php';

class CarrinhoRoute
{
  private $method;
  private $payload;
  private $params;
  const GET = 'get';
  const POST = 'post';
  const PATCH = 'patch';
  const DELETE = 'delete';

  public function __construct($method, $payload, $params)
  {
    $this->method = $method;
    $this->payload = $payload;
    $this->params = $params;
  }

  public function carrinhoRouting()
  {
    switch ($this->method) {
      case self::GET:
        include __DIR__ . '/../views/pages/VisualizarCarrinho.php';
        break;

      case self::POST:
        include __DIR__ . '/../views/pages/VisualizarCarrinho.php';

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
