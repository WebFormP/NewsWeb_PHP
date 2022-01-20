<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>NewsWeb - Lire un article</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container-fluid">
          <a class="navbar-brand col-2" href="#">adminNewsWeb</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 col-10">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Gestion des articles
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Lire un article</a></li>
                    <li><a class="dropdown-item active" href="#">Créer un article</a></li>
                    <li><a class="dropdown-item" href="#">Modifier un article</a></li>
                    <li><a class="dropdown-item" href="#">Supprimer un article</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="lireTousArticles.html">Liste des articles</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
        <h1 class="col-12">Lire un article</h1>

        <h5>Titre de l'article : Article 1</h5>
        <div class="row">
          <div class="mb-3 row col-6">
            <label for="titreArticle" class="col-form-label col-4">Date de l'article</label>
            <div class="col-8">
              <input type="text" class="form-control" id="titreArticle" name="titreArticle">
            </div>
          </div>
          <div class="mb-3 row col-6">
              <label for="nomAuteur" class="col-form-label col-4">Nom de l'auteur</label>
              <div class="col-8">
                <input type="text" class="form-control" id="nomAuteur" name="nomAuteur">
              </div>  
          </div>
        </div>

      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Résumé de l'article
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Article complet
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam voluptates, nulla porro magni itaque odio expedita, ea perferendis perspiciatis, deserunt tenetur amet veniam minus dolor blanditiis sequi obcaecati iure laboriosam.</p>
            </div>
          </div>
        </div>
      </div>

      <fieldset name="categ" legend="Catégories" class="border p-3 rounded mb-3">
        <label class="form-label">Catégories</label>
        <br />
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="categories">
            <label class="form-check-label" for="inlineCheckbox1">Catégorie 1</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" name="categories">
            <label class="form-check-label" for="inlineCheckbox2">Catégorie 2</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option3" name="categories">
            <label class="form-check-label" for="inlineCheckbox2">Catégorie 3</label>
        </div>
      </fieldset>

    </div>
      

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
