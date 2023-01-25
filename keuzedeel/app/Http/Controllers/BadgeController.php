<?php

namespace App\Http\Controllers;

use App\Models\Badge;
use App\Models\BadgesUser;
use Illuminate\Http\Request;

class BadgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = auth()->user()->id;

        $collectedBadges = BadgesUser::where('user_id', $userId)
            ->get('badge_id')
            ->toArray();

        // var_dump($collectedBadges[0]['badge_id']);
        $badges = Badge::whereIn('id', $collectedBadges)
            ->get();

        
        // $lockedBadgesArray = BadgesUser::whereNot('user_id', $userId)
        //     ->get('badge_id')
        //     ->toArray();


        $lockedBadges = Badge::whereNotIn('id', $collectedBadges)
        ->get();

        // var_dump($lockedBadges);

        return view('badges', ['badges' => $badges, 'lockedBadges' => $lockedBadges]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Badge  $badge
     * @return \Illuminate\Http\Response
     */
    public function show(Badge $badge)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Badge  $badge
     * @return \Illuminate\Http\Response
     */
    public function edit(Badge $badge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Badge  $badge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Badge $badge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Badge  $badge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Badge $badge)
    {
        //
    }
}