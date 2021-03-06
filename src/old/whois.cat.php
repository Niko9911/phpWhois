<?php

declare(strict_types=1);

/**
 *
 * NOTICE OF LICENSE
 *
 * This source file is released under GNU General Public License v2.
 *
 * @copyright 1999-2005 easyDNS Technologies Inc. & Mark Jeftovic
 * @copyright 2005-2014 David Saez
 * @copyright 2014-2019 Dmitry Lukashin
 * @copyright 2019-2020 Niko Granö (https://granö.fi)
 *
 */

if (!\defined('__CAT_HANDLER__')) {
    \define('__CAT_HANDLER__', 1);
}

require_once 'whois.parser.php';

class cat_handler
{
    public function parse($data_str, $query)
    {
        $r = [];
        $r['regrinfo'] = generic_parser_b($data_str['rawdata']);

        if (!isset($r['regrinfo']['domain']['name'])) {
            $r['regrinfo']['registered'] = 'no';
        }

        $r['regyinfo']['referrer'] = 'http://www.domini.cat/';
        $r['regyinfo']['registrar'] = 'Domini punt CAT';

        return $r;
    }
}
