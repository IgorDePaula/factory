<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 02/07/16
 * Time: 20:52
 */

namespace App\Factory;

use App\SucoInterface;
use App\Fruta\Maracuja;

/**
 * Class Maracuja
 * @package App\Factory
 */
class SucoMaracuja implements SucoInterface
{

    /**
     * @return FrutaInterface
     */
    public function fabricaSuco()
    {
        return new Maracuja();
    }
}