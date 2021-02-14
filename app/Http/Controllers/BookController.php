<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Book;
use App\Models\Cart;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PDO;
use Session;

class BookController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){


         $bookShows = Book::orderBy('Name')->get();

         return view('name.index')->with('bookShows',$bookShows);
    }

    public function search(){

        $search_text = $_GET['query'];

        $bookShows = Book::where('BooksName', 'LIKE', '%'.$search_text.'%')
    //    ->orWhere('category', 'LIKE', '%'.$search_text.'%')
        ->get();
         return view('name.search', compact('bookShows'));

   }

    public function cart(){

        return view('cart');
    }





    public function addToCart(Book $book){


       $cart = session()->get('cart');

        if(!$cart){
            $cart = [
              $book->id => [

                  'name' => $book->ame,
                  'quantity' => 1,
                  'price' => $book->price,
                  'image' => $book->Images,

              ]
            ];

            session()->put('cart', $cart);
            return redirect()->route('cart')->with('success',"Added to Cart");

        }
        if(isset($cart[$book->id])){
          $cart[$book->id]['quantity']++;
          session()->put('cart', $cart);

          return redirect()->route('cart')->with('success',"Added to Cart");

        }
        $cart[$book->id] = [

            'name' => $book->name,
            'quantity' => 1,
            'price' => $book->price,
            'image' => $book->Images,

        ];

        session()->put('cart', $cart);
        return redirect()->route('cart')->with('success',"Added to Cart");
    }

      public function delete($id){

        $cart = session()->get('cart');

        if (isset($cart[$id])){
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->back()->with('remove', "Removed from Cart");







      }












}
