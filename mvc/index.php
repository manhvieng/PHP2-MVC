<?php
session_start();
//tôi muốn: tất cả cacs request tới thư mục mvc phải bắt buộc đi qua file index.php
//thu thập các url gửi lên project
$url = isset($_GET['url']) ? $_GET['url'] : "/";

require_once './app/controllers/HomeController.php';
require_once './app/controllers/ProductController.php';

require_once './app/models/Category.php';
require_once './app/models/BaseModel.php';
require_once './app/models/Product.php';

use App\Controllers\HomeController;
use App\Controllers\ProductController;


switch ($url) {
    case '/':
        $ctr = new HomeController();
        echo $ctr->index();
    break;
    
    case 'detail':
        $ctr = new HomeController();
        echo $ctr->detail();
    break;
    
    case 'contact':
        $ctr = new HomeController();
        echo $ctr->contact();
    break;

    case 'add-product':
        $ctr = new ProductController();
        echo $ctr->addForm();
    break;
    default:
        echo "đường dẫn ko tồn tại";
        break;
}


?>