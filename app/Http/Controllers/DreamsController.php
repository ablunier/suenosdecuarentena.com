<?php

namespace App\Http\Controllers;

use App\Models\Dream;
use Illuminate\Http\Request;

class DreamsController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        $dreams = Dream::published()
            ->orderBy('dreamed_on', 'DESC')
            ->paginate();

        return view('web.pages.dreams.search', compact('dreams'));
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function random()
    {
        $randomDream = Dream::published()
            ->inRandomOrder()
            ->first();

        return redirect()->route('dreams.show', ['id' => $randomDream->id]);
    }

    public function show()
    {

    }

    public function create()
    {

    }

    public function post()
    {

    }
}
