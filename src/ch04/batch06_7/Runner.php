<?php
declare(strict_types=1);

namespace popp\ch04\batch06_7;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {
/* listing 04.38 */
        $u = new UtilityService();
        print $u->calculateTax(100) . "\n";
/* /listing 04.38 */
    }
}

Runner::run();