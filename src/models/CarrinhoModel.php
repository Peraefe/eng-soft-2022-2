<?php

namespace src\models;

use src\database\CarrinhoData;

require_once 'vendor/autoload.php';

class CarrinhoModel
{
  public function delete($userId)
  {
    $cartData = new CarrinhoData();
    $cartData->removeFromCart($userId);
  }

  public function deleteOne($userId, $productId)
  {
    $cartData = new CarrinhoData();
    $cartData->removeOneProductFromCart($userId, $productId);
  }

  public function update($userId, $productId, $quantity)
  {
    $cartData = new CarrinhoData();
    $cartData->updateCartProduct($userId, $productId, $quantity);
  }

  public function findOne($userId, $productId)
  {
    $cartData = new CarrinhoData();
    $response = $cartData->getProduct($userId, $productId);

    return $response;
  }

  public function execute($id_produto)
  {
    $execution = new CarrinhoData();
    $execution->addCarrinho($id_produto);
  }

  public function selecionaCarrinho()
  {
    $exec  = new CarrinhoData();
    $rows = $exec->selectCarrinho();

    return $rows;
  }

  public function showPrice()
  {
    $cartData = new CarrinhoData();
    $value = $cartData->showPrice();

    return $value;
  }
}
