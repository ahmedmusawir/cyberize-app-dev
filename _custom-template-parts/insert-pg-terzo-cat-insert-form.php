<?php 
/**
 * LIST INSERT PAGE: MAIN CATEGORY INSERT FORM
 */
?>


<section id="terzo-cat-insert-box" class="card p-5 d-none animate__animated animate__zoomIn">

  <div class="form-box">

    <form>
      <label class="font-weight-bold" for="exampleFormControlTextarea1">Insert New Terzo
        Subcategory</label>

      <div class="form-group card p-3 bg-light">
        <h4 id="terzo-main-cat" class="text-danger">Tutoring</h4>
        <small id="textHelp" class="form-text text-muted">This is the Main Category</small>
        <div class="form-group mt-3">
          <h4 id="terzo-primo-cat" class="text-danger"> -- Math</h4>
          <small id="textHelp" class="form-text text-muted">This is the Primo Category</small>
        </div>
        <div class="form-group mt-3">
          <h4 id="terzo-secondo-cat" class="text-danger"> -- -- Grade 10</h4>
          <small id="textHelp" class="form-text text-muted">This is the Secondo Category</small>
        </div>
      </div>

      <div class="form-group">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp"
          placeholder="New Terzo Category">
        <small id="textHelp" class="form-text text-muted">This is the Terzo Category</small>
      </div>

      <button id="terzo-cat-user-validation-btn" type="submit" class="btn btn-primary btn-block">Submit</button>
      <button id="terzo-cat-validation-cancel-btn" type="button" class="btn btn-secondary btn-block">Cancel</button>
    </form>

  </div>

</section>