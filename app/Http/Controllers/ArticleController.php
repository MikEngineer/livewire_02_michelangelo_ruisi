<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function home()
    {
        $page = 'Homepage';
        return view('welcome', compact('page'));
    }

    function index()
    {
        $page = 'Tutti gli articoli';
        return view('article.index', compact('page'));
    }

    function create()
    {
        $page = 'Crea articolo';
        return view('article.create', compact('page'));
    }

    function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }
}
