<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\course;
class courseController extends Controller
{
       
 public function index_course() {
     $course=course::all();
     $arr=$arrayName = array('course' =>$course);
    return view('index_course');
  }
 public function add_course() {
    $course=course::all();
    $arr=$arrayName = array('addcourse' =>$course);
     return view('add_course');
     //
 }
 public function delete_course() {
    $course=course::all();
    $arr=$arrayName = array('delete_course' =>$course);
     return view('delete_course');
     
 }
 public function edit_course() {
    $arr=$arrayName = array('edite_course' =>$course);
    $course=course::all();
    return view('edit_course');
     
 //}
 //public function contact() {
   //  return view('contact');
     //
 //}
}
