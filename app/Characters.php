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
    public $
    public function __construct($name,$strength,$fighting,$energy){
        $this->name=$name;
        $this->strength=$strength;
        $this->fighting=$fighting;
        $this->energy=$energy;
        $this->
        parent::__construct();
    }
}
