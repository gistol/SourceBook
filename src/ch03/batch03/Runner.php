<?php
namespace popp\ch03\batch03;

include "C:/USR/www/SourceBook/vendor/autoload.php";

use popp\ch03\batch03\ShopProduct;

class Runner
{
    public static function run1()
    {
/* listing 03.11 */
        $product1 = new ShopProduct();
        $product1->title = "My Antonia";
        $product1->producerMainName  = "Cather";
        $product1->producerFirstName = "Willa";
        $product1->price = 5.99;

        print "author: {$product1->getProducer()}\n";
/* /listing 03.11 */
    }
}

Runner::run1();
