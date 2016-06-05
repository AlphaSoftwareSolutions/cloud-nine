<?php

namespace Shopware\Themes\EdibTheme;

use Shopware\Components\Form as Form;

class Theme extends \Shopware\Components\Theme
{
    protected $extend = 'Responsive';

    protected $name = <<<'SHOPWARE_EOD'
EdibTheme
SHOPWARE_EOD;

    protected $description = <<<'SHOPWARE_EOD'
Das Edib Theme
SHOPWARE_EOD;

    protected $author = <<<'SHOPWARE_EOD'
Edib
SHOPWARE_EOD;

    protected $license = <<<'SHOPWARE_EOD'

SHOPWARE_EOD;
    protected $javascript = array(

        'src/js/fixed_header.js'
       
    );
//
//    protected $css = array(
//        'src/css/bootstrap/bootstrap.css',
//        'src/css/bootstrap/bootstrap.min.css',
//        'src/css/info-page.css',
//        'src/css/ie9.css',
//        'src/css/bootstrap/bootstrap-theme.min.css',
//        'src/css/bootstrap/bootstrap-theme.css',
//        'src/css/style.css',
//
//    );
    public function createConfig(Form\Container\TabContainer $container)
    {
    }
}