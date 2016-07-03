<?php

/**
 * Created by PhpStorm.
 * User: igor
 * Date: 02/07/16
 * Time: 20:40
 */

namespace App;

/**
 * Interface FabricaInterface
 * @package App
 */
interface SucoInterface
{

    /**
     * Fabrica o suco de uma fruta
     * @return FrutaInterface
     */
    public function fabricaSuco();
}