<?php
namespace Superstarzmx\Stardemo;
use DB;

class Stardemo{
    
	static public function info($v){
		DB::table('info')->insert(['info'=>$v,'created_at'=>date("Y-m-d H:i:s")]);
	}
    public static function ceshi()
    {
        echo 'this is a log. ';
    }

}




?>