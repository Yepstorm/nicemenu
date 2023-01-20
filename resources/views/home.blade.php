@extends('layouts.frontend')

@section('content')

<section class="container p-0">


<section class="pt-4 pt-md-11">






        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="overflow-hidden col-12 col-md-5 col-lg-6 order-md-2">

                <!-- Image -->

                <img src="{{ asset('images/food_image.svg') }}" class="position- img-fluid mw-md-100 mw-lg-80 mb-6 mb-md-0" alt="">

            </div>
            <div class="col-12 col-md-7 col-lg-6 order-md-1 aos-init aos-animate" data-aos="fade-up">



              <h1 class="display-3 text-center text-md-start">
                <span style="color:#D24E00">Farmished ?</span> Place An Order with  <span  style="color:#D24E00">NiceMenu</span>  <br>

              </h1>



                <p class="lead text-center text-md-start text-muted mb-6 mb-lg-8">
                  NiceMenu deliver premium and well-cooked meals from your our restaurant to your doorstep in minutes without stressing you out.
                </p>



              <!-- Buttons -->
              <div class="text-center text-md-start">
                <a href="play link" class="btn btn-success shadow lift mr-3">
                  <img src="{{ asset ('images/Android icon.svg')}}" target="_blank" width="15px" height="15px">
                  <!-- <i class="fa fa-check"></i> -->
                  Download App For Android
                </a>
                <a href="apple link" class="btn btn-secondary lift me-1">
              <img src="{{ asset ('images/Apple icon.svg')}}" target="_blank" width="15px" height="15px"> Download App For IOS
                </a>
              </div>

            </div>
          </div>
        </div>
      </section>


          {{-- Fast Delivery Process Begins --}}

      <div class="sect container-fluid">
        <div class="row mt-5">
            <div class="col text-center">
                <h3>Fast Delivery You Can Rely On</h3>
                <p>Get your orders delivered within 30 minutes of placing an order.<br> Yes! Swift delivery is our top priority.</p>

            </div>

        </div>



        <div class="row m-5 text-center">


            <div class="col-sm-12 col-md-4 ">

                <div class="icon text-primary text-center mb-3">
                    <img src="{{ asset('images/Place_order.svg') }}"  width="100px" height="100px" alt="">
                    </div>

                <h6 style="color: #D24E00;">Place Order</h6>
                <p>We receive your order to satisfy your crave.</p>

            </div>

            <div class="col-sm-12 col-md-4">

                <div class="icon text-primary text-center mb-3">
                    <img src="{{ asset('images/We_process.svg') }}"  width="100px" height="100px" alt="">
                    </div>
                <h6 style="color: #D24E00;">We Process Order</h6>
                <p>Once you have placed your order, we process them and promptly hand over your order to our rider.</p>

            </div>

            <div class="col-sm-12 col-md-4 ">

                <div class="icon text-primary text-center mb-3">
                    <img src="{{ asset('images/We_deliver.svg') }}"  width="100px" height="100px" alt="">
                    </div>
                <h6 style="color: #D24E00;">We Deliver</h6>
                <p>Our rider will ensure to get to your location as fast as you placed your order.</p>

            </div>

        </div>

    </div>

    {{-- Fast Delivery Process Ends Here --}}






      {{-- About Nicemenu Begins Here --}}

      <section class="pt-8 pt-md-11 bg-gradient-light-white border-bottom border-gray-100" id="about">
        <div class="container">
          <div class="row align-items-center justify-content-between mb-8 mb-md-10">
            <div class="col-12 col-md-6 order-md-2" data-aos="fade-left" style="background-image: url('images/About_Us_container.svg')">

              <!-- Heading -->
              <h2 class="fw-bold">
                <h2 class="">About <span style="color: #D24E00;">NiceMenu</span></h2>
                <h2 style="color: #15501A;">We are Customer Friendly</h2>
              </h2>



              <!-- Text -->
              <p class="fs-lg text-muted mb-6" style="text-align: justify;">
                It’s our mission to bring to your doorstep whatever meal you desire. Our app is loaded with the best food experiences in Nigeria - within Asaba, Delta State. Our App has also been painstakingly built by a team of experienced developers and designers to ensure a stress-free experience... <a href="./#" style="hover : #db4802" class="">Read More</a>
              </p>

              <!-- List -->
              <div class="row pt-0 mt-0">
                <h3 class="text-muted">NiceMenu App Features</h3>
                <div class="col-12 col-lg-6">
                  <!-- Item -->
                  <div class="d-flex">

                    <!-- Check -->
                    <div class="me-2">
                      <i class="fa fa-circle" style="font-size: 10px;color:#D24E00;"></i>
                    </div>

                    <!-- Text -->
                    <p class="text-muted">
                      Easy to Use
                    </p>

                  </div>

                  <!-- Item -->
                  <div class="d-flex">

                    <!-- Check -->
                    <div class="me-2">
                      <i class="fa fa-circle" style="font-size: 10px;color:#D24E00;"></i>
                    </div>

                    <p class="text-muted mb-lg-0">
                      Smart Order
                    </p>

                  </div>



                </div>
                <div class="col-12 col-lg-6 mb-6 mb-md-0">

                  <!-- Item -->
                  <div class="d-flex">

                    <!-- Check -->
                    <span class="me-2">
                      <i class="fa fa-circle" style="font-size: 10px;color:#D24E00;"></i>
                    </span>

                    <!-- Text -->
                    <p class="text-muted">
                      Order Tracking
                    </p>

                  </div>

                  <!-- Item -->
                  <div class="d-flex">

                    <!-- Check -->
                    <div class="me-2">
                      <i class="fa fa-circle" style="font-size: 10px;color:#D24E00;"></i>
                    </div>

                    <!-- Text -->
                    <p class="text-muted mb-0">
                      Easy Payment
                    </p>

                  </div>

                </div>
              </div> <!-- / .row -->

            </div>
            <div class="col-12 col-md-6 col-lg-5 order-md-1" data-aos="fade-right">

              <!-- Card -->
              <div class="card shadow-light-lg lift lift-lg">

                <!-- Image -->
                <img src="{{ asset('images/App_sample.svg') }}" alt="..." class="card-img-top">

                <!-- Shape -->
                <div class="position-relative">
                  {{-- <div class="shape shape-bottom shape-fluid-x text-white">
                    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
                       </div> --}}
                </div>

              </div>

            </div>
          </div>
        </div>
      </section>


              {{-- About NIceMenu Ends Here --}}





      {{-- The Order Process Begins --}}


        {{-- The Order Proces Box --}}

         <section class="py-8 py-md-8 bg-gradient-light-white pt-8">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-md-10 col-lg-8 text-center m-5">

                <!-- Heading -->
                <h2 class="text-muted m-3">
                  Ours Ordesr <span style="color: #D24E00;">Process</span>
                </h2>

                <!-- Text -->
                <p class="fs-lg text-muted mb-5 mb-md-9">
                  The Process of getting food to your doorstep is described below.
                </p>

              </div>
            </div>

            <!-- / .row -->
            <div class="row gx-4">
              <div class="col-12 col-lg-6 d-lg-flex mb-4">

                <!-- Card -->
                <div class="card shadow-light-lg overflow-hidden" data-aos="fade-up">
                  <div class="row">
                    <div class="col-md-4 position-relative">

                      <!-- Image -->
                      <img src="{{ asset('images/Place_an_order.svg') }}" class="d-block h-75 position-absolute right-0 mt-2 me-n4 lift" alt="...">

                    </div>
                    <div class="col-md-8">

                      <!-- Body -->
                      <div class="card-body py-7 py-md-9 text-center">

                        <!-- Heading -->
                        <h4 class="fw-bold">
                          Place Order
                        </h4>

                        <!-- Text -->
                        <p class="text-muted mb-0">
                          Browse through available dishes and add your desired meal to cart.
                        </p>

                      </div>

                    </div>
                  </div>
                </div>

              </div>
              <div class="col-12 col-lg-6 d-lg-flex mb-4">

                <!-- Card -->
                <div class="card shadow-light-lg overflow-hidden text-center" data-aos="fade-up">
                  <div class="row">
                    <div class="col-md-8">

                      <!-- Body -->
                      <div class="card-body py-7 py-md-9">

                        <!-- Heading -->
                        <h4 class="fw-bold">
                          Order Confirmation
                        </h4>

                        <!-- Text -->
                        <p class="text-muted mb-0">
                          Our sales representative receives, accepts and confirms your order.
                        </p>

                      </div>

                    </div>
                    <div class="col-md-4">

                      <!-- Image -->
                      <img src="{{ asset('images/order_confirmation.svg') }}" class="h-75 position-absolute left-0 mt-2 lift" alt="...">

                    </div>
                  </div> <!-- / .row -->
                </div>

              </div>
            </div> <!-- / .row -->

                    <!-- / .row -->
            <div class="row gx-4">
              <div class="col-12 col-lg-6 d-lg-flex mb-4">

                <!-- Card -->
                <div class="card shadow-light-lg overflow-hidden" data-aos="fade-up">
                  <div class="row">
                    <div class="col-md-4 position-relative">

                      <!-- Image -->
                      <img src="{{ asset('images/We_prepare_your_order.svg') }}" class="h-75 position-absolute right-0 mt-2 me-n4 lift" alt="...">

                    </div>

                    <div class="col-md-8">

                      <!-- Body -->
                      <div class="card-body py-7 py-md-9 text-center">

                        <!-- Heading -->
                        <h4 class="fw-bold">
                           We Prepare Your Order
                        </h4>

                        <!-- Text -->
                        <p class="text-muted mb-0">
                          Browse through available dishes and add your desired meal to cart.
                          {{-- Your order is immediately prepared for pickup. --}}
                        </p>

                      </div>

                    </div>
                  </div> <!-- / .row -->
                </div>

              </div>
              <div class="col-12 col-lg-6 d-lg-flex mb-4">

                <!-- Card -->
                <div class="card shadow-light-lg overflow-hidden text-center" data-aos="fade-up">
                  <div class="row">
                    <div class="col-md-8">

                      <!-- Body -->
                      <div class="card-body py-7 py-md-9">

                        <!-- Heading -->
                        <h4 class="fw-bold">
                          Rider Picks Up
                        </h4>

                        <!-- Text -->
                        <p class="text-muted mb-0">
                          Our stand-by rider(s) picks up your order and begins the delivery process
                        </p>

                      </div>

                    </div>
                    <div class="col-md-4">

                      <!-- Image -->
                      <img src="{{ asset("images/Rider_picks_order.svg")}}" class="h-75 position-absolute left-0 mt-2 lift" alt="...">

                    </div>
                  </div> <!-- / .row -->
                </div>

              </div>
            </div> <!-- / .row -->

            <div class="row">
              <div class="col-12">

                <!-- Card -->
                <div class="card shadow-light-lg overflow-hidden text-center text-lg-start" data-aos="fade-up">
                  <div class="row">
                    <div class="col-md-4 position-relative">

                      <!-- Image -->
                      <img src="{{ asset("images/Order_complete.svg")}}" class="h-75 position-absolute right-0 mt-4 lift" alt="...">

                    </div>
                    <div class="col-md-8">

                      <!-- Body -->
                      <div class="card-body py-7 py-md-9">

                        <!-- Heading -->
                        <h4 class="fw-bold">
                          Order Complete
                        </h4>

                        <!-- Text -->
                        <p class="text-muted mb-0">
                          Your order is delivered to you in your specified location. You can track rider and rate rider after a successful delivery.
                        </p>

                      </div>

                    </div>
                  </div> <!-- / .row -->
                </div>

              </div>
            </div> <!-- / .row -->
          </div> <!-- / .container -->
        </section>

        {{-- The Order Process Ends --}}



