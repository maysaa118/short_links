<?php

namespace App\Http\Controllers;

use App\Models\Short;
use Illuminate\Http\Request;

class ShortController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $status = Short::create([
            'link' => $request['link'],
            'name' => $request['name'],
        ]);
        if ($status) {
            return redirect()->back()->with('status', $status->slug);
        }
        return redirect()->back()->with('status', $status);
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $url = Short::where('slug', $slug)->firstOrFail();
        return redirect($url->link);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
