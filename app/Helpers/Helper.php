<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;
use DB;

class Helper
{
    public static function createUrlSlug($urlString)
    {
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $urlString);
        return $slug;
    }
    public static function cartItemCount($user_id)
    {
        $row = DB::table('user_cart')->where('user_id', $user_id)->count();
        if ($row) {
            return $row; // Access lang property only if $row is not null
        } else {
            return '';
        }
    }
    
}