{{-- Testimonials and Statistics Begins --}}



        <section class="pt-2 pt-md-5">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-md-10 col-lg-8 text-center">

                <!-- Heading -->
                <h2 style="color: #15501A;">
                  Our Customers are Priority
                </h2>

                <!-- Text -->
                <p class="fs-lg text-muted mb-7 mb-md-9">
                  We provide premium services tailored to bring satisfaction to our customers and in return, they brag about us. We love and appreciate every one of our customers because they are the real reason we are here.
                </p>

              </div>
            </div> <!-- / .row -->
            <div class="row">
              <div class="col-12">

                <!-- Card -->
                <div class="card card-row shadow-light-lg mb-6">
                  <div class="row gx-0">
                    <div class="col-12 col-md-6">


                      <!-- Slider -->
                      <div class="card-img-slider" data-flickity='{"fade": true, "imagesLoaded": true, "pageDots": false, "prevNextButtons": false, "asNavFor": "#blogSlider", "draggable": false}'>
                         <a class="card-img-start w-100 bg-cover" style="background-image: url('images/Comment_trps.svg');" href="#">

                          <!-- Image (placeholder) -->
                          <img src="{{ asset("images/Comment.svg")}}" alt="..." class="img-fluid">



                        </a>
                      </div>

                      <!-- Shape -->
                      <div class="shape shape-end shape-fluid-y text-white d-none d-md-block">
                       </div>

                    </div>

                    <div class="col-12 col-md-6 position-md-static">


                        <div class="w-100">

                          <!-- Body -->
                          <div class="card-body">
                            <blockquote class="blockquote text-center mb-0">

                              <!-- Text -->
                              <p class="mb-5 mb-md-7">
                                “NiceMenu services are premium. They will leave you without breathe.”.
                              </p>

                              <!-- Footer -->
                              <footer class="blockquote-footer">
                                <span class="h6 text-uppercase">Edwin James</span>
                              </footer>

                            </blockquote>
                          </div>

                        </div>



                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>




                {{--Statistics Begins Here  --}}

          <section class="pt-10 pt-md-10 bg-gray-200 m-5">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12 col-md-5 col-lg-6 order-md-2">

                <!-- Image -->
                <img src="{{ asset('images/Grow_with_us.svg') }}" alt="..." class="img-fluid mb-6 mb-md-0 p-5">

              </div>
              <div class="col-12 col-md-7 col-lg-6 order-md-1">

                <!-- Heading -->
                <h2>
                  We are focused on Business <br>
                  <span class=""  style="color: #D24E00">Grow with us</span>.
                </h2>

                <!-- Text -->
                <p class="fs-lg text-gray-700 mb-6">
                  Our business model is a simple and flexible one. We aim to serve you better by making the complexity of food ordering and delivery a thing of the past. We are working to establish our services in the 36 states of the federation, serving our ever increasing customer base.
                </p>

                <!-- Stats -->
                <div class="d-flex">
                  <div class="pe-4">
                    <h3 class="mb-0">
                      <span ></span>100%
                    </h3>
                    <p class="text-gray-700 mb-0">
                      Satisfaction
                    </p>
                  </div>
                  <div class="border-start border-gray-300"></div>
                  <div class="px-4">
                    <h3 class="mb-0">
                      <span data-countup='{"startVal": 0}' data-to="24" data-aos data-aos-id="countup:in"></span>24/7

                    </h3>
                    <p class="text-gray-700 mb-0">
                      Support
                    </p>
                  </div>
                  <div class="border-start border-gray-300"></div>
                  <div class="ps-4">
                    <h3 class="mb-0">
                      <span></span>100%
                    </h3>
                    <p class="text-gray-700 mb-0">
                      Swiftness
                    </p>
                  </div>
                </div>

              </div>
            </div> <!-- / .row -->
          </div> <!-- / .container -->
        </section>  --

        {{-- Statistics End Here --}}


    {{-- Testimonials and statistics Ends Here --}}






        {{-- Our Partners Container Begins --}}

    <div class="container-fluid  mb-3" id="partners">
        <div class="row justify-content-center m-4">
            <div class="col-md-6 text-center">
                <h4>Our Partners</h4>
                <p>We are partners with the following brands</p>

            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-md-2 m-3" id="partners1">
              <img src="{{ asset('images/Innovation Hub.svg') }}" class="position- img-fluid mw-md-100 mw-lg-80 mb-6 mb-md-0" alt="">

            </div>

            <div class="col-md-2 m-3" id="partners2">
              <img src="{{ asset('images/Delta State.svg') }}" class="position- img-fluid mw-md-100 mw-lg-80 mb-6 mb-md-0" alt="">


            </div>

            <div class="col-md-2 m-3" id="partners3">
              <img src="{{ asset('images/Tech4Dev.svg') }}" class="position- img-fluid mw-md-100 mw-lg-80 mb-6 mb-md-0" alt="">

            </div>

        </div>

    </div>

    {{-- Our Partners Container Ends --}}



      {{-- FAQS And Contact  Begins--}}



     <div class="container-fluid mb-5">

      <section class="pt-0 bg-dark" id="contact">
        <div class="container pt-8 pt-md-11">
          <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center my-5">

              <!-- Badge -->

              <span class="badge text-light bg-success  mb-4">
                <span class="text-uppercase fw-normal">Get started</span>
              </span>



              <!-- Heading -->
              <h1 class="text-white">
                How Do I get Started?
              </h1>

              <!-- Text -->
              <p class="fs-lg text-muted mb-6 mb-md-8">
                Getting started is easier than you can imagine. Follow these simple steps to quickly set up your account and start getting sumptuous meals delivered to you where you are.
              </p>


            </div>
          </div> <!-- / .row -->
          <div class="row">
            <div class="col-12 col-md-6">

              <!-- Item -->
              <div class="">

                <!-- Badge -->
                <div class="badge badge-lg badge-rounded-circle" style="background-color: #05500B;">
                  <span>1</span>
                </div>

                <div class="mx-5">

                  <!-- Heading -->
                  <h4 class="text-white">
                    Download NiceMenu App
                  </h4>

                  <!-- Text -->
                  <p class="text-muted mb-6 mb-md-8">
                    Quickly head to Appstore or Playstore, Search for NiceMenu and download the NiceMenu App
                  </p>

                </div>

              </div>

              <!-- Item -->
              <div class="d-">

                <!-- Badge -->
                <div class="badge badge-rounded-circle mt-5" style="background-color: #05500B;">
                  <span>2</span>

                </div>

                 <div class="ms-5">

                  <!-- Heading -->
                  <h4 class="text-white">
                    Set Up Account
                  </h4>

                  <!-- Text -->
                  <p class="text-muted mb-6 mb-md-0">
                    Once installed, create a free account. This involves 2-simple steps and usually takes less than a minute.
                  </p>

                </div>

              </div>

            </div>
            <div class="col-12 col-md-6">

              <!-- Item -->
              <div class="d-">

                <!-- Badge -->
                <div class="badge badge-lg badge-rounded-circle" style="background-color: #05500B;">
                  <span>3</span>
                </div>

                <div class="ms-5">

                  <!-- Heading -->
                  <h4 class="text-white">
                    Add Payment Method
                  </h4>

                  <!-- Text -->
                  <p class="text-muted mb-6 mb-md-8">
                    On successful setup, quickly head to profile to setup a payment method using the “Add Card” option.
                  </p>

                </div>

              </div>

              <!-- Item -->
              <div class="d-">

                <!-- Badge -->
                <div class="badge badge-lg badge-rounded-circle" style="background-color: #05500B;">
                  <span>4</span>
                </div>

                <div class="ms-5">

                  <!-- Heading -->
                  <h4 class="text-white">
                    Start Ordering
                  </h4>

                  <!-- Text -->
                  <p class="text-muted mb-6 mb-md-0">
                    You have the world at the tips of your fingers. Start ordering sumptuous delicacies and experience a non-ending taste bud joy.
                  </p>

                </div>

              </div>

            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </section>

      <!-- CTA -->
      <section class="py-8 py-md-11 bg-dark">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center">


              <!-- Heading -->
              <h1 class="text-white">
                Have Questions?
              </h1>

              <!-- Button -->
              <a href="./contact.html" class="btn btn-success text-info mb-5">
                Contact Us</i>
              </a>

            </div>
          </div>
        </div>
      </section>


      <!-- SHAPE -->
       <div class="position-relative">
        <div class="shape shape-bottom shape-fluid-x text-gray-200">
          <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>      </div>
      </div>



    </div>


    {{-- FAQ Ends --}}


    {{-- Our Team Begins --}}



    <div class="container-fluid mb-5" id="team">
        <div class="row justify-content-center m-1">
            <div class="col-md-6 text-center">
                <h3>Meet Our Team</h3>
            </div>
        </div>

        <div class="row justify-content-center mb-5 text-center">



            <div class="col-md-2 m-3" style="background-color: white; width: 180px;
