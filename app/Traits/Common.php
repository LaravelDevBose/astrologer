<?php

namespace App\Traits;
use Illuminate\Support\Facades\DB;

trait Common {

   public function headerData(){
       $zordic = DB::table('zordic')->get();
       $orderZodiac=array();
        foreach($zordic as $val)
        {
            $orderZodiac[$val->displayOrder]=$val;  
        }
      
       $data['zordic'] = $orderZodiac;
       $data['HoroscopeCat'] = DB::table('horoscopecategory')->where('is_default',1)->where('category_type',1)->first();
       $data['HoroscopereCategories'] = DB::table('horoscopecategory')->where('category_type',1)->get();
       $data['HoroscopereReadings'] = DB::table('horoscopecategory')->where('category_type',3)->get();
       $data['header'] = DB::table('settings')->first();
       return $data;
   }

   function createUrlSlug($urlString)
{
    $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $urlString);
    return $slug;
}

}
