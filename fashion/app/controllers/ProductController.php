<?php
class ProductController extends BaseController{


	public function index(){
		$menus = Product::multi_menu();
		$all_products = Product::get_all_product();
		$features = Product::get_feature_product();
		$men_products = Product::get_men_product();
		$woman_products = Product::get_woman_product();
		return View::make('index')
		->with('menus',$menus)
		->with('all_products',$all_products)
		->with('features',$features)
		->with('men_products',$men_products)
		->with('woman_products',$woman_products);
	}

}
?>