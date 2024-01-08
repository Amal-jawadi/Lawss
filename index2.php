<?php 
   include("connectt.php");
$search = '';
if (isset($_GET) && $_GET && $_GET['search']){
    $search = $_GET['search'];
    $sql = "SELECT * FROM Avocats WHERE titre LIKE '%" . $_GET['search'] . "%' or titre LIKE '%" . $_GET['search'] . "%';";
}else {
    $sql = "SELECT * FROM Avocats";
}

  $result = $conn->query($sql);
  $conn->close();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lawyers of Now</title>
    <link rel="icon" href="logo.png" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
.blockquote{
  color:#0020B4;
}
.responsive {
            max-width: 100%;
            height: auto;
            display: block;
            margin: auto;
        }
        body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #5271FF;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: #C9CEE1;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #5271FF;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: #7EDBD8;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
/* CSS for main section */
.intro {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 520px;
  background: linear-gradient(to bottom, rgba(140, 160, 201, 0.5) 0%, rgba(140, 160, 201, 0.5) 100%), url("cc.jpg");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.intro h1 {
  font-family: sans-serif;
  font-size: 50px;
  color: #180186;
  font-weight: bold;
  text-transform: uppercase;
  margin: 0;
}

.intro p {
  font-size: 20px;
  color:#FFFFFF ;
  text-transform: uppercase;
  margin: 20px 0;
}
.btn{
  border: 1px solid #3498db;
  background: none;
  padding: 10px 20px;
  font-size: 20px;
  font-family: "Arial";
  cursor:pointer;
  margin:10px;
  transition: 0.8s all linear;
  position:relative;
  overflow: hidden;
}
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  display: flex;
  justify-content: flex-end;
  align-items: flex-end;
  min-height: 100vh;
}

.footer {
  position: relative;
  width: 100%;
  background: #3586ff;
  min-height: 100px;
  padding: 20px 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.social-icon,
.menu {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px 0;
  flex-wrap: wrap;
}

.social-icon__item,
.menu__item {
  list-style: none;
}

.social-icon__link {
  font-size: 2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
}
.social-icon__link:hover {
  transform: translateY(-10px);
}

.menu__link {
  font-size: 1.2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
  text-decoration: none;
  opacity: 0.75;
  font-weight: 300;
}

.menu__link:hover {
  opacity: 1;
}

.footer p {
  color: #fff;
  margin: 15px 0 10px 0;
  font-size: 1rem;
  font-weight: 300;
}

.wave {
  position: absolute;
  top: -100px;
  left: 0;
  width: 100%;
  height: 100px;
  background: url("https://i.ibb.co/wQZVxxk/wave.png");
  background-size: 1000px 100px;
}

.wave#wave1 {
  z-index: 1000;
  opacity: 1;
  bottom: 0;
  animation: animateWaves 4s linear infinite;
}

.wave#wave2 {
  z-index: 999;
  opacity: 0.5;
  bottom: 10px;
  animation: animate 4s linear infinite !important;
}

.wave#wave3 {
  z-index: 1000;
  opacity: 0.2;
  bottom: 15px;
  animation: animateWaves 3s linear infinite;
}

.wave#wave4 {
  z-index: 999;
  opacity: 0.7;
  bottom: 20px;
  animation: animate 3s linear infinite;
}

