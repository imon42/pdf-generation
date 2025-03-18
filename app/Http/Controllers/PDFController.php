<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Dompdf\Options;

class PDFController extends Controller
{
    //generate pdf;
    public function generatePDF()
    {
        $data = ['title' => "this is an example text"];

        // $dompdf = new \Dompdf\Dompdf(['enable_remote' => true]);
        // $dompdf->loadHtml(view('pdf', $data));
        // $dompdf->setPaper('A4', 'portrait');
        // $dompdf->render();
        // return $dompdf->stream('DomPDFOut.pdf', array("Attachment" => false));

        $pdf = Pdf::loadView('pdf', $data);
        // return $;
        return $pdf->download('image.pdf');
    }

}
