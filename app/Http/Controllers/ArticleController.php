<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
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
    public function create(): View
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $article = auth()->user()->article()->create($request->validated());

        return redirect()->route('articles.edit', $article->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $article = Article::findBySlug($slug);

        return view('article-page', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::findOrFail($id);

        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, string $id)
    {
        $validatedRequest = $request->validated();

        $article = Article::find($id);

        if ($request->hasFile('image')) {
            $storedImage = $request->file('image')->storeOnCloudinary('affix');
            $article->imageUrl = $storedImage->getSecurePath();
        }

        if ($request->hasFile('cover')) {
            $storedImage = $request->file('cover')->storeOnCloudinary('affix');
            $article->cover_image = $storedImage->getSecurePath();
        }


        $article->title = $validatedRequest['title'];
        $article->description = $validatedRequest['description'];
        if (isset($validatedRequest['category'])) {
            $article->category = $validatedRequest['category'];
        }
        $article->save();

        return redirect()->route('articles.edit', $id)->with('status', 'Información actualizada con éxito');
    }

    public function editBody($id)
    {
        $article = Article::findOrFail($id);

        return view('admin.articles.edit-body', compact('article'));
    }

    public function updateBody(Request $request, $id)
    {
        $request->validate([
            'Body' => 'required|string',
        ]);

        $article = Article::findOrFail($id);
        $article->Body = $request->input('Body');
        $article->save();

        return redirect()->route('admin')
            ->with('status', 'Contenido Actualizado exitosamente');
    }

    public function updateVisibility($id): RedirectResponse
    {
        $article = Article::findOrFail($id);
        $article->is_public = ! $article->is_public;
        $article->save();

        return redirect()->route('articles.edit', $id)->with('status', 'Visibilidad actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
