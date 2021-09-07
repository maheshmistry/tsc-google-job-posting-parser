<?php

require_once 'abstractType.php';

class Place extends abstractType{

    protected $type,$address;

    public function __construct($address)
    {
        $this->settype('Place');
        $this->setAddress($address);
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }


    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    public function jsonSerialize()
    {
        return [
            '@type' => $this->type,
            'address' => $this->address
        ];
    }
}