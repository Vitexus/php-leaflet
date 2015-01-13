<?php

/**
 * @package    dev
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2015 netzmacht creative David Molineus
 * @license    LGPL 3.0
 * @filesource
 *
 */

namespace Netzmacht\LeafletPHP\Plugins\Omnivore;

/**
 * Class GeoJson creates the GeoJSON file loading request.
 *
 * @package Netzmacht\LeafletPHP\Plugins\Omnivore
 */
class GeoJson extends OptionsLayer
{
    /**
     * {@inheritdoc}
     */
    public static function getType()
    {
        return 'Omnivore.GeoJson';
    }
}
