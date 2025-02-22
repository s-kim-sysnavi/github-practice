<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrGeneratorController extends Controller
{
    public function index()
    {
        return view('qr-generator');
    }

    public function generate(Request $request)
    {
        $data = $request->input('text');
        $result = QrCode::encoding('UTF-8')->size(200)->generate($data);

        return view('qr-generator', ['qrCode' => $result]);
    }
}
