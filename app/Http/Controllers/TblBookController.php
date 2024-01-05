<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Mockery\Undefined;
use App\Models\TblBook;
use App\Models\Publisher;
use App\Models\ContentOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class TblBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $booksData = TblBook::latest()->paginate(8);
        return view('book.index', compact('booksData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $co_id = 0;


        $co_owners = ContentOwner::all();
        $publishers = Publisher::all();

        foreach ($co_owners as $co_o) {
            if ($co_o->name === $user->name) {
                $co_id = $co_o->id;
                break;
            }
        }
        // Perform actions based on $co_id or use it in your view

        return view('book.create', compact("co_id", "publishers"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $unique_book_ids = TblBook::pluck("book_uniq_id");
        $lastUBI = $unique_book_ids->last(); // Retrieve the last unique book ID

        // Assuming the IDs are numeric strings like "BOK0005"
        // Extract the numeric part of the ID
        $lastNumericPart = (int)substr($lastUBI, 3); // Convert the numeric part to an integer

        $newNumericPart = $lastNumericPart + 1; // Increment the numeric part
        $newUBI = 'BOK' . str_pad($newNumericPart, strlen($lastNumericPart), '0', STR_PAD_LEFT); // Create the new unique ID


        $request["book_uniq_id"] = $newUBI;
        $validatedData = $request->validate([
            'co_id' => 'required|integer',
            'publisher_id' => 'required|integer',
            'book_uniq_id' => 'required|unique:tbl_book,book_uniq_id',
            'book_name' => 'required',
            'cover_photo' => "required|mimes:jpg,bmp,png,webp,jpeg",
            'price' => 'required|integer',
            // Add validation rules for other columns as needed
        ]);
        //dd($validatedData);

        // image upload
        $file = $request->file('cover_photo');
        $file_name = uniqid() . $file->getClientOriginalName();
        $file->move(public_path("/images"), $file_name);

        $book = TblBook::create([
            'co_id' => $request->co_id,
            'publisher_id' => $request->publisher_id,
            'book_uniq_id' => $newUBI,
            'book_name' => $request->book_name,
            'cover_photo' => $file_name,
            'price' => $request->price,
            'created_timetick' => Carbon::now(),
        ]);

        return redirect()->route('books.index')->with(["success" => 'Your book is successfully created.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = TblBook::find($id);
        $publishers = Publisher::all();
        $co_owners = ContentOwner::all();
        return view('book.edit', compact("book", "publishers", "co_owners"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book   = TblBook::find($id);
        $validatedData = $request->validate([
            'co_id' => 'required|integer',
            'publisher_id' => 'required|integer',
            'book_uniq_id' => 'required',
            'book_name' => 'required',
            'cover_photo' => "mimes:jpg,bmp,png,webp,jpeg",
            'price' => 'required|integer',
            'created_timetick' => 'required',
            // Add validation rules for other columns as needed
        ]);

        // if user choose file
        if ($request->file("cover_photo")) {
            File::delete(public_path("/images/" . $book->cover_photo));
            $file = $request->file("cover_photo");
            $file_name = uniqid() . $file->getClientOriginalName();
            $file->move(public_path("/images"), $file_name);
        } else {
            $file_name = $book->cover_photo;
        }
        TblBook::where("id", $book->id)->update([
            'co_id' => $request->co_id,
            'publisher_id' => $request->publisher_id,
            'book_uniq_id' => $request->book_uniq_id,
            'book_name' => $request->book_name,
            'cover_photo' => $file_name,
            'price' => $request->price,
            'created_timetick' => $request->created_timetick,

        ]);
        return redirect()->route('books.index')->with(["success" => 'Your book is successfully updated.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = TblBook::find($id);
        TblBook::where("id", $id)->delete();
        File::delete(public_path("/images/" . $book->cover_photo));
        return redirect()->route('books.index')->with("success", "Product deleted success");
    }
}
