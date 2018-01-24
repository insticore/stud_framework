<?php

namespace Mindk\Framework\Routing;

/**
 * Class Router
 * @package Mindk\Framework\Routing
 */
class Router
{
    /**
     * @var Request instance
     */
    protected $request;

    /**
     * @var Route map cache
     */
    protected $map;

    /**
     * Router constructor.
     *
     * @param $mapping Route mapping
     */
    public function __construct(array $mapping)
    {
        $this->request = $_SERVER['REQUEST_URI'];
        $this->map = $mapping;
    }

    /**
     * Find matching route, using routing map
     */
    public function findRoute(){
        //@TODO: Find matching route
    }

    /**
     * Build route (link)
     *
     * @param   string
     * @param   array
     *
     * @return  string
     */
    public function buildRoute($name, $params = []): string{
        // @TODO: Implement this
    }

}