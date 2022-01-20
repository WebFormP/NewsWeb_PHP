<div class="container">
  <h1>NewsWeb - Modifier un article</h1>
  <form>
    <div class="mb-3">
      <label for="titreArticle" class="form-label">Titre de l'article</label>
      <input type="text" class="form-control" id="titreArticle" name="titreArticle" value="Article 1">
    </div>
    <div class="mb-3">
      <label for="nomAuteur" class="form-label">Nom de l'auteur</label>
      <input type="text" class="form-control" id="nomAuteur" name="nomAuteur" value="Pierre">
    </div>
    <div class="mb-3">
      <label for="contenuArticle" class="form-label">Contenu de l'article</label>
      <textarea class="form-control" id="contenuArticle" rows="3" name="contenuArticle">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto aliquam explicabo ut exercitationem nulla quos voluptas incidunt obcaecati, quidem dolore fugit debitis eum odio temporibus cumque nobis aperiam illum labore!
                </textarea>
    </div>
    <div class="mb-3">
      <label for="resumeArticle" class="form-label">Résumé de l'article</label>
      <input type="text" class="form-control" id="resumeArticle" name="resumeArticle" value="Lorem ipsum dolor sit amet consectetur adipisicing elit.">
    </div>
    <fieldset name="categ" legend="Catégories" class="border p-3 rounded mb-3">
      <label class="form-label">Catégories</label>
      <br />
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="categories" checked>
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
    <div class="mb-3">
      <label for="imageArticle" class="form-label">Image mise en avant</label>
      <input class="form-control" type="file" id="imageArticle">
    </div>

    <button type="button" class="btn btn-danger">Annuler</button>
    <button type="submit" class="btn btn-primary">Modifier l'article</button>
  </form>
</div>