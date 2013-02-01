<?php include '../view/header.php'; ?>
<div>
    <h1>Metasabia suggests...</h1>
    <p>Include gear that Metasabia Suggests to let you play like a pro
         and hear how you’d sound!</p>
    <?php $include_gear=1; ?>
    <?php if ($include_gear==0) { ?>
    <form>
        <div>
             <label>&nbsp;</label>
             <input type="button" value="Include gear?" onclick="calculate();"/><br />
        </div>
    </form>
    <?php } else {?>
    <form>
        <div>
             <label>&nbsp;</label>
             <input type="button" value="Try another selection?" onclick="calculate();"/><br />
        </div>
    </form>
    <?php } ?>
    <!--
    <form action="<?php echo $app_path . 'catalog/index.php' ?>" method="get">
        <input type="hidden" name="action" value="add_product" />
        <input type="hidden" name="meta_flg"
               value="0" />
        <input type="hidden" name="category_id"
               value="<?php echo $category_id; ?>" />
        <input type="hidden" name="product_id"
               value="<?php echo $product_id; ?>" />
        <input type="hidden" name="product_name"
               value="<?php echo $product_name; ?>" />
        <input type="hidden" name="unit_price"
               value="<?php echo $unit_price; ?>" />
        <b>Quantity:</b>
        <input type="text" name="quantity" value="1" size="2" />
        <input type="submit" value="Add to cart"/>
    </form>
    -->
    <div class="metacntrl">
    <form>
        <div id="PreferBtn1">
             <input type="button" value="Do you prefer rock?" onclick="calculate();"/><br />
        </div>
    </form>
    </div>
    <div class="metacntrl">
    <form>
        <div id="PreferBtn2">
             <input type="button" value="Or do you prefer jazz?" onclick="calculate();"/><br />
        </div>
    </form>
    </div>
    <div class="crop_meta_pix">
        <img src="../images/Metasabia_DSC_0361.JPG" width=640; height=426;
                alt="GuitarArray" />
    </div>
    <p></p>
    <p></p>
    <?php $hear_music=0; ?>
    <?php if ($hear_music==1) { ?>
        <a href="http://www.youtube.com/watch?v=zJ04DglQQQI">   HEAR HOW YOU'D SOUND!</a>
    <?php } ?>
    <br />
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
<?php include '../view/footer.php'; ?>