@keyframes animateWaves {
  0% {
    background-position-x: 1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}

@keyframes animate {
  0% {
    background-position-x: -1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}
</style>

  <body>
                           <nav>
 <nav class="navbar navbar-expand-lg bg-transparent shadow p-3 mb-5 bg-body-light">  
  <div class="container-fluid">
  <img src="logo.png" alt="Logo" style="width:70px;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center" href="#"><p class="text-primary-emphasis fs-5">Home</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center" href="#"><p class="text-primary-emphasis fs-5">lawyers</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center" href="#"><p class="text-primary-emphasis fs-5">Specialties</p></a>
           </li>
           <li class="nav-item">
          <a class="nav-link text-center" href="#"><p class="text-primary-emphasis fs-5">Contacts</p></a>
        </li>
        </ul>
        </div>
        </div>
        <form class="d-flex align-items-center justify-content-center">
        <input class="form-control me-2" type="text" name="search" id="search" placeholder="Search" value="<?= $search ?>">
        <div class="btn-group ms-2">
        <button type="submit" class="btn btn-outline-primary">Search</button>
        </div>
</form>
</nav>

      <div id="demo" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      </div>
  
      <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="Law1.jpg" alt="" class="d-block" style="width:100%">
      <div class="carousel-caption"> 
      </div>
      </div>

      <div class="carousel-item">
      <img src="cr.jpg" alt="" class="d-block" style="width:100%">
      <div class="carousel-caption">
      </div> 
      </div>

      <div class="carousel-item">
      <img src="back gr.jpg" alt="" class="d-block" style="width:100%">
      <div class="carousel-caption">
      </div>  
      </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
      </button>
      </div>

<br><br>

     <figure class="text-center">
     <blockquote class="blockquote fs-1 fw-semibold">
     <p>Areas of Intervation</p>
     </blockquote>
     <figcaption class="blockquote-footer fw-light  fs-5">
     <h class="fs-6">Our Lawyers ensures the defense of your interests and intervenes as:</h><cite title="Source Title"></cite>
     </figcaption>
    </figure>
<br>
<div class="container text-center mt-5 g-2">
    <div class="row row-gap-3">
    <div class="col-md-4">
    <img src="peo.png" class="img-fluid rounded mb-3" alt="Image 1">
    <h2>Family Lawyer</h2>
    <br>
    <p class="fw-light fs-6"><h6>Support in the context of the following procedures: marriage annulment, PACS, parentage, adoption, change of name or first name, right of visitation and accommodation of grandparents. Protected adults. Succession...</h6></p>
    <p><a class="link-offset-2 link-underline link-underline-opacity-25" href="#">Moreover</a></p>
    </div>

    <div class="col-md-4">
    <img src="police.png" class="img-fluid rounded mb-3" alt="Image 2">
    <h2>Criminal Law</h2>
    <br>
    <p class="fw-light fs-6"><h6>Criminal defense before the competent criminal courts, such as the investigating judge, the police court and others. Perpetrator or victim of criminal offense. Jail. Compensation for material or moral damage. Family criminal law (domestic violence).</h6></p>
    <p><a class="link-offset-2 link-underline link-underline-opacity-25" href="#">Moreover</a></p>
    </div>
  
    <div class="col-md-4">
    <img src="fiscal.png" class="img-fluid rounded mb-3" alt="Image 3">
    <h2>Fiscal Law</h2>
    <br>
    <p class="fw-light fs-6"><h6>We work on fiscal matters related to the spending of appropriated funds in a collaborative and fast-paced work environment, and handle other administrative law accounts as assigned.</h6></p>
    <p><a class="link-offset-2 link-underline link-underline-opacity-25" href="#">Moreover</a></p>
    </div>
    </div>
    </div>
    <br>
    </br>

   <figure class="text-center">
   <blockquote class="blockquote fs-1 fw-semibold">
   <p>Our Lawyers</p>
   <img src="bala.png" class="rounded" alt="...">
   </blockquote>

<br>

    <?php
if ($result->num_rows > 0) {
    
    echo '<div class="container"><div class="row">';

    while ($row = $result->fetch_assoc()) {
        ?>
        <div class="col-md-3 shadow-lg p-3 mb-5 bg-body-tertiary rounded"> 
            <div class="card">
                <img src="<?php echo $row["img"] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row["titre"] ?></h5>
                    <p class="card-text"><?php echo $row["text"] ?></p>
                    <a href="#" class="btn btn-outline-primary">Reserve Now!</a>
                </div>
            </div>
        </div>
        <?php
    }

    echo '</div></div>';
} else {
    echo "0 results";
}
?>
<br>


<main>
<div class="intro">
<h1>Legal help</h1>
<p>Do not hesitate to consult the firm with a view to establishing a quote. If your resources are below a certain ceiling, the firm accepts legal aid. Under certain conditions, you will be able to benefit from a free consultation..</p>
<button class="btn btn1 text-light">Be remembered</button>
</div>
      </div>
      </div>
      </div>
    </main>
    <br>
    <br>
    <br>
    <br>
    <br>
<button class="open-button" onclick="openForm()">Let'discuss</button>

<div class="chat-popup" id="myForm">
<form action="/action_page.php" class="form-container">
<h1>Chat</h1>
<label for="msg"><b>Your question</b></label>
<textarea placeholder="Type message.." name="msg" required></textarea>

<button type="submit" class="btn">Send</button>
<button type="button" class="btn cancel" onclick="closeForm()">Done</button>
</form>
</div>


<footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Lawyers</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Specialities</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>

    </ul>
    <p>2024 All Rights Reserved</p>
  </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
