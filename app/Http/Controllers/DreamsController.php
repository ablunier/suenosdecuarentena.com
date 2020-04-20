<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDreamRequest;
use App\Models\Dream;
use App\Models\Text;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DreamsController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        if (! $request->has('q') || trim($request->get('q')) === '') {
            return redirect()->route('homepage');
        }

        $dreams = Dream::search(trim($request->get('q')))
            ->where('published', true)
            ->orderBy('dreamed_on', 'DESC')
            ->paginate();

        $dreams->withQueryString();

        return view('web.pages.dreams.search-results', compact('dreams'));
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

    /**
     * @param string $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $dream = Dream::published()
            ->where('id', $id)
            ->firstOrFail();

        return view('web.pages.dreams.show', compact('dream'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $legalText = Text::where('key', 'legal-form')->firstOrFail();

        return view('web.pages.dreams.create', compact('legalText'));
    }

    /**
     * @param CreateDreamRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function post(CreateDreamRequest $request)
    {
        $dream = new Dream();
        $dream->owner_name = $request->get('owner_name');
        $dream->raw_location = $request->get('location');
        $dream->dreamed_on = Carbon::createFromFormat('Y-m-d', $request->get('date'));
        $dream->description = $request->get('description');
        $dream->reviewed = false;
        $dream->published = false;

        $dream->save();

        return redirect()->route('dreams.sent');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sent()
    {
        return view('web.pages.dreams.sent');
    }
}
