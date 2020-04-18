<?php

namespace App\Http\Controllers;

use App\Models\Dream;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function homepage()
    {
        $dreams = Dream::published()
            ->orderBy('dreamed_on', 'DESC')
            ->paginate();

        return view('web.pages.homepage', compact('dreams'));
    }

    public function about()
    {

    }

    public function colophon()
    {

    }
}
