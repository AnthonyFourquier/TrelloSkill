<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;
use App\Models\Card;
use App\Models\Comment;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
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

            'board' => $board,


        ]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        //valadation d'envoie
        $this->validate(
            $request,

            [
                'content' => 'string|required|max:255',

            ],
            [],
            [
                'content' => 'Le contenue de la tache',

            ]

        );

        $task = new Task();
        $task->content = $request->content;

        $task->card_id = $request->card_id ;
        
        $task->user_id = $request->user()->id;


        $task->save();
        return back();
    }


    public function delete($id)
    {

        $task = Task::where('id', $id);
        $task->delete();
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

    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->content = $request->content;
  /*         $task->img = $request->img;
        $task->label = $request->label;
        $task->date_start = $request->date_start;
        $task->date_end = $request->date_end; */

        $task->save();

        return back();
    }
}
