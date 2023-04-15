<?php

namespace RajTechnologies\RouteList\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class RouteListController extends Controller
{
    public function index(Request $request)
    {
        if(request()->has('only')){
            $title = "API Routes List";
        }else{
            $title = "All Routes List";
        }
        $routeCollection = Route::getRoutes();
        return view("RouteList::index",compact('title','routeCollection'));
    }    
}
