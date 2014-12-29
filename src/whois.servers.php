<?php

/*
  Whois.php        PHP classes to conduct whois queries

  Copyright (C)1999,2005 easyDNS Technologies Inc. & Mark Jeftovic

  Maintained by David Saez

  For the most recent version of this package visit:

  http://www.phpwhois.org

  This program is free software; you can redistribute it and/or
  modify it under the terms of the GNU General Public License
  as published by the Free Software Foundation; either version 2
  of the License, or (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

/* servers.whois	v18   Markus Welters	2004/06/25 */
/* servers.whois	v17	ross golder	2003/02/09 */
/* servers.whois	v16	mark jeftovic	2001/02/28 */

$this->DATA_VERSION = '19';

$this->DATA = array(
    'bz'       => 'gtld',
    'com'      => 'gtld',
    'jobs'     => 'gtld',
    'li'       => 'ch',
    'net'      => 'gtld',
    'su'       => 'ru',
    'tv'       => 'gtld',
    'za.org'   => 'zanet',
    'za.net'   => 'zanet',
    // Punicode
    'xn--p1ai' => 'ru',
);

/* Non UTF-8 servers */

$this->NON_UTF8 = array(
    'br.whois-servers.net'  => 1,
    'ca.whois-servers.net'  => 1,
    'cl.whois-servers.net'  => 1,
    'hu.whois-servers.net'  => 1,
    'is.whois-servers.net'  => 1,
    'pt.whois-servers.net'  => 1,
    'whois.interdomain.net' => 1,
    'whois.lacnic.net'      => 1,
    'whois.nicline.com'     => 1,
    'whois.ripe.net'        => 1,
);

/* If whois Server needs any parameters, enter it here */

$this->WHOIS_PARAM = array(
    'com.whois-servers.net' => 'domain =$',
    'net.whois-servers.net' => 'domain =$',
    'de.whois-servers.net'  => '-T dn,ace $',
    'jp.whois-servers.net'  => 'DOM $/e',
);

/* TLD's that have special whois servers or that can only be reached via HTTP */

