<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Technician;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index () {
        $technicians = Technician::all();
        return view('reports.index', compact('technicians'));
    }

    /**
     * Reporte que genera el listado de todos los técnicos
     */
    public function export_technicians () {
        $technicians = Technician::all();
        $data = [
            'technicians' => $technicians
        ];

        $pdf = Pdf::loadView('reports.export_technicians', $data)
                ->setPaper('letter', 'portrait')
                ->setOptions(['DefaultFont'=>'sans-serif', 'isRemoteEnabled'=>true
            ]); // Landscape: horizontal

        return $pdf->download('technicians.pdf');
    }



    /**
     * Reporte que genera el listado de un técnico
     */
    public function export_activities_by_technician (Request $request) {
        
        $activities = Activity::where('technician_id', $request['technician_id'])->get();
        
        $data = array(
            'activities' => $activities
        );

        $pdf = Pdf::loadView('reports.export_activities_by_technician', $data)
                ->setPaper('letter', 'portrait')
                ->setOptions(['DefaultFont'=>'sans-serif', 'isRemoteEnabled'=>true
            ]); // Landscape: horizontal

        return $pdf->download('ActivitiesByTechnician-'.$request['technician_id'].'.pdf');
    }
}