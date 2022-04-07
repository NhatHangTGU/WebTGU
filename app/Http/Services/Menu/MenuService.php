<?php


namespace App\Http\Services\Menu;


use App\Models\Menu;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\Types\Boolean;


class MenuService
{

    public function getParent($parent_id =1)
    {
        return Menu::where('parent_id',0)->get();
    }



    public function getAll()
    {
        return Menu::orderby('id','ASC')->paginate(10); #Phân trang

    }
 public function  create($request)
 {
     try
     {
        Menu::create([
            'name' => (string) $request->input('name'),
            'parent_id' => (string) $request->input('parent_id'),

           /* 'description' => (string) $request->input('description'),
            'content' => (string) $request->input('content'),*/
            'active' => (string) $request->input('active'),

        ]);
        Session::flash('success','Tạo Menu thành công');
     }catch (\Exception $err){
         Session::flash('error',$err->getMessage());
         return false;

     }
     return  true;
 }

 public function destroy($request)
 {
     $id = (int) $request->input('id');
     $menu = Menu::where('id',$request->input('id'))->first();
     if($menu){
        return Menu::where('id',$id)->orwhere('parent_id', $id)->delete();
     }
        return false;
 }

 public function update($request, $menu)
 {
    if($request->input('parent_id') != $menu->id){
        $menu->parent_id = (int)$request->input('parent_id');
    }

     try {
         $menu->fill($request->input());
         $menu->save();
         Session::flash('success', 'Cập nhật thành công');
     } catch (\Exception $err) {
         Session::flash('error', 'Có lỗi vui lòng thử lại');
         \Log::info($err->getMessage());
         return false;
     }
     return true;
 }
}
