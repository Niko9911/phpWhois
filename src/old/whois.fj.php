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

require_once 'whois.parser.php';

if (!\defined('__FJ_HANDLER__')) {
    \define('__FJ_HANDLER__', 1);
}

class fj_handler
{
    public function parse($data_str, $query)
    {
        $items = [
            'owner'          => 'Registrant:',
            'domain.status'  => 'Status:',
            'domain.expires' => 'Expires:',
            'domain.nserver' => 'Domain servers:',
        ];

        $r = [];
        $r['regrinfo'] = get_blocks($data_str['rawdata'], $items);

        if (!empty($r['regrinfo']['domain']['status'])) {
            $r['regrinfo'] = get_contacts($r['regrinfo']);

            \date_default_timezone_set('Pacific/Fiji');

            if (isset($r['regrinfo']['domain']['expires'])) {
                $r['regrinfo']['domain']['expires'] = \strftime('%Y-%m-%d', \strtotime($r['regrinfo']['domain']['expires']));
            }

            $r['regrinfo']['registered'] = 'yes';
        } else {
            $r['regrinfo']['registered'] = 'no';
        }

        $r['regyinfo'] = [
            'referrer'  => 'http://www.domains.fj',
            'registrar' => 'FJ Domain Name Registry',
        ];

        return $r;
    }
}
