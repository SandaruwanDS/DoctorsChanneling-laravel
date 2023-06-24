<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\appo;


class DashboardController extends Controller
{
     public function generateReport($type)
    {
        $reportAppo = [];
        $reportTitle = '';

        switch ($type) {
            case 'all':
                $reportAppo = Appo::all();
                $reportTitle = 'All Appointments';
                break;
            case 'confirmed':
                $reportAppo = Appo::where('status', 1)->get();
                $reportTitle = 'Confirmed Appointments';
                break;
            case 'waiting':
                $reportAppo = Appo::where('status', 0)->get();
                $reportTitle = 'Waiting Appointments';
                break;
        }

        return view('appointment.report')->with('reportTitle', $reportTitle)->with('reportAppo', $reportAppo);
    }
}
