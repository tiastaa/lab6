<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Lot;

class LotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lots = Lot::all();
        return view('lots.index',['lots'=>$lots]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lots.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate();
        $lot = Lot::create([
            'title'=>$validated['title'] ,
            'start'=>$validated['start'],
            'finish'=>$validated['finish'],
            'price'=>$validated['price'],
        ]);
        return \redirect(route('lot.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $lot = Lot::find($id);
        return view('lots.edit',['lot'=>$lot]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $validated = $request->validate();
        $lot = Lot::find($id);
        $lot->update([
            'title'=>$validated['title'] ,
            'start'=>$validated['start'],
            'finish'=>$validated['finish'],
            'price'=>$validated['price'],
        ]);
        return \redirect(route('lots.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Lot::destroy($id);
        return \redirect(route('lots.index'));
    }
}
