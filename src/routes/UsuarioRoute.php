<?php

namespace src\routes;

require_once 'vendor/autoload.php';

class UsuarioRoute
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

  public function usuarioRouting()
  {
    switch ($this->method) {
      case self::GET:
        include __DIR__ . '/../views/pages/Login.php';
        break;

      case self::POST:
        include __DIR__ . '/../views/pages/Login.php';

        break;

      case self::PATCH:
        
        break;

      case self::DELETE:

        break;

      default:
        break;
    }
  }

  public function usuarioRouting_cadastro()
  {
    switch ($this->method) {
      case self::GET:
        include __DIR__ . '/../views/pages/Cadastro.php';
        break;

      case self::POST:
        include __DIR__ . '/../views/pages/Cadastro.php';

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
