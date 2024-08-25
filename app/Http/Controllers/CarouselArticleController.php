<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use App\Services\ArticleService;
use Illuminate\Http\Request;

class CarouselArticleController extends Controller
{
    protected $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    public function index()
    {
        $config = Configuration::first();

        $latest = $this->articleService->getLatestFeed();

        if (! $config->is_cover_automatic) {
            //logic
        }

        $carousel = $this->articleService->getCarouselArticles();

        return view('admin.carousel-controls', compact('carousel', 'latest'));

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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'old_id' => 'required|integer',
            'new_id' => 'required|integer',
        ]);

        $config = Configuration::first();
        $coverIds = $config->cover_ids ?? [];

        // Find the index of the old_id
        $index = array_search($request->old_id, $coverIds);

        // If the old_id is found, replace it with the new_id
        if ($index !== false) {
            $coverIds[$index] = $request->new_id;
            $config->cover_ids = $coverIds;
            $config->save();

            return response()->json([
                'success' => true,
                'message' => 'Cover article updated successfully.',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
