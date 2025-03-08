<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin_panel_setting;
use App\Models\Admin;
use Illuminate\Http\Request;

class Admin_panel_settingsController extends Controller
{
  public function index(){


    $data = Admin_panel_setting::where('com_code', auth()->user()->com_code)->first();
    if(!empty($data)){
        if($data ['update_by']>0 and $data['update_by']!=null){
            $data['updated_by_admin']=Admin::where('id' , $data ['update_by'])->value('name');
        }
    }

    return view('admin.admin_panel_settings.index' , compact('data'));
  }
}
