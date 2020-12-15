<?php 
/**
 * LIST INSERT PAGE: MAIN CATEGORY INSERT FORM
 */
?>


<section id="primo-cat-insert-box" class="card p-5 d-none animate__animated animate__zoomIn">
  <!-- <section id="primo-cat-insert-box" class="card p-5 animate__animated animate__zoomIn"> -->

  <div class="form-box">

    <form>
      <label class="font-weight-bold" for="exampleFormControlTextarea1">Insert New Primo and
        Subcategories</label>

      <div class="form-group card bg-light p-3">
        <h4 id="primo-main-cat" class="text-danger">Tutoring</h4>
        <small id="textHelp" class="form-text text-muted">This is the Main Category</small>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp"
          placeholder="New Primo Category">
        <small id="textHelp" class="form-text text-muted">This is the Primo Category</small>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp"
          placeholder="New Secondo Category">
        <small id="textHelp" class="form-text text-muted">This is the Secondo Category</small>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp"
          placeholder="New Terzo Category">
        <small id="textHelp" class="form-text text-muted">This is the Terzo Category</small>
      </div>

      <button id="primo-cat-user-validation-btn" type="submit" class="btn btn-primary btn-block">Submit</button>
      <button id="primo-cat-validation-cancel-btn" type="button" class="btn btn-secondary btn-block">Cancel</button>
    </form>

  </div>

</section>