height: 159px;">
<img src="{{ asset('images/Peremobowei.svg') }}" class="position- img-fluid mw-md-100 mw-lg-80 mb-6 mb-md-0" alt="">

          <!-- Footer -->
          <div class="">

            <!-- Heading -->
            <h6 class="mb-0">Peremobowei Agiddi</h6>
            <!-- Preheading -->
            <h6 class="mb-1 text-muted"><small>(Lead Product designer)</small></h6>

          </div>

            </div>



            <div class="col-md-2 m-3" style="background-color: white; width: 180px;
height: 159px;">
              <img src="{{ asset('images/simon.svg') }}" class="position- img-fluid mw-md-100 mw-lg-80 mb-6 mb-md-0" alt="">

              <!-- Footer -->
              <div class="">

                <!-- Heading -->
                <h6 class="mb-0">Simon Aghwe</h6>
                <!-- Preheading -->
                <h6 class="mb-1 text-muted"><small>(Product designer)</small></h6>

              </div>

            </div>

            <div class="col-md-2 m-3" style="background-color: white; width: 180px;
height: 159px;">
               <img src="{{ asset('images/Uyoyou.svg') }}" class="position- img-fluid mw-md-100 mw-lg-80 mb-6 mb-md-0" alt="">

               <!-- Footer -->
               <div class="">

                 <!-- Heading -->
                 <h6 class="mb-0">Uyoyou Atete</h6>
                 <!-- Preheading -->
                 <h6 class="mb-1 text-muted"><small>(Product designer)</small></h6>

               </div>

            </div>

            <div class="col-md-2 m-3" style="background-color:white; width: 180px;
