<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logs;

class LogController extends Controller
{
    public function index()
    {
        $logs = Logs::all();

        $LogUnique = $logs->groupBy('Name'); //regroupement des memes noms

        $results = $LogUnique->map(function ($group) {

            return [
                'id' => $group[0]->id,
                'Name' => $group[0]->Name,
                'pin' => $group[0]->pin,
                'card_no' => $group->pluck('card_no')->unique()->implode(','),
                'time' => $group[0]->time,
                'event_point_name' => $group[0]->event_point_name
            ];
        })->values();

        return view('pages.logs', compact('results'));
    }

    public function filter(Request $req)
    {
        $query = $req->input('datequery');
        $loguniques = [];

        if ($query) {
            $logresults = Logs::where('time', 'LIKE', "%{$query}%")->get();

            $results = $logresults->groupBy('Name')->map(function ($group) {
                return [
                    'id' => $group[0]->id,
                    'Name' => $group[0]->Name,
                    'pin' => $group[0]->pin,
                    'card_no' => $group->pluck('card_no')->unique()->implode(','),
                    'time' => $group[0]->time,
                    'event_point_name' => $group[0]->event_point_name
                ];
            });
        }

        return view('pages.logs', compact('results'));
    }
}
