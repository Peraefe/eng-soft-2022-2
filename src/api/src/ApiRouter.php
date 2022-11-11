<?php

namespace src\api\src;

use src\api\src\routes\CarrinhoRoute;
use src\api\src\routes\ProdutoRoute;

class ApiRouter
{
  private $path;
  private $payload;
  private $method;
  private $query;

  const PRODUTO = 'produtos';
  const CARRINHO = 'carrinho';
  const USUARIO = 'usuario';

  public function __construct($path, $payload, $method, $query)
  {
    $this->path = $path;
    $this->payload = $payload;
    $this->method = strtolower($method);
    $this->query = $query;
  }

  public function apiRouting()
  {
    $carrinhoRoute = new CarrinhoRoute($this->method, $this->payload, $this->query);
    $produtoRoute = new ProdutoRoute($this->method, $this->payload, $this->query);

    switch ($this->path) {
      case self::PRODUTO:
        $produtoRoute->produtoRouting();
        break;
      case self::CARRINHO:
        $carrinhoRoute->carrinhoRouting();
        break;
      case self::USUARIO:
        echo "USUARIO";
        break;
    }
  }
}
