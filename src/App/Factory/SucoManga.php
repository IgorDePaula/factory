<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 02/07/16
 * Time: 20:48
 */

namespace App\Factory;

use App\SucoInterface;
use App\Fruta\Manga;

/**
 * Class SucoManga
 * @package App\Factory
 */
class SucoManga implements SucoInterface
{

    /**
     * Fabrica o suco de manga
     * @return Fruta
     */
    public function fabricaSuco()
    {
        return new Manga();
    }
}