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

    <div>
        <p>Voulez vous vraiment supprimer cet article?</p>
        <button></button>
    </div>
</div>