<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Εύδοξος – Ηλεκτρονική Υπηρεσία Ολοκληρωμένης Διαχείρισης Συγγραμμάτων</title>
  <link rel="stylesheet" href="./styling/styles.css"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  <link rel="stylesheet" type="text/css" href="css/login.css">
<body>

<!--------logo-------->
  <a href="./askisi3/index.php">
    <img src="./images/logo.png" alt="Eudoxus logo">
  </a>




<!------navigation bar----->

  <div class="navbar">

    <a class="active" href="./askisi3/index.php">ΑΡΧΙΚΗ ΣΕΛΙΔΑ</a>

    <div class="dropdown">
      <button class="dropbtn" href="./webpages/foitites.html">ΦΟΙΤΗΤΕΣ</button>
      <div class="dropdown-content">
        <a href="./webpages/under-construction.html">Δήλωση Συγγραμμάτων</a>
        <a href="./webpages/under-construction.html">Ανταλλαγή Συγγραμμάτων</a>
        <a href="./webpages/under-construction.html">Διάθεση Σημειώσεων</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn" href="./webpages/ekdotes.html">ΕΚΔΟΤΕΣ</button>
      <div class="dropdown-content">
        <a href="./webpages/under-construction.html">Λίστα Συγγραμμάτων</a>
        <a href="./webpages/under-construction.html">Σύστημα Πληρωμών</a>
        <a href="./webpages/under-construction.html">Διανομή με Courier</a>
        <a href="./webpages/under-construction.html">Παραγγελίες Βιβλιοθηκών</a>
        <a href="./webpages/under-construction.html">Παραγγελίες Σημείων Διανομής</a>
        <a href="./webpages/under-construction.html">Οδηγίες</a>
      </div>
    </div>

    <a href="./webpages/under-construction.html">ΓΡΑΜΜΑΤΕΙΕΣ</a>
    <a href="./webpages/under-construction.html">ΒΙΒΛΙΟΘΗΚΕΣ</a>
    <a href="./webpages/under-construction.html">ΣΗΜΕΙΑ ΔΙΑΝΟΜΗΣ</a>
    <a href="./webpages/under-construction.html">ΕΥΔΟΞΟΣ</a>
  </div>



  <!-- Trigger/Open The Modal -->
 <button id="LoginBtn" class="login-btn">Σύνδεση</button>

 <!-- The Modal -->
 <div id="myLoginPage" class="login-page">

   <!-- Modal content -->
   <div class="login-content">
     <span class="close">&times;</span>
<!--
     <div class="log">
       <img src="./images/logo.png" alt="Eudoxus logo" class="logo">

       <form>
         Όνομα Χρήστη:<br>
         <input type="text" onfocus="this.value=''" name="username" value="Όνομα Χρήστη"><br>
         Κωδικός:<br>
         <input type="text" onfocus="this.value=''" name="password" value="Κωδικός"><br>
         <div class="signin">
           <input type="submit"  value="Είσοδος">
         </div>
         <div class="cancel">
           <button type="button" href="./index.html">Άκυρο</button>
         </div>
       </form>
-->
<!-- an den valeis sto type = "password" emfanizetai o kwdikos -->


      <div class="log">
        <?php include('./student_login/login.php')  ?>
      </div>
     </div>

     <?php/*
       $email    = "";
       $errors = array();
       $_SESSION['success'] = "";
       $db = mysqli_connect('localhost', 'root', 'pa55word', 'mydb');
       if (isset($_POST['login_user'])) {
         $email = mysqli_real_escape_string($db, $_POST['email']);
         $password = mysqli_real_escape_string($db, $_POST['password']);
         if (empty($email)) {
           array_push($errors, "Email is required");
         }
         if (empty($password)) {
           array_push($errors, "Password is required");
         }

         if (count($errors) == 0) {
           //$password = md5($password);
           $query = "SELECT * FROM student WHERE student_email='$email' AND student_password='$password'";
           $results = mysqli_query($db, $query);

           if (mysqli_num_rows($results) == 1) {
             $_SESSION['email'] = $email;
             $_SESSION['success'] = "You are now logged in";
             echo '<h1>'.$_SESSION['success'].'</h1>';
             //header('location: ./index.php');
           }else {
             array_push($errors, "Wrong email/password combination");
           }
         }
       }*/
      ?>


   </div>

 </div>

  <section class="container contact-section">
      <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-4 ui-sortable">
              <a class="btn btn-default btn-outline big-size" href="./webpages/under-construction.html">
                  <i class="fas fa-comments"></i>
                  <span>Συχνές Ερωτήσεις</span>
              </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 ui-sortable">
              <a class="btn btn-default btn-outline big-size" href="./webpages/under-construction.html">
                  <i class="far fa-envelope"></i>
                  <span>Ηλ. Φόρμα Επικοινωνίας</span>
              </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
              <a class="btn btn-default btn-outline big-size" href="./webpages/under-construction.html">
                  <i class="fas fa-phone"></i>
                  <span>Χρήσιμα Τηλέφωνα</span>
              </a>
          </div>
      </div>
  </section>


<script>
 // Get the modal
var modal = document.getElementById('myLoginPage');

// Get the button that opens the modal
var btn = document.getElementById("LoginBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<!-----------footer------------->
    <footer>
      <p>Αυτή η σελίδα υλοποιήθηκε από τον Έκτορα Ταβουλάρη και τον Θοδωρή Μέλλιο</p>
    </footer>


</body>
</html>
