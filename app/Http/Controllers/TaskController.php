<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     // $tasks=  DB::table('tasks') -> get();
     $tasks = Task::all();
      return view("welcome", compact('tasks'));

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
    public function store(Request $request)  //    المسؤولة عن تخزين وحفظ البيانات في قاعدة البيانات لكن بوسيط مش مباشرة

        {
            $validated = $request->validate([
    'title' => 'required|max:20',
    'description' => 'required',

], [
  'title.required' => 'Please enter a title.',
  'description.required' => 'Please enter a task description.',
]);


      //DB::table('tasks')->insert([
       // 'titel' => $request->titel,
        //'description' => $request->description,
     // ]);
     // هذه   الطريقة الثانية بس زبطت معي الثانية
    // $task= new Task;
    // $task=$request->title;
    // $task=$request->description;
    // $task->save();

     Task :: create([ // ملاحظة ضبط معي هيك

     'title' => $request->title,
    'description' => $request->description,

         ]);

    return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      // $task = DB::table('tasks')-> where('id' ,$id)
       // ->first(); // لاننا نريد مهمة واحدة //
       $task= Task::find($id);
        return view('show', compact('task'));

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       // $task = DB::table('tasks')->where('id', $id)->first();
       $task = Task::find($id);
        return view('edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { /*
         DB::table('tasks')
        ->where('id', $id)
        ->update([
            'title' => $request->title,
            'description' => $request->description,
               ]);
               */
              $task= Task::find($id);
               $task->title = $request->title;
              $task -> descrption= $request->description;

    return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      //  DB::table('tasks')->where('id', $id)->delete();
      Task :: destroy($id);
        return redirect('/');
    }
}
