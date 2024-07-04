<?php include 'includes/head.php'; ?>
<!-- hero -->
 <div id="snow"></div>
 <div class="container-fluid" id="hero">
    <div class="container-fluid title-container d-flex flex-column align-items-center">
        <h1 class="text-center">Sweet Ocean Tours</h1>
        <p class="text-center mb-4">Subtitle</p>
        <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">BOOK NOW</button>
    </div>
    
 </div>
<!-- About us -->
 <div class="container-fluid" id="about">
    <div class="container-fluid">
        <div class="row navbar-row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
                <div class="container-fluid">
                <a class="navbar-brand" href="#">Sweet Ocean Tours</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#bookNow">Book Now</a>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>
            </div>
        <div class="row about-row h-90">
            <div class="col-md-6">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus ac libero ultrices aliquam</p>
            </div>
            <div class="col-md-6">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/7M-jsjLB20Y" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
 </div>
<!-- Book Now -->
<div class="container-fluid" id="bookNow">
    <div class="row pt-4 text-center">
        <h2>Select Port of Origin</h2>  
    </div>
    <div class="row location-row">
        <div class="btn-group btn-group-toggle d-flex flex-row" data-toggle="buttons">
            <label class="btn btn mt-2">
                <input type="radio" name="options" id="benalmadena" autocomplete="off"> Benalmadena
            </label>
            <label class="btn btn mt-2">
                <input type="radio" name="options" id="malaga" autocomplete="off"> Malaga
            </label>
            <label class="btn btn mt-2">
                <input type="radio" name="options" id="marbella" autocomplete="off"> Marbella
            </label>
            <label class="btn btn mt-2">
                <input type="radio" name="options" id="tdm" autocomplete="off"> Torre del Mar
            </label>
        </div>
    </div>
    <div class="row calendar-row">
        <div class="col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center time-box">
            <div class="" id="datepicker"></div>
            <div class="" id="timepicker"></div>
        </div>
        
        <div class="col-md-6 col-sm-12 terms-box d-flex flex-column justify-content-start align-items-start">
            <h3 class="text-white">Terms & conditions</h3>
            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, natus soluta? Ratione, eum sunt? Repellat, commodi eligendi provident cupiditate quae nam possimus libero tenetur maxime, culpa repudiandae similique ex architecto.</p>        
        </div>
    </div>
    <hr style="color: white;">
    <div class="row d-flex flex-row justify-content-center">
    <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">BOOK NOW</button>
    </div>
</div>
<?php include 'includes/footer.php'; ?>