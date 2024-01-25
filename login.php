<?php
   
   if (isset($_POST) && $_POST){
    include_once("connectt.php");
    
    $sql = "SELECT `email`,'password' FROM `userr` WHERE `email` = '" . $_POST['email']. "' and `password` = '" . $_POST['password'] . "';";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) == 0){
        echo "User not found: Check your credentail";
    }else{
        $user = mysqli_fetch_assoc($result);

        session_start();
        // Set session variables
       
        $_SESSION["email"] = $user['email'];
        $_SESSION["password"] = $user['password'];

        header('index.php');
        die;
    }
    $conn->close();
}   
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
          <a class="nav-link text-center" href="http://localhost/Lawss/index2.php#"><p class="text-primary-emphasis fs-5">Home</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center" href="http://localhost/Lawss/lawyers.php"><p class="text-primary-emphasis fs-5">lawyers</p></a>
        </li>
           <li class="nav-item">
          <a class="nav-link text-center" href="http://localhost/Lawss/login.php"><p class="text-primary-emphasis fs-5">login</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center" href="http://localhost/Lawss/contact2.php"><p class="text-primary-emphasis fs-5">Contact</p></a>
        </li>
        </ul>
        </div>
        </div>
</nav>

<form action="index.php" method="post">
 <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
 </div>
 <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
 </div>
 <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
</form>


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
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
