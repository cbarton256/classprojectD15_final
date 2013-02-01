<?php
require_once('../util/main.php');
require_once('../util/tags.php');
require_once('../model/database.php');
require_once('../model/product_db.php');
require_once('../model/category_db.php');
require_once('../model/cart_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_products';
}
echo('catalog.index: action is '.$action);

switch ($action) {
    case 'list_products':
        // get current category
        $category_id = $_GET['category_id'];
        if (empty($category_id)) {
            $category_id = 1;
        }

        // get categories and products
        $current_category = get_category($category_id);
        $categories = get_categories();
        $products = get_products_by_category($category_id);

        // Display view
        include('product_list.php');
        break;
    case 'view_product':
        $categories = get_categories();

        // Get product data
        $product_id = $_GET['product_id'];
        $product = get_product($product_id);

        // Display product
        include('product_view.php');
        break;
    case 'add_product':
    	$meta_flg = $_GET['meta_flg'];
    	$category_id = $_GET['category_id'];
    	$product_id = $_GET['product_id'];
    	$product_name = $_GET['product_name'];
    	$unit_price = $_GET['unit_price'];
    	echo "Debugging: $meta_flg,$category_id,$product_id,$product_name,$unit_price";
    	add_to_cart($meta_flg,$category_id,$product_id,$product_name,$unit_price);
    	
    	// get categories and products
        $current_category = get_category($category_id);
        $categories = get_categories();
        $products = get_products_by_category($category_id);

        // Display view for category of added product
        include('product_list.php');
        break;
}
?>