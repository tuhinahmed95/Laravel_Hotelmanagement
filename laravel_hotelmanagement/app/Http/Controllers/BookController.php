<?php

namespace App\Http\Controllers;

use App\Models\book;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StorybookRequest;
use App\Http\Requests\UpdatebookRequest;


class BookController extends Controller
{
    public function booking(){
        return view('master-pages.book');
    }
  
    public function booked(Request $request){
      
        $book = new book();
        $book->name = $request->name;
        $book->email = $request->email;
        $book->checkin = Carbon::createFromFormat('m/d/Y h:i A', $request->checkin)->format('Y-m-d H:i:s');
        $book->checkout = Carbon::createFromFormat('m/d/Y h:i A', $request->checkout)->format('Y-m-d H:i:s');
        $book->adult = $request->adult;
        $book->children = $request->children;
        $book->room = $request->room;
        $book->save();
        return Redirect('/home');

    }

    public function showtable()
    {
        $books = book::all();
        return view('admin-pages.booked', compact('books'));
    }


    public function editbooked($book_id){
        $book = book::findOrfail($book_id);
        return view('admin-pages.bokedt', ['book' =>$book]);
    }


    public function ediet($book_id, UpdatebookRequest $request)
    {
        $book = Book::findOrFail($book_id);
    
        // Update the fields
        $book->name = $request->name;
        $book->email = $request->email;
        $book->checkin = Carbon::createFromFormat('Y-m-d', $request->checkin)->format('Y-m-d');
        $book->checkout = Carbon::createFromFormat('Y-m-d', $request->checkout)->format('Y-m-d');
        $book->adult = $request->adult;
        $book->children = $request->children;
        $book->room = $request->room;
    
        // Save the updated booking
        $book->save();
    
        // Redirect to the booked list page
        return redirect('/booked');
    }

    public function deleting( $book_id)
    {
        $book = book::findOrfail( $book_id);
        $book->delete();
        return Redirect('/booked');
    }
}
