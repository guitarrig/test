<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Worker;
use Illuminate\Support\Facades\DB;


class WorkersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->isMethod('get')) {
          $workers = DB::select('SELECT * FROM workers ORDER BY id');
          // $workers = Worker::orderBy('id')->get();
        }else {
          $workers = DB::select('SELECT * FROM workers ORDER BY ' . $request->order_by . ', id');
          // $workers = Worker::orderBy($request->order_by)->orderBy('id')->get();
        }
        // dd($workers);
        return view('workers.table',['workers' => $workers]);
    }



    public function search(Request $request){
      $s = $request->search;
      $workers = Worker::where('name', 'like', "%$s%")->
                        orWhere('surname', 'like', "%$s%")->orWhere('patronymic', 'like', "%$s%")->
                        orWhere('position', 'like', "%$s%")->orWhere('work_start', 'like', "%$s%")->
                        orWhere('salary', 'like', "%$s%")->orWhere('parent_id', 'like', "%$s%")->
                        orWhere('id', 'like', "%$s%")->get();

      return view('workers.table', ['workers' => $workers]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->position);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $worker = Worker::find($id)->first();
        // return view('workers.show', ['worker' => $worker]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
