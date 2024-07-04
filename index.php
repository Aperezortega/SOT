<?php include 'includes/head.php'; ?>
<div class="text-center bg-image rounded-3 section" id="hero">
  <div class="mask">
    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="text-white">
        <h1 class="mb-3 title">Sweet Ocean Tours</h1>
        <h4 class="mb-3">Im on a Boat, Are you?</h4>
        <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="#!" role="button">Book now</a>
      </div>
    </div>
  </div>
</div>
<!-- Hero -->
<!-- Main content -->
<div class="container-fluid p-2 section" id="about">
    <div class="container my-5">
    <section>
        <h2 class="text-center mb-5 about">About us</h2>
        
        <div class="row">
        <div class="col-lg-6">
            <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/7M-jsjLB20Y" title="YouTube video" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-lg-6">
            <p class="lead">
            Sweet Ocean Tours is a company that offers boat tours in the beautiful beaches of "La Costa del Sol". We have
            different packages for you to enjoy with your family and friends. We have the best prices and the best
            service. Book now and enjoy the best experience of your life.
            </p>
        </div>
        </div>
    </section>
    </div>
</div>

<!-- Book Now -->
  <div class="container-fluid p-4" id="bookNow">
    <div class="container">
      <div class="row mt-2" >
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-outline-primary">
            <input type="radio" name="options" id="benalmadena" autocomplete="off"> Benalmadena
          </label>
          <label class="btn btn-outline-primary">
            <input type="radio" name="options" id="malaga" autocomplete="off"> Malaga
          </label>
          <label class="btn btn-outline-primary">
            <input type="radio" name="options" id="marbella" autocomplete="off"> Marbella
          </label>
          <label class="btn btn-outline-primary">
            <input type="radio" name="options" id="option4" autocomplete="off"> Torre del Mar
          </label>
        </div>
      </div>
      <!-- end row -->
      <div class="row mt-4">
        <div class="col-md-6 col-sm-12 d-flex justify-content-end">
          <div class="" id="datepicker"></div>
        </div>
        <div class="col-md-6 col-sm-12 ">
          <div class="btn-group btn-group-toggle d-flex flex-row" data-toggle="buttons" id="time-picker">
            <label class="btn btn-outline mt-2">
              <input  type="radio" name="options" id="benalmadena" autocomplete="off"> 12:00
            </label>
            <label class="btn btn-outline mt-2">
              <input  type="radio" name="options" id="malaga" autocomplete="off"> 14:00
            </label>
            <label class="btn btn-outline mt-2">
              <input type="radio" name="options" id="marbella" autocomplete="off"> 16:00
            </label>
            <label class="btn btn-outline mt-2">
              <input type="radio" name="options" id="option4" autocomplete="off"> 18:00
            </label>
          </div>
        </div>
        <!-- end row-->
      </div>
    </div>
  </div>
</div>   

<?php include 'includes/footer.php'; ?>