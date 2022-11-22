<?php

namespace App\Http\Controllers;

use App\Models\pengajuanReplacementClass;
use Illuminate\Http\Request;
use PDF;

class laporanController extends Controller
{
    public function show($id){

        $replacement = pengajuanReplacementClass::findOrFail($id);

        return view ('admin.laporan.replacementIndex', compact('replacement'));
    }

    public function pdf($id){

        $replacement = pengajuanReplacementClass::findOrFail($id);
        
        $pdf = PDF::loadview('admin.laporan.replacementPrint', compact('replacement'));

        return $pdf->download('pengajuan-replacement');
    }
}

?>
