<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the Catagory.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new Catagory.
     */
    public function create()
    {
        return view('backend.catagory.create');
    }

    /**
     * Store a newly created Catagory in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'catagory_name'=>'required|unique:catagories,catagory_name',
            'catagory_slug'=>'unique:catagories,catagory_slug',
            'catagory_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $categorySlug = $request->filled('catagory_slug') ? Str::slug($request->catagory_slug): Str::slug($request->catagory_name);



        Catagory::create($request->only('catagory_name',  'catagory_image') + ['catagory_slug'=>$categorySlug,'created_at' => now()]);
        $cat_spc_show = Catagory::latest()->first();
return view('backend.catagory.show', compact('cat_spc_show'));

    }

    /**
     * Display the specified Catagory.
     */
    public function show(Catagory $catagory)
    {
        //
    }

    /**
     * Show the form for editing the specified Catagory.
     */
    public function edit(Catagory $catagory)
    {
        //
    }

    /**
     * Update the specified Catagory in storage.
     */
    public function update(Request $request, Catagory $catagory)
    {
        //
    }

    /**
     * Remove the specified Catagory from storage.
     */
    public function destroy(Catagory $catagory)
    {
        //
    }
}
