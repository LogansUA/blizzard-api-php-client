<?php

namespace BlizzardApi;

/**
 * Class GeoData
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class GeoData
{
    /**
     * @var array $list List of available regions and locales
     */
    static public $list = [
        'eu' => [
            'en_gb',
            'es_es',
            'fr_fr',
            'ru_ru',
            'de_de',
            'pt_pt',
            'it_it',
        ],
        'us' => [
            'en_us',
            'es_mx',
            'pt_br',
        ],
        'kr' => [
            'ko_kr',
        ],
        'tw' => [
            'zh_tw',
        ],
        'cn' => [
            'zh_cn',
        ],
    ];
}