height: 159px;">
              <img src="{{ asset('images/Freda.svg') }}" class="position- img-fluid mw-md-100 mw-lg-80 mb-6 mb-md-0" alt="">

              <!-- Footer -->
              <div class="">

                <!-- Heading -->
                <h6 class="mb-0">Atseyinku Freda</h6>
                <!-- Preheading -->
                <h6 class="mb-1 text-muted"><small>(Web Developer)</small></h6>

              </div>

            </div>

            <div class="col-md-2 m-3" style="background-color: white; width: 180px;
height: 159px;">
                <img src="{{ asset('images/okonta.svg') }}" class="position- img-fluid mw-md-100 mw-lg-80 mb-6 mb-md-0" alt="">

                <!-- Footer -->
                <div class="">

                  <!-- Heading -->
                  <h6 class="mb-0">Nwaudon Aquila Okonta</h6>
                  <!-- Preheading -->
                  <h6 class="mb-1 text-muted"><small>(Web Developer)</small></h6>

                </div>

            </div>

        </div>




        <div class="row justify-content-center mb-5 text-center">

            <div class="col-md-2 m-3" style="background-color: white; width: 180px;
height: 159px;">
                <img src="{{ asset('images/Maxwell.svg') }}" class="position- img-fluid mw-md-100 mw-lg-80 mb-6 mb-md-0" alt="">

                <!-- Footer -->
                <div class="">

                  <!-- Heading -->
                  <h6 class="mb-0">Maxwell James</h6>
                  <!-- Preheading -->
                  <h6 class="mb-1 text-muted"><small>(Web Developer)</small></h6>

                </div>

            </div>

            <div class="col-md-2 m-3" style="background-color: white; width: 180px;