$this->WHOIS_SPECIAL = array(
    'ac'                     => 'whois.nic.ac',
    'academy'                => 'whois.donuts.co',
    'accountants'            => 'whois.donuts.co',
    'active'                 => 'whois.afilias-srs.net',
    'actor'                  => 'whois.unitedtld.com',
    'ad'                     => '',
    'ae'                     => 'whois.aeda.net.ae',
    'aero'                   => 'whois.aero',
    'af'                     => 'whois.nic.af',
    'ag'                     => 'whois.nic.ag',
    'agency'                 => 'whois.donuts.co',
    'ai'                     => 'whois.ai',
    'airforce'               => 'whois.unitedtld.com',
    'al'                     => '',
    'am'                     => 'whois.amnic.net',
    'archi'                  => 'whois.ksregistry.net',
    'army'                   => 'whois.rightside.co',
    'arpa'                   => 'whois.iana.org',
    'as'                     => 'whois.nic.as',
    'asia'                   => 'whois.nic.asia',
    'associates'             => 'whois.donuts.co',
    'at'                     => 'whois.nic.at',
    'attorney'               => 'whois.rightside.co',
    'au'                     => 'whois.audns.net.au',
    'auction'                => 'whois.donuts.co',
    'audio'                  => 'whois.uniregistry.net',
    'autos'                  => 'whois.afilias-srs.net',
    'aw'                     => 'whois.nic.aw',
    'ax'                     => 'whois.ax',
    'az'                     => '',
    'ba'                     => '',
    'bar'                    => 'whois.nic.bar',
    'bargains'               => 'whois.donuts.co',
    'bayern'                 => 'whois-dub.mm-registry.com',
    'bb'                     => 'http://domains.org.bb/regsearch/getdetails.cfm?DND={domain}.bb',
    'be'                     => 'whois.dns.be',
    'beer'                   => 'whois-dub.mm-registry.com',
    'berlin'                 => 'whois.nic.berlin',
    'best'                   => 'whois.nic.best',
    'bg'                     => 'whois.register.bg',
    'bh'                     => 'whois.nic.bh',
    'bi'                     => 'whois1.nic.bi',
    'bid'                    => 'whois.nic.bid',
    'bike'                   => 'whois.donuts.co',
    'bio'                    => 'whois.ksregistry.net',
    'biz'                    => 'whois.biz',
    'bj'                     => 'whois.nic.bj',
    'black'                  => 'whois.afilias.net',
    'blackfriday'            => 'whois.uniregistry.net',
    'blue'                   => 'whois.afilias.net',
    'bmw'                    => 'whois.ksregistry.net',
    'bn'                     => 'whois.bn',
    'bo'                     => 'whois.nic.bo',
    'boutique'               => 'whois.donuts.co',
    'br'                     => 'whois.registro.br',
    'brussels'               => 'whois.nic.brussels',
    'build'                  => 'whois.nic.build',
    'builders'               => 'whois.donuts.co',
    'buzz'                   => 'whois.nic.buzz',
    'bw'                     => 'whois.nic.net.bw',
    'by'                     => 'whois.cctld.by',
    'bz'                     => 'whois2.afilias-grs.net',
    'bzh'                    => 'whois-bzh.nic.fr',
    'ca'                     => 'whois.cira.ca',
    'cab'                    => 'whois.donuts.co',
    'camera'                 => 'whois.donuts.co',
    'camp'                   => 'whois.donuts.co',
    'cancerresearch'         => 'whois.nic.cancerresearch',
    'capetown'               => 'capetown-whois.registry.net.za',
    'capital'                => 'whois.donuts.co',
    'cards'                  => 'whois.donuts.co',
    'care'                   => 'whois.donuts.co',
    'career'                 => 'whois.nic.career',
    'careers'                => 'whois.donuts.co',
    'cash'                   => 'whois.donuts.co',
    'cat'                    => 'whois.cat',
    'catering'               => 'whois.donuts.co',
    'cc'                     => 'ccwhois.verisign-grs.com',
    'center'                 => 'whois.donuts.co',
    'ceo'                    => 'whois.nic.ceo',
    'cf'                     => 'whois.dot.cf',
    'ch'                     => 'whois.nic.ch',
    'cheap'                  => 'whois.donuts.co',
    'christmas'              => 'whois.uniregistry.net',
    'church'                 => 'whois.donuts.co',
    'ci'                     => 'whois.nic.ci',
    'city'                   => 'whois.donuts.co',
    'cl'                     => 'whois.nic.cl',
    'claims'                 => 'whois.donuts.co',
    'cleaning'               => 'whois.donuts.co',
    'clinic'                 => 'whois.donuts.co',
    'clothing'               => 'whois.donuts.co',
    'club'                   => 'whois.nic.club',
    'cn'                     => 'whois.cnnic.cn',
    'co'                     => 'whois.nic.co',
    'codes'                  => 'whois.donuts.co',
    'coffee'                 => 'whois.donuts.co',
    'college'                => 'whois.centralnic.com',
    'cologne'                => 'whois-fe1.pdt.cologne.tango.knipp.de',
    'com'                    => 'whois.verisign-grs.com',
    'community'              => 'whois.donuts.co',
    'company'                => 'whois.donuts.co',
    'computer'               => 'whois.donuts.co',
    'condos'                 => 'whois.donuts.co',
    'construction'           => 'whois.donuts.co',
    'consulting'             => 'whois.unitedtld.com',
    'contractors'            => 'whois.donuts.co',
    'cooking'                => 'whois-dub.mm-registry.com',
    'cool'                   => 'whois.donuts.co',
    'coop'                   => 'whois.nic.coop',
    'country'                => 'whois-dub.mm-registry.com',
    'credit'                 => 'whois.donuts.co',
    'creditcard'             => 'whois.donuts.co',
    'cruises'                => 'whois.donuts.co',
    'cuisinella'             => 'whois.nic.cuisinella',
    'cx'                     => 'whois.nic.cx',
    'cy'                     => '',
    'cz'                     => 'whois.nic.cz',
    'dance'                  => 'whois.unitedtld.com',
    'dating'                 => 'whois.donuts.co',
    'de'                     => 'whois.denic.de',
    'deals'                  => 'whois.donuts.co',
    'degree'                 => 'whois.rightside.co',
    'democrat'               => 'whois.unitedtld.com',
    'dental'                 => 'whois.donuts.co',
    'dentist'                => 'whois.rightside.co',
    'desi'                   => 'whois.ksregistry.net',
    'diamonds'               => 'whois.donuts.co',
    'digital'                => 'whois.donuts.co',
    'direct'                 => 'whois.donuts.co',
    'directory'              => 'whois.donuts.co',
    'discount'               => 'whois.donuts.co',
    'dk'                     => 'whois.dk-hostmaster.dk',
    'dm'                     => 'whois.nic.dm',
    'domains'                => 'whois.donuts.co',
    'durban'                 => 'durban-whois.registry.net.za',
    'dz'                     => 'whois.nic.dz',
    'ec'                     => 'whois.nic.ec',
    'edu'                    => 'whois.educause.edu',
    'education'              => 'whois.donuts.co',
    'ee'                     => 'whois.tld.ee',
    'email'                  => 'whois.donuts.co',
    'engineer'               => 'whois.rightside.co',
    'engineering'            => 'whois.donuts.co',
    'enterprises'            => 'whois.donuts.co',
    'equipment'              => 'whois.donuts.co',
    'es'                     => 'whois.nic.es',
    'estate'                 => 'whois.donuts.co',
    'eu'                     => 'whois.eu',
    'eus'                    => 'whois.eus.coreregistry.net',
    'events'                 => 'whois.donuts.co',
    'exchange'               => 'whois.donuts.co',
    'expert'                 => 'whois.donuts.co',
    'exposed'                => 'whois.donuts.co',
    'fail'                   => 'whois.donuts.co',
    'farm'                   => 'whois.donuts.co',
    'feedback'               => 'whois.centralnic.com',
    'fi'                     => 'whois.fi',
    'finance'                => 'whois.donuts.co',
    'financial'              => 'whois.donuts.co',
    'fish'                   => 'whois.donuts.co',
    'fishing'                => 'whois-dub.mm-registry.com',
    'fitness'                => 'whois.donuts.co',
    'fj'                     => 'whois.usp.ac.fj',
    'flights'                => 'whois.donuts.co',
    'florist'                => 'whois.donuts.co',
    'fm'                     => 'http://www.dot.fm/query_whois.cfm?domain={domain}&tld=fm',
    'fo'                     => 'whois.nic.fo',
    'foo'                    => 'domain-registry-whois.l.google.com',
    'foundation'             => 'whois.donuts.co',
    'fr'                     => 'whois.nic.fr',
    'frogans'                => 'whois-frogans.nic.fr',
    'fund'                   => 'whois.donuts.co',
    'furniture'              => 'whois.donuts.co',
    'futbol'                 => 'whois.unitedtld.com',
    'gal'                    => 'whois.gal.coreregistry.net',
    'gallery'                => 'whois.donuts.co',
    'gd'                     => 'whois.nic.gd',
    'gent'                   => 'whois.nic.gent',
    'gg'                     => 'whois.gg',
    'gi'                     => 'whois2.afilias-grs.net',
    'gift'                   => 'whois.uniregistry.net',
    'gives'                  => 'whois.rightside.co',
    'gl'                     => 'whois.nic.gl',
    'glass'                  => 'whois.donuts.co',
    'global'                 => 'whois.afilias-srs.net',
    'globo'                  => 'whois.gtlds.nic.br',
    'gop'                    => 'whois-cl01.mm-registry.com',
    'gov'                    => 'whois.dotgov.gov',
    'gr'                     => '',
    'graphics'               => 'whois.donuts.co',
    'gratis'                 => 'whois.donuts.co',
    'green'                  => 'whois.afilias.net',
    'gripe'                  => 'whois.donuts.co',
    'gs'                     => 'whois.nic.gs',
    'gt'                     => 'http://www.gt/Inscripcion/whois.php?domain={domain}.gt',
    'guide'                  => 'whois.donuts.co',
    'guitars'                => 'whois.uniregistry.net',
    'guru'                   => 'whois.donuts.co',
    'gy'                     => 'whois.registry.gy',
    'hamburg'                => 'whois.nic.hamburg',
    'haus'                   => 'whois.unitedtld.com',
    'hiphop'                 => 'whois.uniregistry.net',
    'hiv'                    => 'whois.afilias-srs.net',
    'hk'                     => 'whois.hkirc.hk',
    'hn'                     => 'whois.nic.hn',
    'holdings'               => 'whois.donuts.co',
    'holiday'                => 'whois.donuts.co',
    'homes'                  => 'whois.afilias-srs.net',
    'horse'                  => 'whois-dub.mm-registry.com',
    'host'                   => 'whois.centralnic.com',
    'house'                  => 'whois.donuts.co',
    'hr'                     => 'whois.dns.hr',
    'ht'                     => 'whois.nic.ht',
    'hu'                     => 'whois.nic.hu',
    'id'                     => 'whois.pandi.or.id',
    'ie'                     => 'whois.domainregistry.ie',
    'il'                     => 'whois.isoc.org.il',
    'im'                     => 'whois.nic.im',
    'immobilien'             => 'whois.unitedtld.com',
    'in'                     => 'whois.inregistry.net',
    'industries'             => 'whois.donuts.co',
    'info'                   => 'whois.afilias.net',
    'ink'                    => 'whois.centralnic.com',
    'institute'              => 'whois.donuts.co',
    'insure'                 => 'whois.donuts.co',
    'int'                    => 'whois.iana.org',
    'international'          => 'whois.donuts.co',
    'investments'            => 'whois.donuts.co',
    'io'                     => 'whois.nic.io',
    'iq'                     => 'whois.cmc.iq',
    'ir'                     => 'whois.nic.ir',
    'is'                     => 'whois.isnic.is',
    'it'                     => 'whois.nic.it',
    'je'                     => 'whois.je',
    'jetzt'                  => 'whois.nic.jetzt',
    'jobs'                   => 'jobswhois.verisign-grs.com',
    'joburg'                 => 'joburg-whois.registry.net.za',
    'jp'                     => 'whois.jprs.jp',
    'juegos'                 => 'whois.uniregistry.net',
    'kaufen'                 => 'whois.unitedtld.com',
    'ke'                     => 'whois.kenic.or.ke',
    'kg'                     => 'whois.domain.kg',
    'ki'                     => 'whois.nic.ki',
    'kim'                    => 'whois.afilias.net',
    'kitchen'                => 'whois.donuts.co',
    'kiwi'                   => 'whois.dot-kiwi.com',
    'koeln'                  => 'whois-fe1.pdt.koeln.tango.knipp.de',
    'kr'                     => 'whois.kr',
    'krd'                    => 'whois.aridnrs.net.au',
    'kred'                   => 'whois.nic.kred',
    'kz'                     => 'whois.nic.kz',
    'la'                     => 'whois.nic.la',
    'lacaixa'                => 'whois.nic.lacaixa',
    'land'                   => 'whois.donuts.co',
    'lawyer'                 => 'whois.rightside.co',
    'lease'                  => 'whois.donuts.co',
    'lgbt'                   => 'whois.afilias.net',
    'li'                     => 'whois.nic.li',
    'life'                   => 'whois.donuts.co',
    'lighting'               => 'whois.donuts.co',
    'limited'                => 'whois.donuts.co',
    'limo'                   => 'whois.donuts.co',
    'link'                   => 'whois.uniregistry.net',
    'loans'                  => 'whois.donuts.co',
    'london'                 => 'whois-lon.mm-registry.com',
    'lotto'                  => 'whois.afilias.net',
    'lt'                     => 'whois.domreg.lt',
    'lu'                     => 'whois.dns.lu',
    'luxe'                   => 'whois-dub.mm-registry.com',
    'luxury'                 => 'whois.nic.luxury',
    'lv'                     => 'whois.nic.lv',
    'ly'                     => 'whois.nic.ly',
    'ma'                     => 'whois.iam.net.ma',
    'maison'                 => 'whois.donuts.co',
    'management'             => 'whois.donuts.co',
    'mango'                  => 'whois.mango.coreregistry.net',
    'market'                 => 'whois.rightside.co',
    'marketing'              => 'whois.donuts.co',
    'md'                     => 'whois.nic.md',
    'me'                     => 'whois.nic.me',
    'media'                  => 'whois.donuts.co',
    'meet'                   => 'whois.afilias.net',
    'melbourne'              => 'whois.aridnrs.net.au',
    'menu'                   => 'whois.nic.menu',
    'mg'                     => 'whois.nic.mg',
    'miami'                  => 'whois-dub.mm-registry.com',
    'mini'                   => 'whois.ksregistry.net',
    'mk'                     => 'whois.marnet.mk',
    'ml'                     => 'whois.dot.ml',
    'mn'                     => 'whois.nic.mn',
    'mo'                     => 'whois.monic.mo',
    'mobi'                   => 'whois.dotmobiregistry.net',
    'moda'                   => 'whois.unitedtld.com',
    'monash'                 => 'whois.nic.monash',
    'mortgage'               => 'whois.rightside.co',
    'moscow'                 => 'whois.nic.moscow',
    'motorcycles'            => 'whois.afilias-srs.net',
    'mp'                     => 'whois.nic.mp',
    'ms'                     => 'whois.nic.ms',
    'mt'                     => 'http://www.um.edu.mt/cgi-bin/nic/whois?domain={domain}.mt',
    'mu'                     => 'whois.nic.mu',
    'museum'                 => 'whois.museum',
    'mx'                     => 'whois.mx',
    'my'                     => 'whois.mynic.my',
    'na'                     => 'whois.na-nic.com.na',
    'nagoya'                 => 'whois.gmoregistry.net',
    'name'                   => 'whois.nic.name',
    'navy'                   => 'whois.rightside.co',
    'nc'                     => 'whois.nc',
    'net'                    => 'whois.verisign-grs.com',
    'nf'                     => 'whois.nic.nf',
    'ng'                     => 'whois.nic.net.ng',
    'ngo'                    => 'whois.publicinterestregistry.net',
    'ninja'                  => 'whois.unitedtld.com',
    'nl'                     => 'whois.domain-registry.nl',
    'no'                     => 'whois.norid.no',
    'nra'                    => 'whois.afilias-srs.net',
    'nrw'                    => 'whois-fe1.pdt.nrw.tango.knipp.de',
    'nu'                     => 'whois.iis.nu',
    'nyc'                    => 'whois.nic.nyc',
    'nz'                     => 'whois.srs.net.nz',
    'okinawa'                => 'whois.gmoregistry.ne',
    'om'                     => 'whois.registry.om',
    'onl'                    => 'whois.afilias-srs.net',
    'org'                    => 'whois.pir.org',
    'organic'                => 'whois.afilias.net',
    'ovh'                    => 'whois-ovh.nic.fr',
    'paris'                  => 'whois-paris.nic.fr',
    'partners'               => 'whois.donuts.co',
    'parts'                  => 'whois.donuts.co',
    'pe'                     => 'kero.yachay.pe',
    'pf'                     => 'whois.registry.pf',
    'photo'                  => 'whois.uniregistry.net',
    'photography'            => 'whois.donuts.co',
    'photos'                 => 'whois.donuts.co',
    'physio'                 => 'whois.nic.physio',
    'pics'                   => 'whois.uniregistry.net',
    'pictures'               => 'whois.donuts.co',
    'pink'                   => 'whois.afilias.net',
    'pl'                     => 'whois.dns.pl',
    'place'                  => 'whois.donuts.co',
    'plumbing'               => 'whois.donuts.co',
    'pm'                     => 'whois.nic.pm',
    'post'                   => 'whois.dotpostregistry.net',
    'pr'                     => 'whois.nic.pr',
    'press'                  => 'whois.centralnic.com',
    'pro'                    => 'whois.dotproregistry.net',
    'productions'            => 'whois.donuts.co',
    'properties'             => 'whois.donuts.co',
    'pt'                     => 'whois.dns.pt',
    'pub'                    => 'whois.unitedtld.com',
    'pw'                     => 'whois.nic.pw',
    'qa'                     => 'whois.registry.qa',
    'qpon'                   => 'whois.nic.qpon',
    'quebec'                 => 'whois.quebec.rs.corenic.net',
    're'                     => 'whois.nic.re',
    'recipes'                => 'whois.donuts.co',
    'red'                    => 'whois.afilias.net',
    'rehab'                  => 'whois.rightside.co',
    'reise'                  => 'whois.nic.reise',
    'reisen'                 => 'whois.donuts.co',
    'rentals'                => 'whois.donuts.co',
    'repair'                 => 'whois.donuts.co',
    'report'                 => 'whois.donuts.co',
    'republican'             => 'whois.rightside.co',
    'rest'                   => 'whois.centralnic.com',
    'reviews'                => 'whois.unitedtld.com',
    'rich'                   => 'whois.afilias-srs.net',
    'rio'                    => 'whois.gtlds.nic.br',
    'ro'                     => 'whois.rotld.ro',
    'rocks'                  => 'whois.unitedtld.com',
    'rodeo'                  => 'whois-dub.mm-registry.com',
    'rs'                     => 'whois.rnids.rs',
    'ru'                     => 'whois.tcinet.ru',
    'ruhr'                   => 'whois.nic.ruhr',
    'sa'                     => 'whois.nic.net.sa',
    'saarland'               => 'whois.ksregistry.net',
    'sb'                     => 'whois.nic.net.sb',
    'sc'                     => 'whois2.afilias-grs.net',
    'scb'                    => 'whois.nic.scb',
    'schmidt'                => 'whois.nic.schmidt',
    'schule'                 => 'whois.donuts.co',
    'scot'                   => 'whois.scot.coreregistry.net',
    'se'                     => 'whois.iis.se',
    'services'               => 'whois.donuts.co',
    'sexy'                   => 'whois.uniregistry.net',
    'sg'                     => 'whois.sgnic.sg',
    'sh'                     => 'whois.nic.sh',
    'shiksha'                => 'whois.afilias.net',
    'shoes'                  => 'whois.donuts.co',
    'si'                     => 'whois.arnes.si',
    'singles'                => 'whois.donuts.co',
    'sk'                     => 'whois.sk-nic.sk',
    'sm'                     => 'whois.nic.sm',
    'sn'                     => 'whois.nic.sn',
    'so'                     => 'whois.nic.so',
    'social'                 => 'whois.unitedtld.com',
    'software'               => 'whois.rightside.co',
    'sohu'                   => 'whois.gtld.knet.cn',
    'solar'                  => 'whois.donuts.co',
    'solutions'              => 'whois.donuts.co',
    'soy'                    => 'domain-registry-whois.l.google.com',
    'space'                  => 'whois.nic.space',
    'spiegel'                => 'whois.ksregistry.net',
    'st'                     => 'whois.nic.st',
    'su'                     => 'whois.tcinet.ru',
    'supplies'               => 'whois.donuts.co',
    'supply'                 => 'whois.donuts.co',
    'support'                => 'whois.donuts.co',
    'surf'                   => 'whois-dub.mm-registry.com',
    'surgery'                => 'whois.donuts.co',
    'sx'                     => 'whois.sx',
    'sy'                     => 'whois.tld.sy',
    'systems'                => 'whois.donuts.co',
    'tattoo'                 => 'whois.uniregistry.net',
    'tax'                    => 'whois.donuts.co',
    'tc'                     => 'whois.meridiantld.net',
    'technology'             => 'whois.donuts.co',
    'tel'                    => 'whois.nic.tel',
    'tf'                     => 'whois.nic.tf',
    'th'                     => 'whois.thnic.co.th',
    'tienda'                 => 'whois.donuts.co',
    'tips'                   => 'whois.donuts.co',
    'tirol'                  => 'whois.nic.tirol',
    'tk'                     => 'whois.dot.tk',
    'tl'                     => 'whois.nic.tl',
    'tm'                     => 'whois.nic.tm',
    'tn'                     => 'whois.ati.tn',
    'to'                     => 'whois.tonic.to',
    'today'                  => 'whois.donuts.co',
    'tokyo'                  => 'whois.nic.tokyo',
    'tools'                  => 'whois.donuts.co',
    'town'                   => 'whois.donuts.co',
    'toys'                   => 'whois.donuts.co',
    'tr'                     => 'whois.nic.tr',
    'trade'                  => 'whois.nic.trade',
    'training'               => 'whois.donuts.co',
    'travel'                 => 'whois.nic.travel',
    'tv'                     => 'tvwhois.verisign-grs.com',
    'tw'                     => 'whois.twnic.net.tw',
    'tz'                     => 'whois.tznic.or.tz',
    'ua'                     => 'whois.ua',
    'ug'                     => 'whois.co.ug',
    'uk'                     => 'whois.nic.uk',
    'university'             => 'whois.donuts.co',
    'uno'                    => 'whois.nic.uno',
    'us'                     => 'whois.nic.us',
    'uy'                     => 'whois.nic.org.uy',
    'uz'                     => 'whois.cctld.uz',
    'vacations'              => 'whois.donuts.co',
    'vc'                     => 'whois2.afilias-grs.net',
    've'                     => 'whois.nic.ve',
    'vegas'                  => 'whois.afilias-srs.net',
    'ventures'               => 'whois.donuts.co',
    'versicherung'           => 'whois.nic.versicherung',
    'vet'                    => 'whois.rightside.co',
    'vg'                     => 'ccwhois.ksregistry.net',
    'viajes'                 => 'whois.donuts.co',
    'villas'                 => 'whois.donuts.co',
    'vision'                 => 'whois.donuts.co',
    'vlaanderen'             => 'whois.nic.vlaanderen',
    'vodka'                  => 'whois-dub.mm-registry.com',
    'vote'                   => 'whois.afilias.net',
    'voting'                 => 'whois.voting.tld-box.at',
    'voto'                   => 'whois.afilias.net',
    'voyage'                 => 'whois.donuts.co',
    'vu'                     => 'vunic.vu',
    'wang'                   => 'whois.gtld.knet.cn',
    'watch'                  => 'whois.donuts.co',
    'webcam'                 => 'whois.nic.webcam',
    'website'                => 'whois.nic.website',
    'wed'                    => 'whois.nic.wed',
    'wf'                     => 'whois.nic.wf',
    'wien'                   => 'whois.nic.wien',
    'wiki'                   => 'whois.nic.wiki',
    'works'                  => 'whois.donuts.co',
    'ws'                     => 'whois.website.ws',
    'wtc'                    => 'whois.nic.wtc',
    'wtf'                    => 'whois.donuts.co',
    'xxx'                    => 'whois.nic.xxx',
    'xyz'                    => 'whois.nic.xyz',
    'yachts'                 => 'whois.afilias-srs.net',
    'yt'                     => 'whois.nic.yt',
    'zm'                     => 'whois.nic.zm',
    'zone'                   => 'whois.donuts.co',

    // Second level
    'net.au'                 => 'whois.aunic.net',
    'ae.com'                 => 'whois.centralnic.net',
    'br.com'                 => 'whois.centralnic.net',
    'cn.com'                 => 'whois.centralnic.net',
    'de.com'                 => 'whois.centralnic.net',
    'eu.com'                 => 'whois.centralnic.net',
    'gb.com'                 => 'whois.centralnic.net',
    'hu.com'                 => 'whois.centralnic.net',
    'jpn.com'                => 'whois.centralnic.net',
    'kr.com'                 => 'whois.centralnic.net',
    'no.com'                 => 'whois.centralnic.net',
    'qc.com'                 => 'whois.centralnic.net',
    'ru.com'                 => 'whois.centralnic.net',
    'sa.com'                 => 'whois.centralnic.net',
    'se.com'                 => 'whois.centralnic.net',
    'uk.com'                 => 'whois.centralnic.net',
    'us.com'                 => 'whois.centralnic.net',
    'uy.com'                 => 'whois.centralnic.net',
    'za.com'                 => 'whois.centralnic.net',
    'gb.net'                 => 'whois.centralnic.net',
    'se.net'                 => 'whois.centralnic.net',
    'uk.net'                 => 'whois.centralnic.net',
    'za.net'                 => 'whois.za.net',
    'za.org'                 => 'whois.za.net',
    'co.za'                  => 'http://co.za/cgi-bin/whois.sh?Domain={domain}.co.za',
    'org.za'                 => 'http://www.org.za/cgi-bin/rwhois?domain={domain}.org.za&format=full',

    // National tlds
    'xn--3bst00m'            => 'whois.gtld.knet.cn',
    'xn--3ds443g'            => 'whois.afilias-srs.net',
    'xn--3e0b707e'           => 'whois.kr',
    'xn--4gbrim'             => 'whois.afilias-srs.net',
    'xn--55qw42g'            => 'whois.conac.cn',
    'xn--55qx5d'             => 'whois.ngtld.cn',
    'xn--6frz82g'            => 'whois.afilias.net',
    'xn--6qq986b3xl'         => 'whois.gtld.knet.cn',
    'xn--80adxhks'           => 'whois.nic.xn--80adxhks',
    'xn--80ao21a'            => 'whois.nic.kz',
    'xn--80asehdb'           => 'whois.online.rs.corenic.net',
    'xn--80aswg'             => 'whois.site.rs.corenic.net',
    'xn--c1avg'              => 'whois.publicinterestregistry.net',
    'xn--cg4bki'             => 'whois.kr',
    'xn--clchc0ea0b2g2a9gcd' => 'whois.sgnic.sg',
    'xn--czru2d'             => 'whois.gtld.knet.cn',
    'xn--d1acj3b'            => 'whois.nic.xn--d1acj3b',
    'xn--fiq228c5hs'         => 'whois.afilias-srs.net',
    'xn--fiq64b'             => 'whois.gtld.knet.cn',
    'xn--fiqs8s'             => 'cwhois.cnnic.cn',
    'xn--fiqz9s'             => 'cwhois.cnnic.cn',
    'xn--i1b6b1a6a2e'        => 'whois.publicinterestregistry.net',
    'xn--io0a7i'             => 'whois.ngtld.cn',
    'xn--j1amh'              => 'whois.dotukr.com',
    'xn--j6w193g'            => 'whois.hkirc.hk',
    'xn--kprw13d'            => 'whois.twnic.net.tw',
    'xn--kpry57d'            => 'whois.twnic.net.tw',
    'xn--lgbbat1ad8j'        => 'whois.nic.dz',
    'xn--mgb9awbf'           => 'whois.registry.om',
    'xn--mgba3a4f16a'        => 'whois.nic.ir',
    'xn--mgbaam7a8h'         => 'whois.aeda.net.ae',
    'xn--mgbab2bd'           => 'whois.bazaar.coreregistry.net',
    'xn--mgberp4a5d4ar'      => 'whois.nic.net.sa',
    'xn--mgbx4cd0ab'         => 'whois.mynic.my',
    'xn--ngbc5azd'           => 'whois.nic.xn--ngbc5azd',
    'xn--nqv7f'              => 'whois.publicinterestregistry.net',
    'xn--nqv7fs00ema'        => 'whois.publicinterestregistry.net',
    'xn--o3cw4h'             => 'whois.thnic.co.th',
    'xn--ogbpf8fl'           => 'whois.tld.sy',
    'xn--p1ai'               => 'whois.tcinet.ru',
    'xn--q9jyb4c'            => 'domain-registry-whois.l.google.com',
    'xn--rhqv96g'            => 'whois.nic.xn--rhqv96g',
    'xn--unup4y'             => 'whois.donuts.co',
    'xn--wgbl6a'             => 'whois.registry.qa',
    'xn--yfro4i67o'          => 'whois.sgnic.sg',
    'xn--ygbi2ammx'          => 'whois.pnina.ps',
    'xn--zfr164b'            => 'whois.conac.cn',
);

