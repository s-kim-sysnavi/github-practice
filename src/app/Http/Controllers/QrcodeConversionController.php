<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrcodeConversionController extends Controller

{

    public function input()
    {
        return view("input");
    }

    public function show(Request $request)
    {
        $url = $request->input('url');
        $qrcode = QrCode::size(200)->generate($url);
        return view("show", ["url" => $url,"qrcode"=> $qrcode]);
        
    }
}
