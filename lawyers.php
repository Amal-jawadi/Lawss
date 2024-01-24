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
          <a class="nav-link text-center" href="http://localhost/Lawss/index2.php"><p class="text-primary-emphasis fs-5">Home</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center" href="http://localhost/Lawss/lawyers.php"><p class="text-primary-emphasis fs-5">lawyers</p></a>
        </li>
           <li class="nav-item">
          <a class="nav-link text-center" href="http://localhost/Lawss/login.php"><p class="text-primary-emphasis fs-5">Login</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center" href="http://localhost/Lawss/contact2.php"><p class="text-primary-emphasis fs-5">Contact</p></a>
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


<figure class="text-center">
   <blockquote class="blockquote fs-1 fw-semibold">
   <img src="bala.png" class="rounded" alt="...">
   </blockquote>
</figure>
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
                    <a href="http://localhost/Lawss/contact2.php" class="btn btn-outline-primary">Reserve Now!</a>
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



<footer class="bg-body-tertiary text-center">
  <div class="container p-4 pb-0">
    <section class="mb-4">
     
    <button
    class="btn text-white btn-floating m-1"
    style="background-color: #59D7D6;"
    href="https://www.facebook.com"
    role="button"
    onclick="window.open('https://www.facebook.com/'); return false;"
>
    <img src="facebook.png" alt="Your image" style="width: 30px; height: 30px;">
</button>
<button
    class="btn text-white btn-floating m-1"
    style="background-color: #D9D9D9;"
    href="https://github.com/your-username"
    role="button"
    onclick="window.open('https://github.com/your-username/'); return false;"
>
    <img src="github.png" alt="Your image" style="width: 30px; height: 30px;">
</button>
<button
    class="btn text-white btn-floating m-1"
    style="background-color: #F1C2D9;"
    href="https://www.youtube.com/"
    role="button"
    onclick="window.open('https://www.youtube.com/'); return false;"
>
    <img src="youtube.png" alt="Your image" style="width: 30px; height: 30px;">
</button>
     
<button
  class="btn text-white btn-floating m-1"
  style="background-color: #F0AB78;"
  href="https://www.instagram.com/"
  role="button"
  onclick="window.open('https://www.instagram.com/'); return false;"
>
  <img src="instagram.png" alt="Your image" style="width: 30px; height: 30px;">
</button>
    </section>
  </div>
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    2024 Copyright:
    <a class="text-body" href="http://localhost/Lawss/index2.php">Lowyers of Now.</a>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

