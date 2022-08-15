<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        return view('player\playerindex',compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('player\playercreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Player::create([
            'username' => $request->username,
            'status' => $request->status ? 'true' : 'false',
            'unsubscribe_date' => $request->unsubscribe_date,
        ]);
        return redirect(route('players.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = Player::find($id);
        return view('player\playeredit',compact('player','id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
//        dd($request,$player);
        $player->update([
           'username' => $request->username,
           'status' => $request->status ? 'true' : 'false',
           'unsubscribe_date' => $request->unsubscribe_date,
        ]);

        return redirect(route('players.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        $player->delete();
        return redirect(route('players.index'));
    }

    public function searchView()
    {
        return view('player\search');
    }

    public function search(Request $request){

        $status = $request->get('status') ? true : false;
        $unsubscribe_date = new \DateTime($request->get('unsubscribe_date'));
        $operator = $request->get('operator') ;

        $operator = $operator == '1' ? '<' : ($operator == '2' ? '>' : '=' );

        $players = Player::where('status' , $status )
                   ->where('unsubscribe_date',$operator,$unsubscribe_date)
                   ->get();

//        dd($players);

        return view('player\playerindex',compact('players'));
    }

}
