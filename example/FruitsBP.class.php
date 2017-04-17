<?php

class FruitsBP extends Blueprint {
    var $fruits;

    public function __construct() {
        parent::__construct();

        $this->base_url = '/fruits';

        $this->route('/', 'main');
        $this->route('/apple', 'apple');
    }

    public function init() {
        $this->fruits = [
            'apple',
            'banana',
            'raspberry',
            'papaya',
            'orange'
        ];
    }

    function main() {
        header('Content-Type: application/json');

        return json_encode($this->fruits);
    }

    function apple() {
        return json_encode(['color' => 'red']);
    }
}
