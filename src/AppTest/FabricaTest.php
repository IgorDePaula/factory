<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 02/07/16
 * Time: 20:57
 */

namespace AppTest;

use App\Fruta\Maracuja;
use App\Fruta\Manga;
use App\Factory\SucoManga;
use App\Factory\SucoMaracuja;

class FabricaTest extends \PHPUnit_Framework_TestCase
{
    public function setup()
    {

    }

    public function tearDown()
    {

    }

    public function testFabricaSucoManga()
    {
        $fsman = new SucoManga();
        $this->assertEquals('App\Fruta\Manga', get_class($fsman->fabricaSuco()));
        $suco = $fsman->fabricaSuco();
        $this->assertEquals('Suco de manga', $suco->getSuco());
    }

    public function testFabricaSucoMaracuja()
    {
        $fsmara = new SucoMaracuja();
        $this->assertEquals('App\Fruta\Maracuja', get_class($fsmara->fabricaSuco()));
        $suco = $fsmara->fabricaSuco();
        $this->assertEquals('Suco de maracuja', $suco->getSuco());
    }
}
