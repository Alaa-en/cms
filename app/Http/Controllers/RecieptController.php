<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;
 use Redirect,Response;
  
 class RecieptController extends Controller
 {
    public function index()
    {
       $data['orders'] = DB::table('orders')->get();
        return view("Bill",$data);
    }
  
    public function getPrice()
    {
       $getPrice = $_GET['id'];
       $price  = DB::table('orders')->where('id', $getPrice)->get();
       return Response::json($price);
    }   
   
 }
