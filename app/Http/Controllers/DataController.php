<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Http\Requests\StoreDataRequest;
use App\Http\Requests\UpdateDataRequest;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas=Data::get();
        return view('dashboard.data.index', ['datas'=>$datas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.data.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDataRequest $request)
    {
        $validatedData=$request->validated();
        Data::create($validatedData);
        return redirect()->route('datas.index')->withSuccess('Data Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Data $data)
    {
        return view('dashboard.data.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDataRequest $request, Data $data)
    {
        $validatedData = $request->validated();
        $data->update($validatedData);
        return redirect()->route('datas.index')->withSuccess('Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Data $data)
    {
        $data->delete();
        return back()->withSuccess('Data Deleted');
    }
}
