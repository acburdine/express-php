<?php

namespace Express;

class Request {

    public $app;

    public $baseUrl;

    public $hostname;

    public $ip;

    public $ips;

    public $originalUrl;

    public $params;

    public $path;

    public $protocol;

    public $query;

    public $secure;

    public $subdomains = array();

    public $xhr;

    public function accepts($types = array()) {

    }

    public function acceptsCharses() {

    }

    public function acceptsEncodings() {

    }

    public function acceptsLanguages() {

    }

    public function get($key) {

    }

    public function headers($key) {

    }

    public function is($type) {

    }
}
