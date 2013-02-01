<?php
    // declare and instantiate variables (optional)

    // calculate the table

    for ($i=0; $i<=20; $i=$i+1)
    {
        for ($j=1; $j<=20; $j=$j+1)
        {   
            $table[$i][$j] = $i*$j;
        }
    }
    
    // output results
    
?>

<!DOCTYPE html>
<html lang=”en”>
   <head>
      <meta content="text/html; charset=UTF-8"/>
      <title>Full Times Table Display</title>
      <!-- add image stuff from day 3 -->
      <link rel="shortcut icon" href="images/homer.ico"/>
      <!-- style stuff from day 4 -->
      <!--  <link rel="stylesheet" href="css/reset.css" /> -->
      <link rel="stylesheet" href="css/HomerProjectD7.css"/>
      <link rel="stylesheet" href="css/nav.css"/>
      <style>
      /* Layout */
      form {
         width: 450px;
         margin: 0 auto;
         padding: 15px;
      }
      label {
         width: 12em;
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
      }
      #mainContent {
         text-align: center;
      }
      /* Presentation */
      form {
         border: 2px solid navy;
      }
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
            <a href="table.html">Full Table</a>
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
       <h2 id="mainContent">Full Times Table Display</h2>
       <table>
          <tr>
             <th></th>
             <!-- <output> -->
             <?php for ($i=1; $i<=20; $i++) echo "<th>$i</th>"; ?>
             <!-- </output><br /> -->
          </tr>
          <!-- <output> -->
          <?php for ($i=1; $i<=20; $i++){
          	                echo "<tr><th>$i</th>";
          	                for ($j=1; $j<=20; $j++) {
          	                	$tmp = $i * $j;
          	              // should pad on left with appropriate spaces to right justify
          	                	if ($tmp<10) {
          	                		echo "<td>  "."$tmp</td>";
          	                	}
          	                	elseif ($tmp<100) {
          	                		echo "<td> "."$tmp</td>";
          	                	}
          	                	else {
          	                		echo "<td>$tmp</td>";
          	                	}
          	                }
          	                echo "</tr>";
                        }
                  ?>
          <!-- </output><br /> -->
       </table>
       </section>
      <footer>
          <p>&copy; 2012 Homer J. Simpson</p>
      </footer>
   </body>
</html>
