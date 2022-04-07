<?php


namespace App\Helpers;


use Illuminate\Support\Str;


class Helper
{
    public static function menu($menus, $parent_id=0, $char='')
    {
        $html = '';
    foreach ($menus as $key =>$menu){
        if($menu ->parent_id == $parent_id){
            $html .='
            <tr>

            <td>'.$menu->id.'</td>
            <td>'.$char.$menu->name.'</td>
              <td>' . self::active($menu->active) . '</td>
             <td>'.$menu->updated_at.'</td>
             <td>
                <a class="btn btn-primary btn-sm"  href="/admin/menus/edit/'.$menu->id.'">
                    <i class="fas fa-edit"></i>
                </a>
            </td>
            <td>
                <a href="#" class="btn btn-danger btn-sm"
                    onclick="removeRow(' . $menu->id . ', \'/admin/menus/destroy\')">
                    <i class="fas fa-trash-alt"></i>
                </a>
              </td>
             </tr>
            ';

            unset($menus[$key]);

            $html .= self::menu($menus, $menu->id, '|--');
        }
    }
    return $html;
    }

    public static function active($active = 0): string
    {
        return $active == 0 ? '<span class="btn btn-danger btn-xs">NO</span>'
            : '<span class="btn btn-success btn-xs">YES</span>';
    }

    public static function user($user =0):string
    {
        return $user== 0 ? '<span class="btn btn-danger btn-xs">Admin</span>'
            : '<span class="btn btn-success btn-xs">User</span>';
    }
}
