<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Card;
use App\Models\Comment;
use App\Models\Task;
use App\Models\User;

use Illuminate\Http\Request;

class BoardController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return view('board.index', ['boards' => $request->user()->boards()->get(),

        ]);
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,

            [
                'title' => 'string|required|max:255',
                'img' => 'string|required|max:512',
            ],
            [],
            []
        );

        $board = new Board();
        $board->title = $request->title;
        $board->img = $request->img;
        $board->user_id = $request->user()->id;
        $board->save();

        return back();
    }

    public function delete($id)
    {
        $board = Board::where('id', $id);
        $board->delete();
        return back()->with('infos', 'le board a bien ete supprime');
    }
    public function edit(Request $request, $id)
    {
        $board = $request->user()->boards()->with('cards.tasks.comments')->where("id", $id)->first();

        return view('board.edit',
            [
                'board' => $board

            ]
        );
    }
    public function update(Request $request,$id)
    {
        $board = Board::find($id);
        $board->title = $request->title;
        $board->img = $request->img;
        $board->save();
        return redirect()->route('board.index');
    }
    public function show(Request $request, $id)
    {
        $board = $request->user()->boards()->with('cards.tasks.comments')->where("id", $id)->first();

        return view('index', [
            'board' => $board
        ]);
    }
}
