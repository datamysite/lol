<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs;

class WebController extends Controller
{
    public function index(){
        $data['blogs'] = Blogs::orderBy('created_at', 'desc')->limit(3)->get();

        return view('web.index')->with($data);
    }
}
