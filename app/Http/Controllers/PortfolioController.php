<?php

namespace App\Http\Controllers;
use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){

        $portfolio = Portfolio::all();  
	return  view('welcome', compact('portfolio')); 
       
    }
}
