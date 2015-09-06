<?php

namespace Express;

class Response {

    protected $app;

    protected $locals;

    protected $headers = array();

    public function headersSent() {

    }

    public function locals($key, $value) {
        if ($value) {
            $this->locals[$key] = $value;
        } else {
            return $this->locals[$key];
        }
    }

    public function append() {

    }

    public function attachment() {

    }

    public function cookie() {

    }

    public function clearCookie() {

    }

    public function download() {

    }

    public function format(array $formats) {

    }

    public function json() {

    }

    public function jsonp() {

    }

    public function links() {

    }

    public function location() {

    }

    public function redirect() {

    }

}
