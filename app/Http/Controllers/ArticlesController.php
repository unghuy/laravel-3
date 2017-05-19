<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AticleRequest;
use App\Http\Controllers\Controller;
use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        return Article::all();
    }

    public function store(AticleRequest $request)
    {
        return Article::create($request->all());
    }

    public function show(Article $acticle)
    {
        return $article;
    }

    public function update(AticleRequest $request, Article $article)
    {
        $article->update($request->all());
        return $article;
    }

    public function destroy(Article $article)
    {
        return (string) $article->delete();
    }
}
