<!DOCTYPE html>
<html lang=”en”>
    
    <!-- the head section -->
    <head>
        <meta charset="utf-8" />
        <title>MyGuitarMan</title>
        <link rel="stylesheet" type="text/css"
              href="<?php echo $app_path; ?>css/main.css" />
        <link rel="stylesheet" href="<?php echo $app_path; ?>css/nav.css"/>
        <style>
            .crop_hdr_pix{float: left;
                          overflow: hidden;
                          position: relative;
                          width: 700px;
                          height: 175px;
                          }
            .crop_hdr_pix img{
                          position: absolute;
                          top: -168px;
                          left: 0px;
                          }
            .crop_meta_pix{float: left;
                          overflow: hidden;
                          margin: 0px 30px 0px 30px;
                          }
            .crop_meta_pix img{
                          margin: -60px -170px -140px -160px;
                          }
            #cart {
                border: 1px solid black;
                width: 400px;
            }
            #cart th {
                border: 1px solid black;
                text-align: center;
                margin: 10px 10px 10px 10px;
            }
            #cart td {
                border: 1px solid black;
                text-align: right;
                margin: 30px 30px 30px 30px;
            }
        </style>
        <script>
            function add_cart_item {
        	// get input from the user
        	var metaflg = document.getElementById('meta_flg').value;
        	var categoryid = document.getElementById('category_id').value;
        	var productid = document.getElementById('product_id').value;
        	var productname = document.getElementById('product_name').value;
        	var unitprice = document.getElementById('unit_price').value;
        	add_to_cart(metaflg,categoryid,productid,productname,unitprice);
        </script>
    </head>

    <!-- the body section -->
    <body>
    <div id="page">
        <div id="header">
            <h1>MyGuitarMan</h1>
            <p class="crop_hdr_pix">
                <img src="<?php echo $app_path; ?>images/96614.jpg" width=700; height=525;
                alt="GuitarArray" />
            </p>
            <p></p><p></p><p></p><p></p><p></p><p></p><p></p>
            <p></p><p></p><p></p><p></p><p></p><p></p><p></p>
            <p></p><p></p><p></p><p></p><p></p><p></p><p></p>
            <p></p><p></p><p></p><p></p>
        </div>
        <nav>
            <ul id="main">
               <li><a href="<?php echo $app_path; ?>index.php">Home</a></li>
               <li><a href="<?php echo $app_path; ?>index.php">Sale!</a></li>
               <li><a href="<?php echo $app_path; ?>index.php">Products</a>
                  <ul>
                  
                    <?php foreach ($categories as $category) : ?>
                        <li>
                            <a href="<?php echo $app_path .
                                'catalog?action=list_products' .
                                '&amp;category_id=' . $category['categoryID']; ?>">
                                <?php echo $category['categoryName']; ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                        
                  </ul>
               </li>
               <li><a href="<?php echo $app_path; ?>metasabia/index.php">Metasabia</a></li>
               <li><a href="<?php echo $app_path; ?>index.php">News</a></li>
               <li><a href="<?php echo $app_path; ?>about/index.php">About us</a></li>
               <li><a href="<?php echo $app_path; ?>cart/index.php">Cart</a></li>
            </ul>
          </nav>

<!-- end of header div -->
        <div id="main">

<!--
        </div>
    </div>
    </body>
</html>
-->


