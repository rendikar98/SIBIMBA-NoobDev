<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\data_bimbingan;
use Illuminate\Routing\Controller;
use Illuminate\Http\RedirectResponse;



class dataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $data_bimbingan = data_bimbingan::all();
        return view('data_bimbingan.index')->with('data_bimbingan', $data_bimbingan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('data_bimbingan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        data_bimbingan::create($input);
        return redirect('data_bimbingan')->with('flash_message', 'data_bimbingan Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $data_bimbingan = data_bimbingan::find($id);
        return view('data_bimbingan.show')->with('data_bimbingan', $data_bimbingan);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):view
    {
        $data_bimbingan = data_bimbingan::find($id);
        return view('data_bimbingan.edit')->with('data_bimbingan', $data_bimbingan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $data_bimbingan = data_bimbingan::find($id);
        $input = $request->all();
        $data_bimbingan->update($input);
        return redirect('data_bimbingan')->with('flash_message', 'data_bimbingan Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        data_bimbingan::destroy($id);
        return redirect('data_bimbingan')->with('flash_message', 'data_bimbingan deleted!');
    }
}
