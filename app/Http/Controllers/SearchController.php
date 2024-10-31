<?php

namespace App\Http\Controllers;

use App\Models\Logs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('searchquery');
        $loguniques = [];

        if ($query) {
            $logresults = Logs::where('Name', 'LIKE', "%{$query}%")
                ->orWhere('id', 'LIKE', "%{$query}%")
                ->orWhere('card_no', 'LIKE', "%{$query}%")
                ->get();

            $loguniques = $logresults->groupBy('Name')->map(function ($group) {
                return [
                    'id' => $group[0]->id,
                    'Name' => $group[0]->Name,
                    'card_no' => $group->pluck('card_no')->unique()->implode(',')
                ];
            });
        }

        return view('pages.index', compact('loguniques'));
    }

    public function filter(Request $req)
    {
        $query = DB::table('log_portiques');
        $date = $req->input('date');

        if ($date) {
            $query->whereDate('time', $date);
        }

        $results = $query->get();

        return view('pages.logs', compact('results'));
    }
}
