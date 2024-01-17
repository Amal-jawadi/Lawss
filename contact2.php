<?php
    if (isset($_POST) && ($_POST)){
        include_once("connectt.php");

        $sql = "INSERT INTO `contact2`(`name`, `email`,`city`, `state`, `gender`, `message`) 
        VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['city'] .  "', '" . $_POST['state'] . "', '" . $_POST['gender'] ."', '" . $_POST['message']."');";
    
        if ($conn->query($sql) === TRUE) {
            echo "";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;

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
          <a class="nav-link text-center" href="#"><p class="text-primary-emphasis fs-5">login</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center" href="http://localhost/Lawss/contact2.php"><p class="text-primary-emphasis fs-5">Contact</p></a>
        </li>
      </ul>
    </div>
  </div>
  <form class="d-flex align-items-center justify-content-center">
    <input class="form-control me-2" type="text" name="search" id="search" placeholder="Search">
    <div class="btn-group ms-2">
    <button type="submit" class="btn btn-outline-primary">Search</button>
    </div>
  </form>
</nav>

<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4 border-primary-subtle rounded-3">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="form.jpg"
                alt="" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Registration form</h3>
                <form action="contact2.php" method="POST">
                <div class="col-md-6">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="col-md-6">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" name="email" id="email" placeholder="">
                </div>
                <div class="col-md-6">
                  <label for="city" class="form-label">City</label>
                  <input type="text" class="form-control" id="city" name="city">
                </div>
                <div class="col-md-4">
                  <label for="state" class="form-label">State</label>
                  <select id="state" name="state" class="form-select">
                    <option selected>Tunis</option>
                    <option>Sousse</option>
                  </select>
                </div>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="gender" checked>
                    <label class="form-check-label" for="radios1">
                      Male
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="gender">
                    <label class="form-check-label" for="radios2">
                      Female
                    </label>
                  </div>
                  <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="gender" disabled>
                    <label class="form-check-label" for="radios3">
                      Robot
                    </label>
                  </div>
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
              </div>
                <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Submit</button>
              </div>
            </form>
            </div>

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