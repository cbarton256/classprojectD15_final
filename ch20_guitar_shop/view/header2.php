<!DOCTYPE html>
<html lang=”en”>
    
    <!-- the head section -->
    <head>
        <title>MyGuitarMan</title>
        <link rel="stylesheet" type="text/css"
              href="<?php echo $app_path ?>main.css" />
        <link rel="stylesheet" href="css/nav.css"/>
        <style>
            .crop_pix{float: left;
                      overflow: hidden;
                      position: relative;
                      width: 700px;
                      height: 175px;
                      }
            .crop_pix img{
                       position: absolute;
                       top: -168px;
                       left: 0px;
                       }
        </style>
    </head>

    <!-- the body section -->
    <body>
    <div id="page">
        <div id="header">
            <h1>MyGuitarMan.com</h1>
            <p class="crop_pix">
                <img src="images/96614.jpg" width=700; height=525;
                alt="GuitarArray" />
            </p>
            <p></p><p></p><p></p><p></p><p></p><p></p><p></p>
            <p></p><p></p><p></p><p></p><p></p><p></p><p></p>
            <p></p><p></p><p></p><p></p><p></p><p></p><p></p>
            <p></p><p></p><p></p><p></p>
        </div>
        <nav>
            <ul id="main">
               <li><a href="index.php">Home</a></li>
               <li><a href="index.php">Sale!</a></li>
               <li><a href="index.php">Products</a>
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
               <li><a href="index.php">Metasabia</a></li>
               <li><a href="index.php">News</a></li>
               <li><a href="index.php">About us</a></li>
               <li><a href="index.php">Cart</a></li>
            </ul>
          </nav>
        <div id="main">
<!--
        </div>
    </div>
    </body>
</html>
-->


