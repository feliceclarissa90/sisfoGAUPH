<?php

namespace App\Http\Controllers;

use App\Models\pengajuanReplacementClass;
use Illuminate\Http\Request;
use PDF;

class laporanController extends Controller
{
    public function index(){

        $replacement = pengajuanReplacementClass::all();

        return view ('admin/laporan/replacementIndex', ['replacement'=>$replacement]);
    }

    public function cetak_pdf(){

        $replacement = pengajuanReplacementClass::all();
        
        $pdf = PDF::loadview('admin/laporan/replacementPrint',['replacement'=>$replacement]);

        return $pdf->download('pengajuan-replacement');
    }
}

?>
