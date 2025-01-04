<?php

namespace App\Http\Controllers;

use App\Models\Revelation;
use Illuminate\View\View;

class RevelationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('revelations', [
		]);
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
    public function show(Revelation $revelation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Revelation $revelation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Revelation $revelation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Revelation $revelation)
    {
        //
    }
}
