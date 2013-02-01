<?php
    // declare and instantiate variables (optional)
    
    // get the user data from the form
    $base = $_POST["base"];
    // $multiplier = $_POST["multiplier"];
    // $max_value = $_POST["max_value"];

    // calculate the table
  
    // check input value
    if ($base > 20){
    	$base=0;
    }
    	
    for ($i=0; $i<=20; $i=$i+1)
    {   
        $table[$i] = $base*$i;
    }
    
    // output results
    
?>

<!DOCTYPE html>
<html lang=”en”>
   <head>
      <meta content="text/html; charset=UTF-8"/>
      <title>Times Table Result Page</title>
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
      #mainContent {
         text-align: center;
      }
      #content {
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
            <a href="times_table.html">Home</a>
            <a href="email_form.html">Forms</a>
            <a href="mult_column.html">Layout</a>
            <a href="table.php">Full Table</a>
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
       <h2 id="mainContent">Times Table Result Line</h2>
     <div id="content">
        <h1>This page is also under construction</h1>

        <label>Base:</label>
        <output><?php echo $base; ?></output><br />

        <label>Result:</label>
        <output><?php  echo "$table[0]"; ?></output>
        <output><?php for ($i=1; $i<=20; $i++) echo ", $table[$i]"; ?></output><br />



        <p>&nbsp;</p>
    </div>
       </section>
      <footer>
          <p>&copy; 2012 Homer J. Simpson</p>
      </footer>
   </body>
</html>