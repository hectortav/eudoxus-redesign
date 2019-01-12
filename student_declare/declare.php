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
<!--
        <div class="card">
          <img src="../images/cover59366672.jpg" alt="cover59366672" style="width:100%">
          <h1>Εισαγωγή στην Αλληλεπίδραση Ανθρώπου-Υπολογιστή</h1>
          <p>Πληροφορίες για το βιβλίο..</p>
          <p><button>Προσθήκη στην Βιβλιοθήκη μου</button></p>
        </div>
-->
				<?php
          include('server.php');

          $ar = get_subjects('EKPA', 'PLHROFORIKHS KAI THLEPIKOINWNIWN', 5); //panepisthmio, tmhma, eksamhno kai emfanizei ta mathhmata
          //$ar[] = 'ARITHMHTIKH ANALYSH'; an thelw na emfanisw mono gia ena mathhma
          $arb = get_books($ar, 1); //epistrefei pinaka me mathhmata //stelnw pinaka me mathhmata, sort by 0 = alfavhtika, 1 = megalutero popularity, 2 = mikrotero popularity
          for($x = 0; $x < sizeof($arb); $x++) {
            echo $arb[$x];
            echo "<br>";
          }
          $num = get_ISBN('Computer and Human Interaction');
          echo $num;
          echo "<br>";
          $sub = get_subject('Computer and Human Interaction');
          echo $sub;
          echo "<br>";
          $string = addTo_cart(get_ISBN($arb[0]), get_subject($arb[0])); //prosthhkh sto kalathi //thelei ISBN kai Mathhma
          echo $string;
          echo "<br>";
          $string = removeFrom_cart(get_ISBN($arb[0]), get_subject($arb[0]));
          echo $string;
          echo "<br>";
          $string = addTo_cart(get_ISBN($arb[0]), get_subject($arb[0])); //prosthhkh sto kalathi //thelei ISBN kai Mathhma
          echo $string;
          echo "<br>";
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
  </body>

</html>
