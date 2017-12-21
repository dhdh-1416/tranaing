<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class tranaingcontroler extends Controller
{

   
 public function index_tranaing() {
    $tranaing=tranaing::all();
    $arr=$arrayName = array('index_tranaing' =>$tranaing);
   return view('index_tranaing');
 }
public function add_tranaing() {

    $tranaing=tranaing::all();
    $arr=$arrayName = array('add_tranaing' =>$tranaing);
    return view('add_tranaing');
    
}
public function delete_tranaing() {
    $tranaing=tranaing::all();
    $arr=$arrayName = array('delete_tranaing' =>$tranaing);
    return view('delete_tranaing');
    
}
public function edit_tranaing() {
    $tranaing=tranaing::all();
    $arr=$arrayName = array('edit_tranaing' =>$tranaing);
    return view('edit_tranaing');
    
}


}