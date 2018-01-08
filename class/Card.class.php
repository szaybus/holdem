<?php
class Card
{
  private $value; /* {A, 2, 3, ..., 1, J, Q, K} */
  private $color; /* {p,k,c,t} */
  public $visible; /* {true, false} */
  function __construct($_value, $_color)
  {
    $this->value = $_value;
    $this->color = $_color;
  }
  public function getValue() {
    return $this->value;
  }
  public function getColor() {
    return $this->color;
  }
  public function flip() {
    $this->visible = !$this->visible;
  }
  public function display() {
    if($this->visible) {
      echo '<img style="width: 100px;" src="cards/'.$this->value.$this->color.'.png">';
    } else {
      echo '<img style="width: 100px;" src="cards/card_back.png">';
    }
  }
}
?>
