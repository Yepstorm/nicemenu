<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">

 </head>

<body>




  {{-- NavBar Begins --}}
    <nav class="navbar navbar-expand-lg bg-light sticky-top">
        <div class="container">
            <img src="{{  asset('images/Logo.svg')  }}" alt="">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="text-success nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-success nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-success nav-link" href="#team">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-success nav-link" href="#partners">Our Partners</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-success nav-link" href="#contact">Contact Us</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!--     End Of Navbar-->

@yield('content')




{{-- Footer Begins --}}

<div class="container mt-5">

  <div class="row mt-5 ms-5 mx-5 mb-5 p-5">


        <div class="container">
          <div class="row">
             <div class="col-12 col-md-4 col-lg-3">

              <!-- Brand -->
              <a href="./index.html">
                <img src="{{  asset('images/Logo.svg')  }}" alt="..." class="footer-brand img-fluid mb-2" width="130px" height="65px">
              </a>

              <!-- Text -->
              <p class="text-gray-700 mb-2">
                Sumptuous Meal, Swift Delivery
              </p>

              <!-- Social -->
              <ul class="list-style-none list-inline list-social mb-6 mb-md-0">
                <li class="list-inline-item list-social-item me-3">
                  <a href="https://www.instagram.com/Nicemenu/" target="_blank" class="text-decoration-none">
                    <img src="{{ asset('images/instagram.png') }}"  alt="..." width="25px" height="25px">
                  </a>
                </li>
                <li class="list-inline-item list-social-item me-3">
                  <a href="https://facebook.com/NiceMenu" target="_blank" class="text-decoration-none">
                    <img src="{{ asset('images/facebook(1).png') }}" class="list-social-icon" alt="..." width="25px" height="25px">
                  </a>
                </li>
                <li class="list-inline-item list-social-item me-3">
                  <a href="https://twitter.com/NiceMenu " target="_blank" class="text-decoration-none">
                    <img src="{{ asset('images/twitter.png') }}" class="list-social-icon" alt="..." width="25px" height="25px">
                  </a>
                </li>


              </ul>

            </div>



            <div class="col-6 col-md-4 col-lg-2">

              <!-- Heading -->
              <h6 class="fw-bold text-uppercase text-gray-700">
                Useful
              </h6>

              <!-- List -->
              <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
                <li class="mb-3">
                  <a href="#about" class="text-reset">
                    About Us
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#contact" class="text-reset">
                    Contact Us
                  </a>
                </li>
              </ul>

            </div>
            <div class="col-6 col-md-4 col-lg-2">

              <!-- Heading -->
              <h6 class="fw-bold text-uppercase text-gray-700">
                Others
              </h6>

              <!-- List -->
              <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
                <li class="mb-3">
                  <a href="#team" class="text-reset">
                    Team
                  </a>
                </li>
              </ul>

            </div>
            <div class="col-6 col-md-4 offset-md-4 col-lg-2 offset-lg-0">

              <!-- Heading -->
               <h6 class="fw-bold text-uppercase text-gray-700">
                Partners
              </h6>

              <!-- List -->
              <ul class="list-unstyled text-muted mb-0">

                <li class="mb-3">
                  <a href="#partners" class="text-reset">
                    Work with Us
                  </a>
                </li>
              </ul>

            </div>
            <div class="col-6 col-md-4 col-lg-2">

              <!-- Heading -->
              <h6 class="fw-bold text-uppercase text-gray-700">
                Legal
              </h6>

              <!-- List -->
              <ul class="list-unstyled text-underline-none text-muted mb-0">
                <li class="mb-3">
                  <a href="#" class="text-reset">
                    Privacy Policy
                  </a>
                </li>
                <li class="list-unstyled text-decoration:none mb-3">
                  <a href="#" class="text-reset">
                    Terms of Use
                  </a>
                </li>
              </ul>

            </div>
          </div>
        </div>

    </div>
  </div>

{{-- Footer Ends Here --}}








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body></html>
