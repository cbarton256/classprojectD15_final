<!DOCTYPE html>
<html lang=”en”>
    
    <!-- the head section -->
    <head>
        <title>MyGuitarMan</title>
        <link rel="stylesheet" type="text/css"
              href="<?php echo $app_path; ?>css/main.css" />
        <link rel="stylesheet" href="<?php echo $app_path; ?>css/nav.css"/>
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
        
        <script src="js/jquery-1.8.0.js"></script>

        <script>
        $(document).ready(function() {
        $('.answer').hide();
        $('.start h3').toggle(
        function() {
        $(this).next('.answer').slideDown();
        $(this).addClass('close');
        },
        function() {
        $(this).next('.answer').fadeOut();
        $(this).removeClass('close');
        }
        ); // end toggle
        }); // end ready
        </script>
        
        <style>
        .slideShow {
            position: relative;
            width: 285px;
            height: 360px;
        }
        .slideShow img {
            position: absolute;
            left: 0;
            top: 0;
        }
        </style>
    </head>

    <!-- the body section -->
    <body>
    <div id="page">
        <div id="header">
            <h1>MyGuitarMan</h1>
            <p class="crop_pix">
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
               <li><a href="<?php echo $app_path; ?>index.php">Cart</a></li>
            </ul>
          </nav>
          <script>
// create function binding nested functions to page loading event
$(document).ready(function() {
	// hide all images except first
	$('.slideShow img:gt(0)').hide();
	
	// set timer and use fade effect to replace images
	setInterval( function() {
		$('.slideShow :first-child').fadeOut().next('img')
		    .fadeIn().end().appendTo('.slideShow');
	}, 3000);
}); //end bind to page load
</script>
<!-- end of header div -->
        <div id="main">

<!--
        </div>
    </div>
    </body>
</html>
-->


