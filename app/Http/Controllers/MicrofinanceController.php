<?php

namespace App\Http\Controllers;

use App\Models\Microfinance;
use Illuminate\Http\Request;

class MicrofinanceController extends Controller
{
    public function addMicrofinance()
    {
        return view('admin.add-microfinance');
    }

    public function mfiStore(Request $request)
    {
        $mfi = Microfinance::create([
            'mf_name' => $request->mfi_name,
            'address' => $request->mfi_address,
            'prefex' => "MFI",
        ]);

        if($mfi){
            dd("Submitted");
        } else{
            dd("Failed to insert the Microfinance");
        }
    }
}
