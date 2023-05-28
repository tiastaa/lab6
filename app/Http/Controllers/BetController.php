<?php

namespace App\Http\Controllers;

use App\Models\Bet;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Lot;


class BetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bets = Bet::all();
        return view('bets.index',['bets'=>$bets]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lot_list = Lot::all();
        return view('bets.create',['lot_list' => $lot_list]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {   $validated = $request->validate();
        $call = Bet::create([
            'name' => $validated['name'],
            'price' => $validated['price'],
            'lot_id' => $validated['lot_id'],
        ]);


        return \redirect(route('bets.index'));
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
        $lot_list = Lot::all();
        $bet = Bet::find($id);
        return view('bets.edit',['bet'=>$bet,'lot_list'=>$lot_list]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $validated = $request->validate();
        $bet = Bet::find($id);
        $bet->update([
            'name' => $validated['name'],
            'price' => $validated['price'],
            'lot_id' => $validated['lot_id'],

        ]);
        return \redirect(route('bets.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Bet::destroy($id);
        return  \redirect(route('bets.index'));
    }
}
