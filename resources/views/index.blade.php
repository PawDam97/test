@extends('layouts.app')
@section('content')
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Fakturomat</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Zarządzaj swoimi fakturkami</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Faktury</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
             
            </div>
        </section>
   
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj fakture</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form>
                            <div class="form-floating">
                                <input class="form-control" id="inputName" type="text" placeholder="Enter your name..." />
                                <label for="inputName">Name</label>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="inputEmail" type="email" placeholder="Enter your email..." />
                                <label for="inputEmail">Email address</label>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number..." />
                                <label for="inputPhone">Phone Number</label>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" id="inputMessage" placeholder="Enter your message here..." style="height: 12rem"></textarea>
                                <label for="inputMessage">Message</label>
                            </div>
                            <br />
                            <button class="btn btn-primary btn-xl" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
     @endsection