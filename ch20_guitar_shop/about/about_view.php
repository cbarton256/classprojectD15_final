<!DOCTYPE html>
<html lang=”en”>
    
    <!-- the head section -->
    <head>
        <meta charset="utf-8" />
        <title>MyGuitarMan</title>
        <link rel="stylesheet" href="../css/main.css" />
        <link rel="stylesheet" href="../css/nav.css"/>

<style>
h3 {
background: #f0f0f0 url(../images/open.png) no-repeat 0px 11px;
cursor: pointer;
border: 1px solid #aaaaaa;
margin: 0px;
padding: .5em .5em .5em 1em;
border-radius: 5px;
}
h3:hover {
background-color: #D8D8D8;
}

h3.close {
background: #ffffff url(../images/close.png) no-repeat 0px 11px;
border-radius: 5px 5px 0px 0px;
padding: .5em .5em .5em 1em;
}
.answer {
margin: 0 0 0 0px;
border: 1px solid #aaaaaa;
border-radius: 0px 0px 5px 5px;
padding: 1em;
overflow: auto;
</style>

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
        
        <script src="../../js/jquery-1.8.0.js"></script>

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
    <header>
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
    </header>
    <div id="page">
        <div id="header">
            <h1>MyGuitarMan</h1>
            <p class="crop_pix">
                <img src="../images/96614.jpg" width=700; height=525;
                alt="GuitarArray" />
            </p>
            <p></p><p></p><p></p><p></p><p></p><p></p><p></p>
            <p></p><p></p><p></p><p></p><p></p><p></p><p></p>
            <p></p><p></p><p></p><p></p><p></p><p></p><p></p>
            <p></p><p></p><p></p><p></p>
        </div>
        <nav>
            <ul id="main">
               <li><a href="../index.php">Home</a></li>
               <li><a href="../index.php">Sale!</a></li>
               <li><a href="../index.php">Products</a>
                  <ul>
                  <!--
                    <?php foreach ($categories as $category) : ?>
                        <li>
                            <a href="<?php echo $app_path .
                                'catalog?action=list_products' .
                                '&amp;category_id=' . $category['categoryID']; ?>">
                                <?php echo $category['categoryName']; ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                   -->     
                  </ul>
               </li>
               <li><a href="../metasabia/index.php">Metasabia</a></li>
               <li><a href="../index.php">News</a></li>
               <li><a href="index.php">About us</a></li>
               <li><a href="../index.php">Cart</a></li>
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
<!-- <div id="content"> -->
    <br />
<!-- Content Starts Here -->

<section id="container">
<header id="top">
<h1>ABOUT US</h1>
</header>
<!-- Content Starts Here -->

<p>A mission statement:</p>
 
<p>MyGuitarMan seeks to explore using the Graphic Novel format as a method to organize information held as a database and display possible access paths through it using the symbols used in graphic novels.</p>
<p></p>

<article class="content">
<div class="start">
<h3>MyGuitarMan as a youth…</h3>

<div class="answer">
    <img src="../images/CaptainUnderpants.jpg" alt="Underpants" width="199" height="253" />
</div>

<h3>…and in later life…</h3>
<div class="answer">
  <div class="slideShow">
    <img src="../images/NakedCowboy1.jpg" alt="Cowboy1" width="199" height="253" />
    <img src="../images/NakedCowboy2.jpg" alt="Cowboy2" width="176" height="160" />
    <img src="../images/NakedCowboy3.jpg" alt="Cowboy3" width="190" height="265" />
    <img src="../images/NakedCowboy4.png" alt="Cowboy4" width="275" height="184" />
    <img src="../images/NakedCowboy5.jpg" alt="Cowboy5" width="259" height="195" />
    <img src="../images/NakedCowboy6.jpg" alt="Cowboy6" width="194" height="259" />
    <img src="../images/NakedCowboy6_Claire.jpg" alt="Cowboy6Claire" width="480" height="360" />
    <img src="../images/NakedCowboy7.jpg" alt="Cowboy7" width="194" height="259" />
    <img src="../images/NakedCowboy8.jpg" alt="Cowboy8" width="259" height="194" />
    <img src="../images/NakedCowboy9.jpg" alt="Cowboy9" width="229" height="220" />
    <img src="../images/NakedCowboy10.jpg" alt="Cowboy10" width="194" height="259" />
    <img src="../images/NakedCowboy6_Claire.jpg" alt="Cowboy6Claire" width="480" height="360" />
  </div>
</div>

<h3>…who could now read Pulitzer Prize winning graphic novels… </h3>
<div class="answer">
<img src="../images/Maus_image.jpg" alt="Maus" width="309" height="163" />
</div>

<h3>And for the girls in the audience…</h3>
<div class="answer">
  <img src="../images/Eloise_Front_cover.jpg" alt="Eloise Cover" width="238" height="329" />
  <img src="../images/Eloise_page_011.jpg" alt="Eloise Page" width="295" height="427" />
</div>

<h3>And in later life…HERE’S THE HEART OF THE MATTER…Graphic Novel Conventions.</h3>
<div class="answer">
<img src="../images/FunHome3.JPG" alt="FunHome" width="300" height="400" />
</div>

<h3>Which brings us to the final line...</h3>
<div class="answer">
<img src="../images/SophieMidwayChicago_DSCF7846.JPG" alt="FunHome" width="330" height="247" />
<br />
<a href="http://www.youtube.com/watch?v=bN9OHDssYSE">The Final Line...</a>
</div>
</div>
</article>

<!-- Content Ends Here -->
</section>
<!-- Content Ends Here -->
<!-- </div> -->
        </div><!-- end main -->
        <div id="footer">
            <p class="copyright">
                &copy; <?php echo date("Y"); ?> My Guitar Man, Inc.
            </p>
        </div>
    </div><!-- end page -->
    </body>
</html>