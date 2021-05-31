<?php

namespace App\Http\Controllers;
use App\Models\Factures;
use Illuminate\Http\Request;

class FacturesController extends Controller
{
    public function index(){
        $factures = Factures::with('customer')->get();
        return view('factures.factures', ['factures'=> $factures]);
    }

    public function create(){
        return view('factures.create');
    }

    public function edit($id){
        $facture = Factures::find($id);
        return view('factures.edit',['factures'=>$facture]);
    }

    public function store(Request $request){
    $facture = new Factures();
    $facture->number = $request->number;
    $facture->date = $request->date;
    $facture->total = $request->total;
    $facture->customer_id = $request->customer;
    $facture->save();
    return redirect()->route('factures.index')->with('message', 'Faktura dodana poprawnie');
    }

    public function update($id, Request $request){
        $facture = Factures::find($id);
        $facture->number = $request->number;
        $facture->date = $request->date;
        $facture->total = $request->total;
        $facture->save();
        return redirect()->route('factures.index')->with('message', 'Faktura zedytowana poprawnie');

        }
    public function destroy($id){
       Factures::destroy($id);
        return redirect()->route('factures.index')->with('message', 'Faktura usunięta poprawnie');
    
    }
}
