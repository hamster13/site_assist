<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Session;

use DB;
use CRUDBooster;

class pdf_delivery_asset extends Controller
{
    //

    public function downloadPDF($id){
      $user = DB::find($id);

      $pdf = PDF::loadView('template_pdf.delivery_asset.pdf_delivery_asset', compact('user'));
      return $pdf->download('invoice.pdf');

    }

    public function index()
    {
    	
    }
}
