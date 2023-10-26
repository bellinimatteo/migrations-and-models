<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller



{
    //
    public function insertData()
    
   

    {Article::create([
        'title'=> 'Titolo #2',
        'category'=>'Esteri',
        'description'=> 'Articolo di Economia estera',
        'true'=>'.....',
        'body'=> '....',
    ]);

    Article::create([
        'title'=> 'Titolo #1',
        'category'=>'Politica',
        'description'=> 'Articolo di Economia politica',
        'true'=>'....',
        'body'=> '....',]);}
}



