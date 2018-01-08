<?php
include('class/Card.class.php');
include('class/Player.class.php');
include('class/Bank.class.php');
$bank = new Bank();
$p1 = new Player('Gracz1');
$p2 = new Player('Gracz2');
echo '<br>Gracz1:';
$p1->receiveCard($bank->pullCard());
$p1->receiveCard($bank->pullCard());
$p1->flipCards();
$p1->displayHand();
echo '<br>Gracz2:';
$p2->receiveCard($bank->pullCard());
$p2->receiveCard($bank->pullCard());
$p2->flipCards();
$p2->displayHand();
echo '<br>Bank:';
$bank->flipTable();
$bank->flipTable();
$bank->flipTable();
$bank->showTable();
?>
