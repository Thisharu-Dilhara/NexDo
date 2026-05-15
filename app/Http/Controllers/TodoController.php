<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NexDo;

class TodoController extends Controller
{
     protected $task;

     public function __construct()
     {
          $this->task = new NexDo();
     }

     public function index()
     {
          $response['tasks'] = $this->task->all();
          return view('pages.todo.index')->with($response);
     }

     public function add(Request $request)
     {
          NexDo::create([
               'title' => $request->title,
               'done' => 0
          ]);

          return redirect()->back();
     }

     public function delete($id)
     {
          $task = NexDo::find($id);
          if ($task) {
               $task->delete();
          }

          return redirect()->back();
     }
     public function done($id)
     {
          $task = NexDo::find($id);

          $task->done = 1;

          $task->save();

          return redirect()->back();
     }
}
