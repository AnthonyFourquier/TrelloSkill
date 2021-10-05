<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\User;
use App\Models\Card;
use App\Models\Task;
use App\Models\Comment;
use Illuminate\Http\Request;



class CardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request,$id)
    {
        $board = $request->user()->boards()->with('cards.tasks.comments')->where("id", $id)->first();
        return view('index', [

            'board' => $board
        ]);
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                "title" => 'required|string',
            ],
        );

        $card = new Card();
        $card->title = $request->title;
        $card->board_id = $request->board_id;
        $card->user_id = $request->user()->id;

        $card->save();


        return back()->with([
            'sucess' => 'ça a fonctionné !',
        ]);
    }

    public function delete($id)
    {
        $card = Card::where('id', $id);
        $card->delete();
        return back()->with('infos', 'la carte a bien ete supprime');
    }

    public function update(Request $request,$id)
    {

        $card = Card::find($id);
        $card->title = $request->title;
        $card->save();

        return back();
    }

    public function edit(Request $request,$id)
    {
        $board = $request->user()->boards()->with('cards.tasks.comments')->where("id", $id)->first();

        return view('index',
            [
                'board' => $board

            ]
        );
    }
}
