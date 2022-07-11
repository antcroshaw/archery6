<?php /** @noinspection PhpUnreachableStatementInspection */

namespace App\Http\Controllers;

use App\Models\Handicap;
use App\Models\Scores;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class HandicapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($categoryId) {
        return view('categories.show', ['handicaps' => Handicap::all()->where('categoryId', '===', $categoryId)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('handicaps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'categoryId' => 'required',
        ]);

        Handicap::create($formFields);

        return redirect('/categories/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Handicap  $handicap
     * @return \Illuminate\Http\Response
     */


         public function show(Handicap $handicap) {
             $scores = Scores::all()->where('handicapId', '===',$handicap->id);
             return view('handicaps.show', [
                 'handicap' => $handicap,
                 'scores' => $scores
             ]);}


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Handicap  $handicap
     * @return \Illuminate\Http\Response
     */
    public function edit(Handicap $handicap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Handicap  $handicap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Handicap $handicap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Handicap  $handicap
     * @return \Illuminate\Http\Response
     */
    public function destroy(Handicap $handicap)
    {
        $handicap->delete();
       return back();
    }
}
