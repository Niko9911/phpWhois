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

if (!\defined('__DOMAINPEOPLE_HANDLER__')) {
    \define('__DOMAINPEOPLE_HANDLER__', 1);
}

require_once 'whois.parser.php';

class domainpeople_handler
{
    public function parse($data_str, $query)
    {
        $items = [
            'owner'           => 'Registrant Contact:',
            'admin'           => 'Administrative Contact:',
            'tech'            => 'Technical Contact:',
            'domain.name'     => 'Domain name:',
            'domain.sponsor'  => 'Registration Service Provided By:',
            'domain.referrer' => 'Contact:',
            'domain.nserver.' => 'Name Servers:',
            'domain.created'  => 'Creation date:',
            'domain.expires'  => 'Expiration date:',
//            'domain.changed' => 'Record last updated on',
            'domain.status' => 'Status:',
        ];

        $r = easy_parser($data_str, $items, 'dmy', [], false, true);
        if (isset($r['domain']['sponsor']) && \is_array($r['domain']['sponsor'])) {
            $r['domain']['sponsor'] = $r['domain']['sponsor'][0];
        }

        return $r;
    }
}
