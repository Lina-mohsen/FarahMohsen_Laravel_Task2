<?php

namespace App\Http\Controllers;

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
      $tasks=  DB::table('tasks') -> get();
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

      DB::table('tasks')->insert([
        'titel' => $request->titel,
        'description' => $request->description,
    ]);

    return redirect('/');



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $task = DB::table('tasks')-> where('id' ,$id)
        ->first(); // لاننا نريد مهمة واحدة //
        return view('show', compact('task'));

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = DB::table('tasks')->where('id', $id)->first();
        return view('edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         DB::table('tasks')
        ->where('id', $id)
        ->update([
            'titel' => $request->titel,
            'description' => $request->description,
               ]);

    return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tasks')->where('id', $id)->delete();
        return redirect('/');
    }
}
