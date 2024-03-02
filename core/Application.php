<?php


class Application 
{
    public Router $router;
    public function __contruct() {
        $this->router = new Router();
    }
}