<?php

namespace App\Http\Controllers;
use App\Models\Type;
use App\Models\Book;
use App\Models\Price;
use Illuminate\Http\Request;
use DB;
class TypeController extends Controller
{
    public function view(){
        return view('book.bookstore');
    }
    public function index(){


         $bookstores = Type::with('prices')
         ->select('Name', 'price_id')
         ->groupBy('Name', 'price_id')
         ->get();
        return view('book.bookstore')->with('bookstores', $bookstores);

   }

   public function search(){

        $search_text = $_GET['query'];

        $bookstores = Type::where('BooksName', 'LIKE', '%'.$search_text.'%')
    //    ->orWhere('category', 'LIKE', '%'.$search_text.'%')
        ->get();
         return view('book.search', compact('bookstores'));

   }

   public function show(Request $request){

     $name = $request->boooks;
     $bookstores = Type::with('boooks')->where('Name', $name)->get();
     return view('book.store')->with('bookstores', $bookstores);
}
}
