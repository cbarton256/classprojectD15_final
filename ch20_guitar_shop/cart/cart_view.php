<?php include '../view/header.php'; ?>
<div id="content">
    <h1>Current Shopping Cart</h1>
        <!-- display cart -->
    <?php $cart = get_cart();?>
    <h2>Cart Contents</h2>
    <table id="cart">
          <tr>
              <th>Item</th>
              <th>MetaFlg</th>
              <th>Category</th>
              <th>Product</th>
              <th>Price</th>
          </tr>
          <?php foreach ($cart as $cart_item) : ?>
              <tr>
                  <td><?php echo $cart_item['cartID']; ?></td>
                  <td><?php if ($cart_item['metaFlg'] > 0) {echo 'meta';} else { echo 'user';} ?></td>
                  <td><?php echo $cart_item['categoryName']; ?></td>
                  <td><?php echo $cart_item['productName']; ?></td>
                  <td><?php echo $cart_item['pricePd']; ?></td>
              </tr>
          <?php endforeach; ?>
    </table>
    
</div>
<?php include 'view/footer.php'; ?>