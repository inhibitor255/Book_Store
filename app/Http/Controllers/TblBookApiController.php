<?php

namespace App\Http\Controllers;

use App\Models\TblBook;
use Illuminate\Http\Request;

class TblBookApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = TblBook::all();
        return response()->json(["success" => true, "data" => $books]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TblBook $tblBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TblBook $tblBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TblBook $tblBook)
    {
        //
    }
}
