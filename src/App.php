<?php

namespace Express\Router;

class Router {

    public $locals = array();

    protected $mountPath;

    protected $config;

    protected $onMount;

    public function __construct($config = array(), $mountPath = '/') {
        $this->config = $config;
        $this->mountPath = $mountPath;
    }

    public function config($key, $value) {
        if (!$value && array_key_exists($key, $this->config)) {
            return $this->config[$key];
        } else {
            $this->config[$key] = $value;
            return $this;
        }
    }

    public function mountPath() {
        return $this->mountPath;
    }

    public function onMount(Closure $callback) {
        $this->onMount = $callback;
    }

    public function all() {

    }

    public function delete() {

    }

    public function get() {

    }

    public function method() {

    }

    public function mount() {

    }

    public function param($name, Closure $callback) {

    }

    public function path() {

    }

    public function post() {

    }

    public function put() {

    }

    public function route($path) {

    }
}
