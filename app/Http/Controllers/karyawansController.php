<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\karyawans;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class karyawansController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $karyawans = karyawans::all();
        return view ('karyawans.index')->with('karyawans',$karyawans);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('karyawans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        karyawans::create($input);
        return redirect('karyawans')->with('flash_message', 'karyawans Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $karyawans = karyawans::find($id);
        return view('karyawans.show')->with('karyawans', $karyawans);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $karyawans = karyawans::find($id);
        return view('karyawans.edit')->with('karyawans', $karyawans);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $karyawans = karyawans::find($id);
        $input = $request->all();
        $karyawans->update($input);
        return redirect('karyawans')->with('flash_message', 'karyawans updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        karyawans::destroy($id);
        return redirect('karyawans')->with('flash_message', 'karyawans deleted!');
    }
}
