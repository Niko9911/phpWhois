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

if (!\defined('__TMAGNIC_HANDLER__')) {
    \define('__TMAGNIC_HANDLER__', 1);
}

require_once 'whois.parser.php';

class tmagnic_handler
{
    public function parse($data_str, $query)
    {
        $items = [
            'owner'           => 'Owner Contact:',
            'admin'           => 'Admin Contact',
            'tech'            => 'Technical Contact',
            'domain.name'     => 'Domain Name:',
            'domain.nserver.' => 'Domain servers in listed order:',
            'domain.expires'  => 'Record expires on: ',
            'domain.changed'  => 'Record last updated on: ',
            ''                => 'Zone Contact',
            '#'               => 'Punycode Name:',
        ];

        return easy_parser($data_str, $items, 'ymd', [], false, true);
    }
}
