<?php

namespace App\Http\Controllers;

use App\Models\Microfinance;
use App\Models\SystemAdmin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function addMfiAdmin()
    {
        return view('admin.add-mfi-admin', ['mfis'=>Microfinance::get()]);
    }

    public function mfiAdminStore(Request $request)
    {
        $mfiAdmin = SystemAdmin::create([
            'microfinance_id' => $request->mfi,
            'name' => $request->admin_name,
            'phone_no' => $request->phone_no,
        ]);

        if($mfiAdmin){
            dd("Addedd Successfully!");
        } else{
            dd("Failed To add Mf Admin");
        }
    }

    public function addMember()
    {
        return view('admin.add-member');
    }
}