height: 159px;">
                <img src="{{ asset('images/Monye.svg') }}" class="position- img-fluid mw-md-100 mw-lg-80 mb-6 mb-md-0" alt="">

                <!-- Footer -->
                <div class="">

                  <!-- Heading -->
                  <h6 class="mb-0">Monye Samuel</h6>
                  <!-- Preheading -->
                  <h6 class="mb-1 text-muted"><small>(Web Developer)</small></h6>

                </div>

            </div>

            <div class="col-md-2 m-3" style="background-color: white; width: 180px;
height: 159px;">
                <img src="{{ asset('images/Azuka.svg') }}" class="position- img-fluid mw-md-100 mw-lg-80 mb-6 mb-md-0" alt="">

                <!-- Footer -->
                <div class="">

                  <!-- Heading -->
                  <h6 class="mb-0">Malasowe Azuka</h6>
                  <!-- Preheading -->
                  <h6 class="mb-1 text-muted"><small>(Web Developer)</small></h6>

                </div>

            </div>

            <div class="col-md-2 m-3" style="background-color: white; width: 180px;
height: 159px;">
                <img src="{{ asset('images/Anderson.svg') }}" class="position- img-fluid mw-md-100 mw-lg-80 mb-6 mb-md-0" alt="">

                <!-- Footer -->
                <div class="">

                  <!-- Heading -->
                  <h6 class="mb-0">Anderson Onosakponome</h6>
                  <!-- Preheading -->
                  <h6 class="mb-1 text-muted"><small>(Web Developer)</small></h6>

                </div>

            </div>

            <div class="col-md-2 m-3" style="background-color: white; width: 180px;
