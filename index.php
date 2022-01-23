<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <title>Ma candidature</title>
    
</head>
<body>
    <!-- navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-lg-5 ">
    <div class="container-fluid ">
      <a class="navbar-brand img-fluid mt-2" href="index.html"><img src="./img/bc-logo-ad.png" c
          style="width: 90px; height: 50px;" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html"><i class="bi bi-house-door"></i> Home</a>
          </li>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="learn more.html"><i class="bi bi-info-circle"></i> Learn more</a>
              </li>
              <div class="btn-group">
                <a href="chosing.html" class="nav-link text-warning fw-bold"> <i class="bi bi-code-square"></i>
                  Nos formations</a>
                <a href="#" class="nav-link text-white dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="front end.html">Front-End</a></li>
                  <li><a class="dropdown-item" href="full stack.html">Full stack</a></li>
                  <li><a class="dropdown-item" href="wordpress.html">WordPress</a></li>
                  <li>
                  </li>
                </ul>
              </div>
            </ul>
          </div>
          <li class="nav-item">
            <a class="nav-link active" href="pricing.html"><i class="bi bi-tags"></i> Our prices</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="contact.html"><i class="bi bi-person-lines-fill"></i>
              Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn bg-danger text-white" href="liaison.html">
              <i class="bi bi-person-fill"></i> Ma candidature</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong><?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>
                        <!-- form -->
    <section>
        <div class="container">
            <div class="text-center">
                <h2 class="display-3 mb-4">veuillez remplir <br> <span class="fw-bold text-warning">le formulaire
                        suivant</span></h2>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form action="code.php" method="post">
                        <label for="name" class="form-label mt-2">Nom Complet <span
                                class="text-danger fw-bold fs-5">*</span></label>
                        <div class="input-group mb-2">
                            <span class="input-group-text">
                                <i class="bi bi-person-fill"></i>
                            </span>
                            <input type="text" class="form-control" name="nom" id="nom" required placeholder="ex.mario">
                        </div>
                        <label for="email" class="form-label">Email <span
                                class="text-danger fw-bold fs-5">*</span></label>
                        <div class="input-group mb-2">
                            <span class="input-group-text">
                                <i class="bi bi-envelope-fill me-1"></i>
                            </span>
                            <input type="email" class="form-control" name="email" id="email" required
                                placeholder="ex.mario@example.com" aria-describedby="emailHelp">
                        </div>
                        <label for="name" class="form-label mt-2">CIN<span
                                class="text-danger fw-bold fs-5">*</span></label>
                        <div class="input-group mb-2 ">
                            <span class="input-group-text">
                                <i class="bi bi-credit-card-2-front-fill"></i>
                            </span>
                            <input type="text" class="form-control" name="cin" id="cin" required placeholder="GB123456">
                        </div>
                        <label for="text" class="form-label mt-2">Numéro de téléphone <span
                                class="text-danger fw-bold fs-5">*</span></label>
                        <div class="input-group mb-2">
                            <span class="input-group-text">
                                <i class="bi bi-telephone-fill"></i>
                            </span>
                            <input type="number" class="form-control" name="tel" id="tel" required
                                placeholder="3333333333">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label mt-2"><i
                                    class="bi bi-patch-question-fill me-1"></i>Formation choisie <span
                                    class="text-danger fw-bold fs-5">*</span></label>
                            <select class="form-select border-primary" aria-label="Default select example" id="subject"
                                name="for" required>
                                <option value="Full-stack - Présentiel 4 mois (temps plein)" selected>Full-stack - Présentiel 4 mois (temps plein)</option>
                                <option value="Full-stack - Présentiel 7 mois (temps partiel)">Full-stack - Présentiel 7 mois (temps partiel)</option>
                                <option value="Front-end - Présentiel 3 mois (temps partiel)">Front-end - Présentiel 3 mois (temps partiel)</option>
                                <option value="Front-end - En ligne 3 mois (temps partiel)">Front-end - En ligne 3 mois (temps partiel)</option>
                                <option value="WordPress - Présentiel (week-end)">WordPress - Présentiel (week-end)</option>
                            </select>
                            <label for="subject" class="form-label mt-2 "><i class="bi bi-patch-check-fill"></i> Dernier
                                diplôme obtenu <span class="text-danger fw-bold  fs-5">*</span></label>
                            <select class="form-select border-primary" aria-label="Default select example" id="subject"
                                name="dip" required>
                                <option value="Bac" selected>Bac</option>
                                <option value="Bac+1">Bac+1</option>
                                <option value="Bac+2">Bac+2</option>
                                <option value="Bac+3">Bac+3</option>
                                <option value="Bac+4">Bac+4</option>
                                <option value="Bac+5">Bac+5</option>
                            </select>
                            <label for="subject" class="form-label mt-3"><i class="bi bi-patch-exclamation-fill"></i>
                                Comment avez-vous connu notre bootcamp ?
                                <span class="text-danger fw-bold fs-5">*</span></label>
                            <select class="form-select border-primary" aria-label="Default select example" id="subject"
                                name="rencontre" required>
                                <option value="Réseaux sociaux" selected>Réseaux sociaux</option>
                                <option value="Recherche internet">Recherche internet</option>
                                <option value="Amis/collègues/famille..">Amis/collègues/famille..</option>
                                <option value="Autres">Autres</option>
                            </select>
                            <label for="text" class="form-label mt-3"><i class="bi bi-question-circle-fill"></i> Des
                                questions ?</label>
                            <div class="input-group mb-2">
                                <textarea name="quest" id="" cols="65" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="text-center"><button type="submit" name="save" class="btn btn-outline-warning btn-lg">Enregistrer</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>