<?php
class Product extends Eloquent{
	protected $guarded = array(
        'id'
    );

    protected $table = 'products';

    public $timestamps = false;

    public static function multi_menu(){
    	return DB::table('fs_category')
                    ->where('id_parent','NULL')
                    ->orderBy('Id')
                    ->take(12)
                    ->get();
    } 

    public static function get_all_product(){
        return DB::table('fs_product')
                    ->orderBy('Id','desc')
                    ->take(6)
                    ->get();
    }

    public static function get_men_product(){
        return DB::table('fs_product')
                    ->join('fs_category','fs_product.Id_category','=','fs_category.Id')
                    ->whereIn('fs_product.Id_category',function($query){
                        $query->select('Id')
                                    ->from('fs_category')
                                    ->where('Id_parent',4)
                                    ->get();
                    })
                    ->get();
    }

    public static function get_woman_product(){
        return DB::table('fs_product')
                    ->join('fs_category','fs_product.Id_category','=','fs_category.Id')
                    ->whereIn('fs_product.Id_category',function($query){
                        $query->select('Id')
                                            ->from('fs_category')
                                            ->where('Id_parent',1)
                                            ->get();
                    })
                    ->get();
    }

    public static function get_feature_product(){
        return DB::table('fs_product')->where('Feature',1)->get();
    }
}
