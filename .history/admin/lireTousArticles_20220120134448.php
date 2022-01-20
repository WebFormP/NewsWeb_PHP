<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <title>NewsWeb - Tous les articles</title>
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
                  <li><a class="dropdown-item" href="creerArticle.html">Créer un article</a></li>
                  <li><a class="dropdown-item" href="#">Modifier un article</a></li>
                  <li><a class="dropdown-item" href="#">Supprimer un article</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item active" href="#">Liste des articles</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="container">
        <h1>NewsWeb - Tous les articles</h1>
        <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col" >#</th>
                <th scope="col" class="col-2">Titre</th>
                <th scope="col" class="col-1">Date et heure</th>
                <th scope="col" class="col-1">Auteur</th>
                <th scope="col" class="col-5">Résumé de l'article</th>
                <th scope="col" class="col-1">Catégories</th>
                <th scope="col" class="col-2">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Titre Article 1</td>
                <td>23-12-2021 09:00:00</td>
                <td>Pierre</td>
                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, expedita adipisci maiores fuga natus libero. Voluptatum saepe optio, enim odio deleniti aliquam ipsam culpa repellat magni, id quasi corrupti beatae?</td>
                <td>Cat1, Cat2</td>
                <td class="d-flex">
                    <a class="btn btn-outline-success col mx-1" href="lireArticle.html" role="button"><i class="bi bi-file-earmark-text"></i></a>
                    <a class="btn btn-primary col mx-1" href="modifierArticle.html" role="button"><i class="bi bi-pencil-square"></i></a>
                    <a class="btn btn-danger col mx-1" href="supprimerArticle.html" role="button"><i class="bi bi-x-square-fill"></i></a>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Titre Article 2</td>
                <td>23-12-2021 10:30:00</td>
                <td>Michael</td>
                <td>Voluptatum saepe optio, enim odio deleniti aliquam ipsam culpa repellat magni, id quasi corrupti beatae?</td>
                <td>Cat3</td>
                <td class="d-flex">
                    <a class="btn btn-outline-success col mx-1" href="lireArticle.html" role="button"><i class="bi bi-file-earmark-text"></i></a>
                    <a class="btn btn-primary col mx-1" href="modifierArticle.html" role="button"><i class="bi bi-pencil-square"></i></a>
                    <a class="btn btn-danger col mx-1" href="supprimerArticle.html" role="button"><i class="bi bi-x-square-fill"></i></a>
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Titre Article 3</td>
                <td>23-12-2021 11:45:00</td>
                <td>André</td>
                <td>Fugit, expedita adipisci maiores fuga natus libero. Voluptatum saepe optio, enim odio deleniti aliquam ipsam culpa repellat magni, id quasi corrupti beatae?</td>
                <td>Cat1, Cat2, Cat3</td>
                <td class="d-flex">
                    <a class="btn btn-outline-success col mx-1" href="lireArticle.html" role="button"><i class="bi bi-file-earmark-text"></i></a>
                    <a class="btn btn-primary col mx-1" href="modifierArticle.html" role="button"><i class="bi bi-pencil-square"></i></a>
                    <a class="btn btn-danger col mx-1" href="supprimerArticle.html" role="button"><i class="bi bi-x-square-fill"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
    </main>

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
