<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\booksModel;

class bookcontroller extends Controller
{
    function getBooks(){
        return response()->json([
            'success'=>true,
            'data'=>booksModel::all()
        ]);
        
    }

    function getBooksFromCategory($category){
       
        return response()->json([  
            'success'=>true,
            'data'=>DB::select('select * from books where category = :category',['category'=>$category])
        ]);
        
    }

    function getBooksFromEmail($email){
       
        return response()->json([  
            'success'=>true,
            'data'=>DB::select('select * from books where email = :email',['email'=>$email])
        ]);
        
    }

    public function uploadBooks(Request $req){

        $books = new booksModel;
            $books->title=$req->title;
            $books->email=$req->email;
            $books->category=$req->category;

            $file=$req->file('imgRes');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images',$filename);
            $books->imgRes="https://bookapp789.herokuapp.com/"."images/".$filename;
        
            $file=$req->file('pdfRes');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('pdfs',$filename);
            $books->pdfRes="https://bookapp789.herokuapp.com/"."pdfs/".$filename;

            $books->save();
            return view("/uploadbooks");

    }
}
