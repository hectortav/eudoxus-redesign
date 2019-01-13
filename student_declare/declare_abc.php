<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >

    <title>Δήλωση Μαθημάτων</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/small-business.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

        <div>
            <ol class="breadcrumb">
                <li><a href="#">Αρχική</a></li>
                <li><a href="#">Φοιτητής</a></li>
                <li class="active">Δήλωση</li>
            </ol>
        </div>

      <div class="side_bar">
        <div class="order">
          <h3>Ταξινόμηση :</h3>
        </div>
        <div class="filters">
          <a class="active" href='./declare_abc.php'>Αλφαβητικά</a>
        </div>
        <div class="filters">
        <a href='./declare_desc.php'>Δημοτικότητα (φθίνουσα)</a>
        </div>
        <div class="filters">
        <a href='./declare_asc.php'>Δημοτικότητα (αύξουσα)</a>
        </div>
      </div>
<div style="margin-left:15%;padding:1px 16px;height:1000px;">
        <?php
            if(!empty($_GET["action"])) {
              switch($_GET["action"]) {
                case "add":
                  echo "WFGYGFYWAGFWGNFWQFGWQYGFQWNFGWQGFWQNGNFWGFW";
                  //if(!empty($_POST["quantity"]))
                  //{
                  //	$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
                  //}
                  break;
              }
            }
         ?>


  <?php
          $ar = get_subjects('EKPA', 'PLHROFORIKHS KAI THLEPIKOINWNIWN'); //panepisthmio, tmhma, eksamhno kai emfanizei ta mathhmata

          for($y = 0; $y< sizeof($ar); $y++)
          {
            ?>
            <div class="subject-title" name = "subject"><?php echo '<h1>'.$ar[$y].'</h1>'; ?></div>
              <?php

            //$arb = array();
            $arb = get_books($ar[$y], 0);
            ?>
            <div class="row">
              <?php
            for($x = 0; $x < sizeof($arb); $x++)
            { ?>
            <div class="column">
              <div class="card">
                  <img src="../images/cover59366672.jpg" alt="cover59366672" style="width:100%">
              		<div class="product-tile-footer">
              		<div class="book-title" name = "title"><?php echo $arb[$x]; ?></div>
              		<!--<div class="cart-action"><input type="submit" value="Προσθήκη στην Βιβλιοθήκη μου" class="btnAddAction" name = "addCart"/></div>-->
                  <?php
                  // add to cart button
                  echo "<br>";
                  echo "<div class='cart-action'>";
                    addTo_cart(get_ISBN($arb[$x]), $ar[$y]);
                    echo "<a class='btn btn-primary w-100-pct'>Add to Cart</a>";
                  echo "</div>";
                  ?>
              		</div>

            	</div>
            </div>
          <?php
            }
            ?>
          </div>
              <?php
          }
          ?>

          <?php
            /*$title    = "";
            $errors = array();
            $_SESSION['success'] = "";
            $db = mysqli_connect('localhost', 'root', 'pa55word', 'mydb');
            if (isset($_GET['addCart']))
            {
              echo $_GET['title'];


              if (count($errors) == 0)
              {
                $query = "INSERT INTO cart(ISBN, subject_name) VALUES(get_ISBN($title), bookTo_subject($title));";
                $results = mysqli_query($db, $query);
              }
            }*/


          /*
          $num = get_ISBN('Computer and Human Interaction');
          echo $num;
          echo "<br>";
          $sub = bookTo_subject('Computer and Human Interaction');
          echo $sub;
          echo "<br>";
          $string = addTo_cart(get_ISBN($arb[0]), bookTo_subject($arb[0])); //prosthhkh sto kalathi //thelei ISBN kai Mathhma
          echo $string;
          echo "<br>";
          $string = removeFrom_cart(get_ISBN($arb[0]), bookTo_subject($arb[0]));
          echo $string;
          echo "<br>";
          $string = addTo_cart(get_ISBN($arb[0]), bookTo_subject($arb[0])); //prosthhkh sto kalathi //thelei ISBN kai Mathhma
          echo $string;
          echo "<br>";*/
        ?>































<!--
        <h2><a href="#">Επικοινωνία Ανθρώπου Μηχανής</a></h2>
        <div class="row">
            <div class="col-md-4 text-center col-sm-6 col-xs-6">
                <div class="thumbnail product-box">
                    <img src="assets/img/dummyimg.png" alt="" />
                    <div class="caption">
                        <h3><a href="#">Βιβλίο 1 </a></h3>
                        <p><a href="#" class="btn btn-success" role="button">Προσθήκη στο καλάθι μου</a> <a href="#" class="btn btn-primary" role="button">Πληροφορίες</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center col-sm-6 col-xs-6">
                <div class="thumbnail product-box">
                    <img src="assets/img/dummyimg.png" alt="" />
                    <div class="caption">
                        <h3><a href="#">Βιβλίο 2 </a></h3>
                        <p><a href="#" class="btn btn-success" role="button">Προσθήκη στο καλάθι μου</a> <a href="#" class="btn btn-primary" role="button">Πληροφορίες</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center col-sm-6 col-xs-6">
                <div class="thumbnail product-box">
                    <img src="assets/img/dummyimg.png" alt="" />
                    <div class="caption">
                      <h3><a href="#">Βιβλίο 3 </a></h3>
                      <p><a href="#" class="btn btn-success" role="button">Προσθήκη στο καλάθι μου</a> <a href="#" class="btn btn-primary" role="button">Πληροφορίες</a></p>
                    </div>
                </div>
            </div>
        </div>
-->
  </div>
  </body>

</html>
