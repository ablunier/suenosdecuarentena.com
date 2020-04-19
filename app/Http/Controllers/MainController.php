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
            ->paginate(5);

        return view('web.pages.homepage', compact('dreams'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        return view('web.pages.text');
    }

    public function legal()
    {

    }
}
