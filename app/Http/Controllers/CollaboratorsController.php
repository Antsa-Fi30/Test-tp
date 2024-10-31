<?php

namespace App\Http\Controllers;

use App\Models\Logs;
use Illuminate\Http\Request;

class CollaboratorsController extends Controller
{
    public function index()
    {
        $logs = Logs::all();

        $collaborators = $logs->groupBy('Name'); //regroupement des memes noms

        $loguniques = $collaborators->map(function ($group) {
            return [
                'id' => $group[0]->id,
                'Name' => $group[0]->Name,
                'card_no' => $group->pluck('card_no')->unique()->implode(',')
            ];
        })->values();


        return view('pages.index', ['loguniques' => $loguniques]);
    }
}