/* handled gTLD whois servers */

$this->WHOIS_GTLD_HANDLER = array(
    'whois.bulkregister.com' => 'enom',
    'whois.dotregistrar.com' => 'dotster',
    'whois.namesdirect.com'  => 'dotster',
    'whois.psi-usa.info'     => 'psiusa',
    'whois.www.tv'           => 'tvcorp',
    'whois.tucows.com'       => 'opensrs',
    'whois.35.com'           => 'onlinenic',
    'whois.nominalia.com'    => 'genericb',
    'whois.encirca.com'      => 'genericb',
    'whois.corenic.net'      => 'genericb'
);

/* Non ICANN TLD's */

$this->WHOIS_NON_ICANN = array(
    'agent'    => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'agente'   => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'america'  => 'http://www.adns.net/whois.php?txtDOMAIN={domain}.{tld}',
    'amor'     => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'amore'    => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'amour'    => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'arte'     => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'artes'    => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'arts'     => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'asta'     => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'auction'  => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'auktion'  => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'boutique' => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'chat'     => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'chiesa'   => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'church'   => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'cia'      => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'ciao'     => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'cie'      => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'club'     => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'clube'    => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'com2'     => 'http://www.adns.net/whois.php?txtDOMAIN={domain}.{tld}',
    'deporte'  => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'ditta'    => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'earth'    => 'http://www.adns.net/whois.php?txtDOMAIN={domain}.{tld}',
    'eglise'   => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'enchere'  => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'escola'   => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'escuela'  => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'esporte'  => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'etc'      => 'http://www.adns.net/whois.php?txtDOMAIN={domain}.{tld}',
    'famiglia' => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'familia'  => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'familie'  => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'family'   => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'free'     => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'game'     => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'ges'      => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'gmbh'     => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'golf'     => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'gratis'   => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'gratuit'  => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'hola'     => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'iglesia'  => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'igreja'   => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'inc'      => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'jeu'      => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'jogo'     => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'juego'    => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'kids'     => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'kirche'   => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'krunst'   => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'law'      => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'legge'    => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'lei'      => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'leilao'   => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'ley'      => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'liebe'    => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'lion'     => 'http://www.adns.net/whois.php?txtDOMAIN={domain}.{tld}',
    'llc'      => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'llp'      => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'loi'      => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'loja'     => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'love'     => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'ltd'      => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'makler'   => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'med'      => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'mp3'      => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'not'      => 'http://www.adns.net/whois.php?txtDOMAIN={domain}.{tld}',
    'online'   => 'http://www.adns.net/whois.php?txtDOMAIN={domain}.{tld}',
    'recht'    => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'reise'    => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'resto'    => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'school'   => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'schule'   => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'scifi'    => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'scuola'   => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'shop'     => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'soc'      => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'spiel'    => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'sport'    => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'subasta'  => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'tec'      => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'tech'     => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'tienda'   => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'travel'   => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'turismo'  => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'usa'      => 'http://www.adns.net/whois.php?txtDOMAIN={domain}.{tld}',
    'verein'   => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'viagem'   => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'viaje'    => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'video'    => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'voyage'   => 'http://www.new.net/search_whois.tp?domain={domain}&tld={tld}',
    'z'        => 'http://www.adns.net/whois.php?txtDOMAIN={domain}.{tld}',
);
?>