<?php

/**
 * @see       https://github.com/laminas/laminas-di for the canonical source repository
 * @copyright https://github.com/laminas/laminas-di/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-di/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Di\TestAsset\DependencyTree;

class Simple
{
    /**
     * @var Level1
     */
    public $result;

    public function __construct(Level1 $dep)
    {
        $this->result = $dep;
    }
}