<?php

namespace src\models;

use src\database\ProdutoData;

require_once 'vendor/autoload.php';
/* Classe de Modelo da entidade, que vai fazer uso das funções predefinidas na camada database na qual fazem requisições ao banco de dados e em seguida manipular os objetos a fim de serem chamada por fim na camada Controller*/

class ProdutoModel
{
  /* Função que seta uma nova instancia do objeto da camada de database e recupera todas as linhas retornadas pela mesma em um vetor através da função da camada database "select()", feito isso essa função será chamada na camada de controllers */
  public function getAllRows()
  {
    $data = new ProdutoData();
    $rows = $data->select();

    return $rows;
  }

  public  function getById(int $id_produto)
  {
    $data = new ProdutoData();
    $rows = $data->selectById($id_produto);

    return $rows;
  }

  public  function getByAny($dado)
  {
    $data = new ProdutoData();
    $rows = $data->selectByAny($dado);

    return $rows;
  }
}
