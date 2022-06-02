<?php

session_start();

require "cart.php";
$cart = new cart;
$cart -> cart_insert($_GET["id"]);

?>