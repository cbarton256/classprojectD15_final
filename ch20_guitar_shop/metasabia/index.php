<?php
require_once('../util/main.php');
require_once('../util/tags.php');
require_once('../model/database.php');
require_once('../model/category_db.php');
require_once('../model/cart_db.php');

// Get all categories
$categories = get_categories();

// get the cart
$cart = get_cart();

// Display the main page
include('metasabia_view.php');
?>