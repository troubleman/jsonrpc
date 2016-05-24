<?php


namespace JsonRPC;


class ProcedureHandler
{
    /**
     * List of procedures
     *
     * @var array
     */
    private $callbacks = array();

    /**
     * List of classes
     *
     * @var array
     */
    private $classes = array();

    /**
     * List of instances
     *
     * @var array
     */
    private $instances = array();

    /**
     * Register a new procedure
     *
     * @param $procedure
     * @param \Closure $callback
     *
     * @return $this
     */
    public function withCallback($procedure, \Closure $callback)
    {
        $this->callbacks[$procedure] = $callback;
        return $this;
    }

    /**
     * Bind a class instance
     * 
     * @param $instance
     *
     * @return $this
     */
    public function withInstance($instance)
    {
        $this->instances[] = $instance;
        return $this;
    }

    public function executeProcedure($procedure, array $params = array())
    {

    }
}