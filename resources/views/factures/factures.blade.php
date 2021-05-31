@extends('layouts.app')

@section('content')
        <!-- Portfolio Section-->
        <section class="masthead page-section portfolio" id="portfolio">
            <div class="container">

        @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               {{session()->get('message')}}
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Faktury</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NR. Faktury</th>
      <th scope="col">Data</th>
      <th scope="col">Kwota</th>
      <th scope="col">Klient</th>
      <th scope="col" colspan="2" class="text-center">Akcje</th>
    </tr>
  </thead>
  <tbody>
  @foreach($factures as $facture)
    <tr>
      <th scope="row">{{$facture->id}}</th>
      <td>{{$facture->number}}</td>
      <td>{{$facture->date}}</td>
      <td>{{$facture->total}}</td>
      <td>{{$facture->customer->name}}</td>
      <td><a href="{{route('factures.edit',['id'=>$facture->id])}}" class="btn btn-light">Edytuj</td>
      <td><a href="{{route('factures.destroy',['id'=>$facture->id])}}" class="btn btn-danger">Usuń</td>
    </tr>
    @endforeach
  </tbody>
</table>
            </div>
        </section>
@endsection   