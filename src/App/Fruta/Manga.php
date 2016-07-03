<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 02/07/16
 * Time: 20:41
 */

namespace App\Fruta;

use App\FrutaInterface;

/**
 * Class Manga
 * @package App\Fruta
 */
class Manga implements FrutaInterface
{
    /**
     * Retorna o suco da fruta
     * @return string
     */
    public function getSuco()
    {
        return 'Suco de manga';
    }
}