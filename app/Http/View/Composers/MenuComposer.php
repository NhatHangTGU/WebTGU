<?php


namespace App\Http\View\Composers;

use App\Models\Config;
use App\Models\Menu;
use Illuminate\View\View;
class MenuComposer
{

    protected $users;


    public function __construct()
    {

    }

    public function compose(View $view)
    {
        $menus = Menu::select('id', 'name', 'parent_id')->where('active', 1)->orderByDesc('id')->get();
        $view->with('menus', $menus);

        $company= Config::select('description')->where('name','company')->first();
        $view->with('company',$company);

        $logo = Config::select('description')->where('name','photo')->first();
        $view->with('photo',$logo);

        $phone = Config::select('description')->where('name','phone')->first();
        $view->with('phone',$phone);

        $email= Config::select('description')->where('name','email')->first();
        $view->with('email',$email);

        $address1= Config::select('description')->where('name','address1')->first();
        $view->with('address1',$address1);

        $address2= Config::select('description')->where('name','address2')->first();
        $view->with('address2',$address2);

    }
}
