<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Board;
use App\Models\Card;
use App\Models\Comment;
use App\Models\Task;
use App\Models\User;
class CommentController extends Controller
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


    public function store(Request $request)
    {
        $request->validate(
            [
                'content' => 'required|string',

            ],
            [],
            [],
        );
        $comment = new Comment();
        $comment->content = $request->content;
        $comment->task_id = $request->task_id;
        $comment->user_id = $request->user()->id;
        $comment->date = now();
        $comment->save();
        return back();
    }


    public function edit($comment)
    {
        return view('comments.edit', ['comments' => Comment::all()]);
    }

    public function update(Request $request, $id)
    {

        $comment = Comment::find($id);
        $comment->content = $request->content;
        $comment->save();

        return back();
    }


    public function delete($comment)
    {
        $comment = Comment::where('id', $comment);
        $comment->delete();

        //return back();
        return back();
    }
}
