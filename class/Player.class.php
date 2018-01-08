<?php
class Player
{
  public $name;
  private $hand;
  private $cash;

  function __construct($n)
  {
    $this->name = $n;
    $this->cash = 1000;
    $this->hand = Array();
  }
  function receiveCard($card)
  {
    array_push($this->hand, $card);
  }
  function flipCards()
  {
    foreach ($this->hand as $card) {
      $card->flip();
    }
  }
  function displayHand()
  {
    foreach ($this->hand as $card)
    {
      $card->display();
    }
  }
  function displayCash()
  {
    echo $this->cash;
  }
}
?>
