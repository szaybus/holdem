<?php
class Bank
{
  private $deck;
  private $cash;
  private $table;

  function __construct()
  {
      $this->deck = Array();
      $this->table = Array();
      $this->prepareDeck();
      $this->prepareTable();
  }
  private function prepareDeck()
  {
    $values = Array('A', '2', '3', '4', '5', '6', '7',
                    '8', '9', '1', 'J', 'Q', 'K');
    $colors = Array('p','k','c','t');
    foreach ($values as $value)
    {
      foreach ($colors as $color)
      {
        array_push($this->deck, new Card($value, $color));
      }
    }
  }
  private function prepareTable()
  {
    for ($i=0; $i < 5; $i++) {
      array_push($this->table, $this->pullCard());
    }
  }
  public function pullCard()
  {
    $r = rand(0, count($this->deck));
    $card = $this->deck[$r];
    array_splice($this->deck, $r, 1);
    return $card;
  }
  public function showTable()
  {
    foreach ($this->table as $card) {
      $card->display();
    }
  }
  public function flipTable()
  {
    if($this->table[0]->visible)
    {
      //pierwsze 3 widoczne
      if($this->table[3]->visible)
      {
        //4 widoczna
        if($this->table[4]->visible)
        {
          //wszystkei widoczne
          return;
        }
        else
        {
          $this->table[4]->flip();
        }

      }
      else
      {
        $this->table[3]->flip();
      }
    }
    else
    {
      //odkryj 3
      $this->table[0]->flip();
      $this->table[1]->flip();
      $this->table[2]->flip();
    }
  }

}
?>
