<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\batiks;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class batiksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $batiks = batiks::all();
        return view ('batiks.index')->with('batiks',$batiks);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('batiks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        batiks::create($input);
        return redirect('batiks')->with('flash_message', 'batiks Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $batiks = batiks::find($id);
        return view('batiks.show')->with('batiks', $batiks);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $batiks = batiks::find($id);
        return view('batiks.edit')->with('batiks', $batiks);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $batiks = batiks::find($id);
        $input = $request->all();
        $batiks->update($input);
        return redirect('batiks')->with('flash_message', 'batiks updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        batiks::destroy($id);
        return redirect('batiks')->with('flash_message', 'batiks deleted!');
    }
}
