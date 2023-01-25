<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use App\Models\Badge;
use App\Models\BadgesUser;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $columns = Schema::getColumnListing('datasets');

        
        $userId = auth()->user()->id ?? 0;

        $collectedBadges = BadgesUser::where('user_id', $userId)
            ->get('badge_id')
            ->toArray();

        $badges = Badge::whereIn('id', $collectedBadges)
            ->get();

        


        $lockedBadges = Badge::whereNotIn('id', $collectedBadges)
        ->get();



        
        return view('home', ['colomns' => $columns,'badges' => $badges, 'lockedBadges' => $lockedBadges]);
    }
}