height: 159px;">
                <img src="{{ asset('images/Kolawole.svg') }}" class="position- img-fluid mw-md-100 mw-lg-80 mb-6 mb-md-0" alt="">

                <!-- Footer -->
                <div class="">

                  <!-- Heading -->
                  <h6 class="mb-0">Kolawole Dollars</h6>
                  <!-- Preheading -->
                  <h6 class="mb-1 text-muted"><small>(Web Developer)</small></h6>

                </div>

            </div>



        </div>

        <div class="row justify-content-center mb-5 text-center">

            <div class="col-md-2 m-3" style="background-color: white; width: 180px;
height: 159px;">
                <img src="{{ asset('images/Chioma.svg') }}" class="position- img-fluid mw-md-100 mw-lg-80 mb-6 mb-md-0" alt="">

                <!-- Footer -->
                <div class="">

                  <!-- Heading -->
                  <h6 class="mb-0">Ashiobi Chioma Precious</h6>
                  <!-- Preheading -->
                  <h6 class="mb-1 text-muted"><small>(Mobile Developer)</small></h6>

                </div>

            </div>

            <div class="col-md-2 m-3" style="background-color: white; width: 180px;
height: 159px;">
                <img src="{{ asset('images/Uzor.svg') }}" class="position- img-fluid mw-md-100 mw-lg-80 mb-6 mb-md-0" alt="">

                <!-- Footer -->
                <div class="">

                  <!-- Heading -->
                  <h6 class="mb-0">Uzor Uzochukwu</h6>
                  <!-- Preheading -->
                  <h6 class="mb-1 text-muted"><small>(Mobile Developer)</small></h6>

                </div>

            </div>

            <div class="col-md-2 m-3" style="background-color: white; width: 180px;
