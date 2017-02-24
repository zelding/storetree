<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStat;
use App\Stat;
use App\Utils\Constants;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $stats = Stat::all();

        return view('stat/index', [
            'stats' => $stats
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('stat/create', [
            'varTypes' => Constants::$varTypes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreStat  $request
     * @return Response
     */
    public function store(StoreStat $request)
    {
        $stat = new Stat();
        $stat->name      = $request->get('name');
        $stat->dota_name = $request->get('dota_name');
        $stat->var_type  = $request->get("stat_type");
        $stat->save();

        

        return redirect(route('stats.create'), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
