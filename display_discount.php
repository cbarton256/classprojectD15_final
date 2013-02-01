<?php
    // declare and instantiate variables (optional)
    
    // get the user data from the form
    $product_description = $_POST["product_description"];
    $list_price = $_POST["list_price"];
    $discount_percent = $_POST["discount_percent"];
    
    // calculate the discount
    $discount = $list_price * $discount_percent * 0.01;
    $discount_price = $list_price - $discount;
    
    // apply currency formatting to dlr amnt for output
    $list_price_formatted = "$".number_format($list_price,2);
    $discount_percent_formatted = $discount_percent."%";
    $discount_formatted = "$".number_format($discount,2);
    $discount_price_formatted = "$".number_format($discount_price,2);
    
    // output results
    
?>

<!DOCTYPE html>
<html lang=”en”>
   <head>
      <meta content="text/html; charset=UTF-8"/>
      <title>Product Discount Results</title>
      <!-- add image stuff from day 3 -->
      <link rel="shortcut icon" href="images/homer.ico"/>
      <!-- style stuff from day 4 -->
      <!--  <link rel="stylesheet" href="css/reset.css" /> -->
      <link rel="stylesheet" href="css/HomerProjectD7.css"/>
      <link rel="stylesheet" href="css/nav.css"/>
      <style>
      /* Layout */
/*      form {
         width: 450px;
         margin: 0 auto;
         padding: 15px;
      }
      label {
         width: 10em;
         padding-right: 1em;
         float: left;
      }
      #data input {
         float: left;
         width: 15em;
         margin-bottom: .5em;
      }
      #buttons input {
         float: left;
         margin-bottom: .5em;
      }
      br {
         clear: left;
      }*/
      #content {
         text-align: center;
      }
      #mainContent {
         text-align: center;
      }
      /* Presentation */
/*      form {
         border: 2px solid navy;
      }*/
      #mainContent {
         color: navy;
      }
      </style>
   </head>
   <body>
       <header>
       <img src="images/Homer_Rock_and_Roll.jpg"
            alt="Homer" width="100" height="100">
       <hgroup>
          <h1>Homer's Music Store</h1>
          <h2>Rock On!</h2>
       </hgroup>
          <nav>
            <a href="product_discountD7.html">Home</a>
            <a href="email_form.html">Forms</a>
            <a href="multi_columnPD.html">Layout</a>
            <a href="table.html">Tables</a>
            <a href="images.html">Graphics</a>
            <a href="video.html">Multimedia</a>
            <a href="static_form.html">Forms</a>
            <a href="product.php">Products</a>
            <a href="geolocation.html">Maps</a>
          </nav>
       </header>
       <section id="container">
       <header id="top">
          <h1>Everything is on sale for Halloween</h1>
       </header>
       <h2 id="mainContent">Product Invoice Results</h2>
           <div id="content">
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <output><?php echo $product_description; ?></output><br />

        <label>List Price:</label>
        <output><?php echo $list_price_formatted; ?></output><br />

        <label>Standard Discount:</label>
        <output><?php echo $discount_percent_formatted; ?></output><br />

        <label>Discount Amount:</label>
        <output><?php echo $discount_formatted; ?></output><br />

        <label>Discount Price:</label>
        <output><?php echo $discount_price_formatted; ?></output><br />

        <p>&nbsp;</p>
    </div>
       </section>
      <footer>
          <p>&copy; 2012 Homer J. Simpson</p>
      </footer>
   </body>
</html>