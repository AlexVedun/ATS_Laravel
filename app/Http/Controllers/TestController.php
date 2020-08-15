<?php

namespace App\Http\Controllers;

use App\Models\Test;

class TestController extends Controller
{
    public function getTest($alias)
    {
        $test = Test::whereAlias($alias)->first();

        return view('tests.test', [
            'title' => $test->name,
            'author' => $test->user->last_name.' '.$test->user->first_name,
            'questionsCount' => $test->questions->count(),
        ]);
    }
}
