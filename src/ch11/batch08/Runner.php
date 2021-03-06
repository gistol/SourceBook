<?php
declare(strict_types = 1);

namespace popp\ch11\batch08;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {
/* listing 11.43 */
        $main_army = new Army();
        $main_army->addUnit(new Archer());
        $main_army->addUnit(new LaserCanonUnit());
        $main_army->addUnit(new Cavalry());

        $textdump = new TextDumpArmyVisitor();
        $main_army->accept($textdump);
        print $textdump->getText();
/* /listing 11.43 */
    }

    public static function run2()
    {
/* listing 11.45 */
        $main_army = new Army();
        $main_army->addUnit(new Archer());
        $main_army->addUnit(new LaserCanonUnit());
        $main_army->addUnit(new Cavalry());

        $taxcollector = new TaxCollectionVisitor();
        $main_army->accept($taxcollector);
        print $taxcollector->getReport();
        print "TOTAL: ";
        print $taxcollector->getTax() . "\n";
/* /listing 11.45 */
    }
}

Runner::run2();