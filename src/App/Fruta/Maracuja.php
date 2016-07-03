<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 02/07/16
 * Time: 20:44
 */

namespace App\Fruta;

use App\FrutaInterface;

/**
 * Class Maracuja
 * @package App\Fruta
 */
class Maracuja implements FrutaInterface
{
    /**
     * Retorna o suco da fruta
     * @return String
     */
    public function getSuco()
    {
        return 'Suco de maracuja';
    }
}