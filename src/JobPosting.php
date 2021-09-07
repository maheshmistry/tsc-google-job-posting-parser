<?php

require_once 'abstractType.php';
require_once 'Organization.php';
require_once 'Place.php';

class JobPosting extends abstractType{

    protected $type;
    protected $context = 'https://schema.org/';

    protected $datePosted, $description, $hiringOrganization, $jobLocation, $title, $validThrough;           

    public function __construct()
    {
        $this->settype('JobPosting');
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
     * Get the value of datePosted
     */ 
    public function getDatePosted()
    {
        return $this->datePosted;
    }

    /**
     * Set the value of datePosted
     *
     * @return  self
     */ 
    public function setDatePosted($datePosted)
    {
        $this->datePosted = $datePosted;
        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get the value of hiringOrganization
     */ 
    public function getHiringOrganization()
    {
        return $this->hiringOrganization;
    }

    /**
     * Set the value of hiringOrganization
     *
     * @return  self
     */ 
    public function setHiringOrganization($orgName, $orgSameAs)
    {
        $this->hiringOrganization = new Organization($orgName, $orgSameAs);
        return $this;
    }

    /**
     * Get the value of jobLocation
     */ 
    public function getJobLocation()
    {
        return $this->jobLocation;
    }

    /**
     * Set the value of jobLocation
     *
     * @return  self
     */ 
    public function setJobLocation($jobLocation)
    {
        $this->jobLocation = new Place($jobLocation);

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of validThrough
     */ 
    public function getValidThrough()
    {
        return $this->validThrough;
    }

    /**
     * Set the value of validThrough
     *
     * @return  self
     */ 
    public function setValidThrough($validThrough)
    {
        $this->validThrough = $validThrough;

        return $this;
    }

    public function jsonSerialize()
    {
        return [
            '@context' => $this->context,
            '@type' => $this->type,
            'title' => $this->getTitle(),
            'datePosted' => $this->getDatePosted(),
            'description' => $this->getDescription(),
            'hiringOrganization' => $this->getHiringOrganization(),
            'jobLocation' => $this->getJobLocation(),
            'validThrough' => $this->getValidThrough(),
        ];
    }

}
