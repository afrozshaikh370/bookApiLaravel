<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\booksModel;

class bookcontroller extends Controller
{
    function getBooks(){
        return response()->json([
            'success'=>true,
            'data'=>booksModel::all()
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
                $books->imgRes="images/".$filename;
            $file=$req->file('pdfRes');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('pdfs',$filename);
            $books->pdfRes="pdfs/".$filename;
        
            $books->save();
            return view("/uploadbooks");

    }
}
