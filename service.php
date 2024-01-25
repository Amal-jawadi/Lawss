
<?php
include 'connectt.php';

// Processus d'ajout d'un nouveau produit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $img = $_POST['img'];
    $titre = $_POST['titre'];
    $text = $_POST['text'];
  

    $query = "INSERT INTO avocats (img, titre, text) VALUES ('$img', '$titre', '$text')";
    mysqli_query($conn, $query);
}

// Processus de suppression d'un produit
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_query = "DELETE FROM avocats WHERE id = '$delete_id'";
    mysqli_query($conn, $delete_query);
}

// Récupérer et afficher la liste des produits
$result = mysqli_query($conn, "SELECT * FROM avocats");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="logo.png">

    <title>Service</title>
    <link rel="stylesheet" href="./style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  </head>

  <body>
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
      <nav
        class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg"
        id="navbarVertical"
      >
        <div class="container-fluid">
          <button
            class="navbar-toggler ms-n2"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#sidebarCollapse"
            aria-controls="sidebarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
            <h3 class="text-success">
              <img src="logo.png" width="40" /><span class="text-info"
                >Lawyers of
                </span
              > Now
            </h3>
          </a>

          <div class="navbar-user d-lg-none">
            <div class="dropdown">
              <a
                href="#"
                id="sidebarAvatar"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <div class="avatar-parent-child">
                  <img
                    alt="Image Placeholder"
                    src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                    class="avatar avatar- rounded-circle"
                  />
                  <span class="avatar-child avatar-badge bg-success"></span>
                </div>
              </a>

              <div
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="sidebarAvatar"
              >
                <hr class="dropdown-divider" />
                <a href="#" class="dropdown-item">Logout</a>
              </div>
            </div>
          </div>

          <div class="collapse navbar-collapse" id="sidebarCollapse">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">
                  <i class="bi bi-house"></i> Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="bi bi-people"></i> Users
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="bi bi-chat"></i> Categoire
                  <span
                    class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-auto"
                    >6</span
                  >
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="bi bi-file-text"></i> Service
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.html">
                  <i class="bi bi-file-text"></i>  Contacts
                </a>
              </li>
            </ul>

            <hr class="navbar-divider my-5 opacity-20" />

            <ul class="navbar-nav mb-md-4">
             

              <div class="mt-auto"></div>

      
            </ul>
          </div>
        </div>
      </nav>

      <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <header class="bg-surface-primary border-bottom pt-6">
          <div class="container-fluid">
            <div class="mb-npx">
              <div class="row align-items-center">
                <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                  <h1 class="h2 mb-0 ls-tight">
                    <img src="logo.png" width="40" />
                    ByAmal & Ranya
                  </h1>
                </div>
              
              <!-- Nav -->
           
            </div>
          </div>
        </header>
        <!-- Main -->
        <main class="py-6 bg-surface-secondary">
          <div class="container-fluid">
            <!-- Card stats -->
            <div class="row g-6 mb-6">
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card shadow border-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <span
                          class="h6 font-semibold text-muted text-sm d-block mb-2"
                          >Budget</span
                        >
                        <span class="h3 font-bold mb-0">150dt</span>
                      </div>
                      <div class="col-auto">
                        <div
                          class="icon icon-shape bg-tertiary text-white text-lg rounded-circle"
                        >
                          <i class="bi bi-credit-card"></i>
                        </div>
                      </div>
                    </div>
                    <div class="mt-2 mb-0 text-sm">
                      <span
                        class="badge badge-pill bg-soft-success text-success me-2"
                      >
                        <i class="bi bi-arrow-up me-1"></i>37%
                      </span>
                      <span class="text-nowrap text-xs text-muted"
                        >Since last month</span
                      >
                    </div>
                  </div>
                </div>
              </div>
             
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card shadow border-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <span
                          class="h6 font-semibold text-muted text-sm d-block mb-2"
                          >Total hours</span
                        >
                        <span class="h3 font-bold mb-0">12h</span>
                      </div>
                      <div class="col-auto">
                        <div
                          class="icon icon-shape bg-info text-white text-lg rounded-circle"
                        >
                          <i class="bi bi-clock-history"></i>
                        </div>
                      </div>
                    </div>
                    <div class="mt-2 mb-0 text-sm">
                      <span
                        class="badge badge-pill bg-soft-danger text-danger me-2"
                      >
                        <i class="bi bi-arrow-down me-1"></i>-5%
                      </span>
                      <span class="text-nowrap text-xs text-muted"
                        >Since last month</span
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card shadow border-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <span
                          class="h6 font-semibold text-muted text-sm d-block mb-2"
                          >Work load</span
                        >
                        <span class="h3 font-bold mb-0">70%</span>
                      </div>
                      <div class="col-auto">
                        <div
                          class="icon icon-shape bg-warning text-white text-lg rounded-circle"
                        >
                          <i class="bi bi-minecart-loaded"></i>
                        </div>
                      </div>
                    </div>
                    <div class="mt-2 mb-0 text-sm">
                      <span
                        class="badge badge-pill bg-soft-success text-success me-2"
                      >
                        <i class="bi bi-arrow-up me-1"></i>10%
                      </span>
                      <span class="text-nowrap text-xs text-muted"
                        >Since last month</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card shadow border-0 mb-7">
              <div class="card-header">
                <h5 class="mb-0">Applications</h5>
              </div>
              <div class="table-responsive">
              <div class="container-fluid">
            <!-- Card stats -->
            
           
            <div class="card shadow border-0 mb-7">
              <div class="card-header">
                <h5 class="mb-0">Site</h5>
              </div>
        <table class="table">
            <thead>
                <tr>
                <form action="" method="post">
           <th>
            <div class="form-group">
                <label for="img">Image</label>
                <input type="img" class="form-control" name="img" required>
            </div>
            </th>
            <th>
            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" class="form-control" name="titre" required>
            </div>
            </th>
            <th>
            <div class="form-group">
                <label for="text">text</label>
                <input type="text" class="form-control" name="text" required>
            </div>
             </th>
             <th>
             <div class="form-group">
             <button type="submit" class="btn btn-danger btn-sm ml-1">Sauvegarder</button>
            </div>
            </th>
        </form>

              
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                  
                    echo "<td><img src='{$row['img']}' alt='Product Image' style='max-width: 100px;'></td>";
                    echo "<td>{$row['titre']}</td>";
                    echo "<td>{$row['text']}</td>";
                    echo "<td>";
                    echo "<a href='edit_service.php?id={$row['id']}' class='btn btn-danger btn-sm'>Edit</a>";
                    echo "<a href='service.php?delete_id={$row['id']}' class='btn btn-danger btn-sm ml-1'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <?php
    // Fermer la connexion à la base de données
    mysqli_close($conn);
    ?>
          </div>  
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                   </div>
              <div class="card-footer border-0 py-5">
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item">
                      <a class="page-link disabled" href="#">Previous</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link bg-info text-white" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        
        </main>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
  </body>
</html>
