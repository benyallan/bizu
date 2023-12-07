<?php

namespace App\Domains\TrafficEnforcement\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Domains\TrafficEnforcement\Models\TrafficEnforcementArticle as Article;
use App\Domains\TrafficEnforcement\Repositories\TrafficEnforcementArticleRepository;

class TrafficEnforcementArticleController extends Controller
{
    private $articleRepository;

    public function __construct(TrafficEnforcementArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
