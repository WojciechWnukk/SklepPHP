<?php
session_start();

unset($_SESSION['cart']);

header("location: page_basket.php");