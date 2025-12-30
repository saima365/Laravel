<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

function index(){
    return view("student.index");
}
function create(){
    return view("student.create");
}
function delete($id){
    return "<h1>ID $id is deleted</h1>";
}




}
