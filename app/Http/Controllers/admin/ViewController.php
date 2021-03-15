<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\View;

class ViewController extends Controller
{
    public function index(){
        $view = View::all();
        $view = View::paginate(10);
        $view->load('post');
        return view('admin.view.index', compact('view'));
    }
}
