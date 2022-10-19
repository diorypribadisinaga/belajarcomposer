<?php

namespace sinagadiory\data;

class Costumer{
    var string $name;
    var string $address;
    var string $country;
    public function __construct(string $name,string $address,string $country)
    {
        $this->name=$name;
        $this->address=$address;
        $this->country=$country;
    }

    function SayHello(string $name):void
    {
        echo "Hello $name dari ".$this->name.PHP_EOL;
    }
}