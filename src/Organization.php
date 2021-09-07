<?php

namespace tscGoogleJobPostingParser;

require_once 'abstractType.php';

class Organization extends abstractType{

    protected $type,$name,$sameAs;

    public function __construct($name, $sameAs)
    {
        $this->settype('Organization');
        $this->setName($name);
        $this->setSameAs($sameAs);
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
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of sameAs
     */ 
    public function getSameAs()
    {
        return $this->sameAs;
    }

    /**
     * Set the value of sameAs
     *
     * @return  self
     */ 
    public function setSameAs($sameAs)
    {
        $this->sameAs = $sameAs;

        return $this;
    }

    public function jsonSerialize()
    {
        return[
            '@type' => $this->type,
            'name' => $this->name,
            'sameAs' => $this->sameAs
        ];
    }
}