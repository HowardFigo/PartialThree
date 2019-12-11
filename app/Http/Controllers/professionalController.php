<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Professional;
use App\User;
use App\Review;
class professionalController extends Controller
{
    public function professional () {

        $professionals = Professional::all();

		return view('listProfessional', compact('professionals'));
    }
    public function reviewRating(){
        $reviews = Review::all();
       
        return view('listReview',compact('reviews'));
    }

    public function ReviewComment(){
        $reviews = Review::all();
       
        return view('listService',compact('reviews'));
    }
    
}
