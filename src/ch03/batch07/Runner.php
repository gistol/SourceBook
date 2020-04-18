<?php
namespace popp\ch03\batch07;

include "C:/USR/www/SourceBook/vendor/autoload.php";

use popp\ch03\batch04\ShopProduct;
use popp\ch03\batch07\ShopProductWriter;

class Runner
{
    public static function run1()
    {
/* listing 03.19 */
        $product1 = new ShopProduct("My Antonia", "Willa", "Cather", 5.99);
        $writer = new ShopProductWriter();
        $writer->write($product1);
/* /listing 03.19 */
    }
}

Runner::run1();