height: 159px;">
                <img src="{{ asset('images/Kingsley.svg') }}" class="position- img-fluid mw-md-100 mw-lg-80 mb-6 mb-md-0" alt="">

                <!-- Footer -->
                <div class="">

                  <!-- Heading -->
                  <h6 class="mb-0">Odia Kingsley</h6>
                  <!-- Preheading -->
                  <h6 class="mb-1 text-muted"><small>(Mobile Developer)</small></h6>

                </div>

            </div>

            <div class="col-md-2 m-3" style="background-color: white; width: 180px;
height: 159px;">
                <img src="{{ asset('images/Ifeanyi.svg') }}" class="position- img-fluid mw-md-100 mw-lg-80 mb-6 mb-md-0" alt="">

                <!-- Footer -->
                <div class="">

                  <!-- Heading -->
                  <h6 class="mb-0">Onyenye Ifeanyi</h6>
                  <!-- Preheading -->
                  <h6 class="mb-1 text-muted"><small>(Mobile Developer)</small></h6>

                </div>

            </div>

            <div class="col-md-2 m-3" style="background-color: white; width: 180px;
height: 159px;">
                <img src="{{ asset('images/Peremobowei.svg') }}" class="position- img-fluid mw-md-100 mw-lg-80 mb-6 mb-md-0" alt="">

                <!-- Footer -->
                <div class="">

                  <!-- Heading -->
                  <h6 class="mb-0">Nwamu Charles Chukwudi</h6>
                  <!-- Preheading -->
                  <h6 class="mb-1 text-muted"><small>(Web Developer)</small></h6>

                </div>

            </div>



        </div>

        <div class="row justify-content-center mb-5 text-center">

          <div class="col-md-2 m-3" style="background-color: white; width: 180px;
