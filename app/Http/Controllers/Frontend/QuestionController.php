<?php

namespace App\Http\Controllers\Frontend;
use Response;


use App\Http\Controllers\Controller;


use App\Models\Freq_question;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class QuestionController extends Controller
{

    public function index()
    {
        $freq_question = Freq_question::all();
        return view('frontend.faq', compact('freq_question'));

    }





}
