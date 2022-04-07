<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Config\ConfigService;
use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class ConfigController extends Controller
{
    protected $configService;

    public function create()
    {
        $company = DB::table('configs')->where('status', '1')->where('name', 'company')->first();
        $photo = DB::table('configs')->where('status', '1')->where('name', 'photo')->first();
        $email = DB::table('configs')->where('status', '1')->where('name', 'email')->first();
        $phone = DB::table('configs')->where('status', '1')->where('name', 'phone')->first();
        $address1 = DB::table('configs')->where('status', '1')->where('name', 'address1')->first();
        $address2 = DB::table('configs')->where('status', '1')->where('name', 'address2')->first();

        return view('admin.config.add', [
            'title' => 'Cấu hình hệ thống',
            'company' => $company,
            'photo' => $photo,
            'email' => $email,
            'phone' => $phone,
            'address1' => $address1,
            'address2' => $address2,
        ]);
    }

   public function update(Request $request)
      {
         if($request-> company == ''||$request-> email ==''||$request->phone ==''){
             return redirect('admin/configs/add')
                 ->with('error','Vui lòng điển vào các trường có dấu *');
         }

          Config::where('status', 1)->where('name', 'company')->update(['description' => $request->company]);
          Config::where('status', 1)->where('name', 'email')->update(['description' => $request->email]);
          Config::where('status', 1)->where('name', 'phone')->update(['description' => $request->phone]);
          Config::where('status', 1)->where('name', 'address1')->update(['description' => $request->address1]);
          Config::where('status', 1)->where('name', 'address2')->update(['description' => $request->address2]);
          Config::where('status', 1)->where('name', 'photo')->update(['description' => $request->photo]);

          return redirect('admin/configs/add')
              ->with('success','Cập Nhật Thành Công');
      }

}




