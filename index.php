<?php include 'includes/head.php'; ?>
<!-- Hero -->
<div class="text-center bg-image rounded-3">
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
<div class="container-fluid p-2" id="about">
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
<div class="container-fluid p-2" id="bookNow">
    <!-- Date picker -->
    <div class="container mb-4">
        <div class="row d-flex justify-content-center">
            <div class="col-md-3">
            <div class="input-group">
                <button class="btn btn-outline-secondary" type="button" id="prev-day">←</button>
                <input type="date" class="form-control text-center" id="date-picker">
                <button class="btn btn-outline-secondary" type="button" id="next-day">→</button>
            </div>
            </div>
        </div>
    </div>
    <!-- Grid -->
    <div class="container">
        <div class="row">
            <div class="card py-4 mx-0 mx-md-auto">
                <!-- TITULO DE LA MESA -->
                <div class="row text-center d-flex justify-content-center align-items-center">
                    <div class="col-md-3">
                        <span id="priceHour">€/H</span>
                    </div>
                    <div class="col-md-3">
                    <div class="input-group mb-2">
                        <button class="btn btn-outline-secondary" type="button" id="prev-type">←</button>
                        <select class="form-control text-center" id="typeSelector" readonly>
                            <option value="1">5 Person</option>
                        </select>       
                        <button class="btn btn-outline-secondary" type="button" id="next-type">→</button>
                    </div>

                    </div>
                    <div class="col-md-3">
                        <span id="totalPrice">120€</span>
                    </div>
                </div>
                <!-- GRID MESAS -->
                <div class="card-body p-0">
                    <div class="container-fluid" id="hourGrid"></div>
                </div>

    <!-- BOOK BTN & FORM -->
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <form id="reservaForm" method="post" action="booking.php">
                <!-- Campo oculto para la fecha seleccionada -->
                <input type="hidden" name="date" id="date" value="">

                <!-- Campo oculto para la mesa seleccionada -->
                <input type="hidden" name="selectedBoat" id="selectedBoat" value="">

                <!-- Campo oculto para la hora de inicio -->
                <input type="hidden" name="startTime" id="startTime" value="">

                <!-- Campo oculto para la hora de fin -->
                <input type="hidden" name="endTime" id="endTime" value="">

                <!-- Campo oculto para el precio total -->
                <input type="hidden" name="totalPrice" id="totalPrice" value="">

                <button class="btn btn-primary mt-2" type="submit">Book Now!</button>
            </form>
        </div>
    </div>
</div>
</div>
<?php include 'includes/footer.php'; ?>