@extends('layouts.app')
@section('content')

        <!-- Contact Section-->
        <section class="page-section masthead" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj klienta</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form action="{{ route('customers.store') }}" method="POST" id="contactForm" name="sentMessage">
                        {{csrf_field()}}
                            <div class="form-floating">
                                <input class="form-control" id="name" name="name" type="text" placeholder="Wpisz nazwę..." pattern="[A-Za-z]{3,}" title="Three letter country code" required/>
                                <label for="inputName">Nazwa klienta</label>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="address" name="address" type="text" placeholder="Wprowadź adres..." required/>
                                <label for="inputEmail">Adres</label>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="nip" name="nip" type="text" placeholder="Wprowadź NIP..." required/>
                                <label for="inputPhone">NIP</label>
                            </div>
                            <br />
                            <button class="btn btn-primary btn-xl" type="submit">Dodaj klienta</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
     @endsection