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
        'eu'  => [
            'en_gb',
            'de_de',
            'es_es',
            'fr_fr',
            'it_it',
            'pl_pl',
            'pt_pt',
            'ru_ru',
        ],
        'us'  => [
            'en_us',
            'pt_br',
            'es_mx',
        ],
        'kr'  => [
            'ko_kr',
        ],
        'tw'  => [
            'zh_tw',
        ],
        'sea' => [
            'en_us',
        ],
    ];
}
