@extends('layouts.app')
@section('content')

        <!-- Contact Section-->
        <section class="page-section masthead" id="contact">
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
                        <form action="{{ route('factures.store') }}" method="POST" id="contactForm" name="sentMessage">
                        {{csrf_field()}}
                        <div class="form-floating">
                        <select name="customer" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Wybierz klienta</option>
                                @foreach(\App\Models\Customer::all() as $customer)
                                <option value="{{$customer->id}}">{{$customer->name}}</option>
                                @endforeach
                        </select>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="number" name="number" type="text" placeholder="Wpisz numer faktury..." required/>
                                <label for="inputName">Numer faktury</label>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="date" name="date" type="text" placeholder="Wprowadź datę..." required/>
                                <label for="inputEmail">Data wystawienia</label>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="total" name="total" type="text" placeholder="Wprowadź kwotę..." required/>
                                <label for="inputPhone">Kwota</label>
                            </div>
                            <br />
                            <button class="btn btn-primary btn-xl" type="submit">Dodaj fakturę</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
     @endsection