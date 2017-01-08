<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Characters extends Model
{
    //
    public $name;
    public $strength;
    public $fighting;
    public $energy;
    public $owner;
    public function __construct($name,$strength,$fighting,$energy,$owner){
        $this->name=$name;
        $this->strength=$strength;
        $this->fighting=$fighting;
        $this->energy=$energy;
        $this->owner=$owner;
        parent::__construct();
    }
}
