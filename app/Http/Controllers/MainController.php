<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class MainController extends Controller{

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function review()
    {
        $reviews = Contact::all();
        return view('review',[
            'reviews'=>$reviews
        ] );
    }

    //TODO переименовать review_check на reviewCheck
    public function review_check(Request $request)
    {
        $rules = Contact::$rules;
        $valid = $request->validate($rules);
        $review = new Contact();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('review');
    }
}

