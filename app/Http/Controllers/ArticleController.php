<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests;

class ArticleController extends Controller
{
	public function index()
    {
		$articles = Article::all();
		return view('article.index', ['articles' => $articles]);
	}
 
    public function create()
    {
        //
    }
 
    public function store()
    {
        //
    }
 
    public function show($id)
    {
        //
    }
 
    public function edit($id)
    {
        //
    }
 
    public function update($id)
    {
        //
    }
 
    public function destroy($id)
    {
		$article = Article::find($id);
		$article->delete();
    }

}
