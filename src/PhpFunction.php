<?php
/**
 * Created by PhpStorm.
 * User: wilder15
 * Date: 28/11/17
 * Time: 09:57
 */

namespace Wcs;


class PhpFunction
{
    public function RewritingStrSplit(string $str, int $step): array
    {
        $tab = [];
        for ($i = 0; $i < strlen($str); $i+=$step) {
            $offset = '';
            for ($j = $i; $j < $i+$step; $j++) {
                $offset .= $str[$j];
            }
            $tab[] = $offset;

        }

        return $tab;

    }


}

