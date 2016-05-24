<?php


namespace JsonRPC;

use JsonRPC\ProcedureHandler;

class Server
{
    protected $payload;

    protected $procedureHandler;


    public function __construct($request = '')
    {
        if ($request !== '') {
            $this->payload = json_decode($request, true);
        } else {
            $this->payload = json_decode(file_get_contents('php://input'), true);
        }

        $this->procedureHandler = new ProcedureHandler();
    }

    /**
     * Register a new procedure
     *
     * @param $procedure
     * @param \Closure $callback
     *
     * @return $this
     */
    public function register($procedure, \Closure $callback)
    {
        $this->procedureHandler->withCallback($procedure, $callback);
        return $this;
    }

    /**
     * Bind a class instance
     *
     * @param $instance  class instance or name
     *
     * @return $this
     */
    public function attach($instance)
    {
        $this->procedureHandler->withInstance($instance);
    }


}