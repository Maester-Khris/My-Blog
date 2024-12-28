<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    public function index(){
        $jsonData = File::get(storage_path('app/articles.json'));
        $data = json_decode($jsonData, false);
        //dd($data);
        return view('blog.index', compact('data'));
    }

    public function showarticle($articlelink){
        if($articlelink =="teamperformance"){
            return view('blog.teamperformance');
        }elseif($articlelink =="weightfactor"){
            return view('blog.weightfactors');
        }else{
            return view('blog.optimization');
        }
    }
}
