<?php

use JsonSerializable;

abstract class abstractType implements JsonSerializable{
    
    abstract protected function setType($type);
    
    public function getType(){
        return $this->type;
    }

    // public function getTypeJson(){
    //     return '@type : '.$this->type;
    // }

    public function jsonSerialize()
    {
        return ['@type' => $this->type];
    }
}