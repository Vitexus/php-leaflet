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
 * Class TopoJson creates the TopoJSON file loading request.
 *
 * @package Netzmacht\LeafletPHP\Plugins\Omnivore
 */
class TopoJson extends OptionsLayer
{
    /**
     * {@inheritdoc}
     */
    public static function getType()
    {
        return 'Omnivore.TopoJson';
    }
}
