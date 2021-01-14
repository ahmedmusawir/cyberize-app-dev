<!-- MAIN FORM INPUTS - NAME, ADDRESS, SOCIAL LINKS ETC. -->
<!-- DESCRIPTION - 20 CHAR LIMIT -->
<div class="form-group mt-5">
  <label class="font-weight-bold" for="lister-description">Description:</label>
  <textarea class="form-control" id="lister-description" rows="3"
    placeholder="Add details of your list ...(Limit: 140 Characters)"></textarea>
</div>
<!-- NAME -->
<div class="form-group">
  <label class="font-weight-bold" for="lister-name">Contact:</label>
  <input type="text" class="form-control" id="lister-name" aria-describedby="textHelp" placeholder="Your Name">
  <small id="textHelp" class="form-text text-muted">Ex: Donald Trump</small>
</div>
<!-- PHONE -->
<div class="form-group">
  <!-- <label class="font-weight-bold" for="lister-name">Phone:</label> -->
  <input type="tel" class="form-control" id="lister-name" aria-describedby="textHelp" placeholder="Your Phone Number">
  <small id="textHelp" class="form-text text-muted">Ex: 6781231234</small>
</div>
<!-- EMAIL -->
<div class="form-group">
  <!-- <label class="font-weight-bold" for="lister-name">Email:</label> -->
  <input type="email" class="form-control" id="lister-name" aria-describedby="textHelp"
    placeholder="Your Email Address">
  <small id="textHelp" class="form-text text-muted">Ex: trump@whitehouse.com</small>
</div>
<!-- WEBSITE -->
<div class="form-group">
  <!-- <label class="font-weight-bold" for="lister-name">Website:</label> -->
  <input type="text" class="form-control" id="lister-name" aria-describedby="textHelp" placeholder="Your Website">
  <small id="textHelp" class="form-text text-muted">Ex: Donald Trump</small>
</div>
<!-- ADDRESS -->
<div class="form-group row">
  <div class="col-12">
    <input type="text" class="form-control" id="lister-address" aria-describedby="textHelp" placeholder="City">
    <small id="textHelp" class="form-text text-muted">Ex: Atlanta</small>
  </div>
  <div class="col-12 col-sm-6">
    <!-- <div class="col-auto"> -->
    <input type="text" class="form-control" id="lister-address" aria-describedby="textHelp" placeholder="Zip">
    <small id="textHelp" class="form-text text-muted">Ex: 30324</small>
  </div>

  <div class="col-12 col-sm-6">
    <!-- <div class="col-auto"> -->
    <input type="text" class="form-control" id="lister-address" aria-describedby="textHelp" placeholder="State">
    <small id="textHelp" class="form-text text-muted">Ex: GA</small>
  </div>

</div>
<!-- EXAMPLE: BOOTSTRAP 4 FANCY INPUT -->
<!-- <div class="form-group">
  <label class="sr-only" for="inlineFormInputGroup">Username</label>
  <div class="input-group mb-2">
    <div class="input-group-prepend">
      <div class="input-group-text">@</div>
    </div>
    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
  </div>
</div> -->
<!-- SOCIAL MEDIA  -->
<!-- Facebook -->
<div class="form-group">
  <label class="font-weight-bold" for="exampleFormControlTextarea1">Social Media:</label>
  <div class="input-group mb-2">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fab fa-facebook-f"></i></div>
    </div>
    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Facebook">
  </div>
  <small id="textHelp" class="form-text text-muted">Example: https://facebook.com/mypage</small>
</div>
<!-- Yelp -->
<div class="form-group">
  <div class="input-group mb-2">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fab fa-yelp"></i></div>
    </div>
    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Yelp">
  </div>
  <small id="textHelp" class="form-text text-muted">Example: https://yelp.com/mypage</small>
</div>
<!-- Instagram -->
<div class="form-group">
  <div class="input-group mb-2">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fab fa-instagram"></i></div>
    </div>
    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Instagram">
  </div>
  <small id="textHelp" class="form-text text-muted">Example: https://instagram.com/mypage</small>
</div>
<!-- LinkedIn -->
<div class="form-group">
  <div class="input-group mb-2">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fab fa-linkedin-in"></i></div>
    </div>
    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="LinkedIn">
  </div>
  <small id="textHelp" class="form-text text-muted">Example: https://linkedin.com/mypage</small>
</div>
<!-- Google Plus -->
<div class="form-group">
  <div class="input-group mb-2">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fab fa-google-plus-g"></i></div>
    </div>
    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Google Plus">
  </div>
  <small id="textHelp" class="form-text text-muted">Example: https://googleplus.com/mypage</small>
</div>

<!-- LISTING SINCE -->
<div class="form-group">
  <label class="font-weight-bold" for="lister-name">Listing Since:</label>
  <div class="card bg-light p-2">05/30/2021</div>
</div>

<!-- THE SUBMIT BUTTON -->
<button id="list-insert-button" type="button" class="btn btn-primary">
  Submit Your List
</button>