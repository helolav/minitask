<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //

    public function index()
    {
        $task = DB::table('task')->get();
        return view('index', ['task' => $task]);
    }


    public function store(Request $req)
    {

        DB::table('task')->insert(
            [
                'task_name' => $req->name,
                'task_due' => $req->todo,
                'task_date' => $req->date
            ]
        );
        return redirect('/');
    }

    public function edit($id)
    {
        $task = DB::table('task')->where('task_id', $id)->get();
        return view('edit', ['task' => $task]);
    }

    public function update(Request $req)
    {
        DB::table('task')->where('task_id', $req->id)->update(
            [

                'task_name' => $req->name,
                'task_due' => $req->todo,
                'task_date' => $req->date
            ]
        );
        return redirect('/');
    }

    public function delete($id)
    {
        DB::table('task')->where('task_id', $id)->delete();
        return redirect('/');
    }
}
