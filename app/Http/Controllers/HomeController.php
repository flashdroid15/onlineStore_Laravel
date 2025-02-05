<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index()
	{
		$viewData = [];
		$viewData["title"] = "Home Page - Online Store";

		return view('home.index')->with("viewData", $viewData);
	}

	/*
    | home.index == onlineStore\resources\views\home\index.blade.php
    | The . in home.index is basically \
    */

	// public function about()
	// {
	// 	$data1 = "About us - Online Store";
	// 	$data2 = "About us";
	// 	$description = "This is an about page ...";

	// 	$author = "Developed by: Your Name";

	// 	return view('home.about')->with("title", $data1)
	// 		->with("subtitle", $data2)
	// 		->with("description", $description)
	// 		->with("author", $author);
	// }

	/*
	| Above approach has bad variable naming and many with() chained
	*/

	public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Online Store";
        $viewData["subtitle"] = "About us";
        $viewData["description"] = "This is an about page ...";
        $viewData["author"] = "Developed by: Your Name";
        
        return view('home.about')->with("viewData", $viewData);
    }
}