height: 159px;">
              <img src="{{ asset('images/Oboh.svg') }}" class="position- img-fluid mw-md-100 mw-lg-80 mb-6 mb-md-0" alt="">

              <!-- Footer -->
              <div class="">

                <!-- Heading -->
                <h6 class="mb-0">Oboh Oghenefegor Bethel</h6>
                <!-- Preheading -->
                <h6 class="mb-1 text-muted"><small>(Mobile Developer)</small></h6>

              </div>

          </div>

          <div class="col-md-2 m-3" style="background-color: white; width: 180px;
height: 159px;">
              <img src="{{ asset('images/Peremobowei.svg') }}" class="position- img-fluid mw-md-100 mw-lg-80 mb-6 mb-md-0" alt="">

              <!-- Footer -->
              <div class="">

                <!-- Heading -->
                <h6 class="mb-0">Daro</h6>
                <!-- Preheading -->
                <h6 class="mb-1 text-muted"><small>(Product designer)</small></h6>

              </div>

          </div>

          <div class="col-md-2 m-3" style="background-color: white; width: 180px;
height: 159px;">
              <img src="{{ asset('images/Peremobowei.svg') }}" class="position- img-fluid mw-md-100 mw-lg-80 mb-6 mb-md-0" alt="">

              <!-- Footer -->
              <div class="">

                <!-- Heading -->
                <h6 class="mb-0">Ken</h6>
                <!-- Preheading -->
                <h6 class="mb-1 text-muted"><small>(Product designer)</small></h6>

              </div>

          </div>


      </div>

    </div>

    <br>
        {{-- Our Team Ends Here --}}
</section>
@endsection
