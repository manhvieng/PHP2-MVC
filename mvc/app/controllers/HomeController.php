<?php
namespace App\Controllers;
use App\Models\Product;

class HomeController{
    
    public function index(){
        $products = Product::all();
        // header('location: /');
        // die;
        include_once './app/views/homepage.php';
        
    }

    public function detail(){
        return "Trang chi tiết sản phẩm";
    }
    public function contact(){
        return "Trang liên hệ";
    }
}

?>