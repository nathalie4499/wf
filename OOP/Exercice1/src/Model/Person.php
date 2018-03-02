<?php 

namespace Model;

class Person
{
    private $id;
    protected $firstname;
    protected $lastname;
    protected $emails = [];
    
    function getId() {
        return $this->id;
    }
    public function getFirstname() {
        return $this->firstname;
    }
    public function getLastname() {
        return $this->lastname;
    }
    public function getEmails() {
        return $this->emails;
    }
    public function setFirstname(string $setfirstname)
    {
        $this->firstname = $setfirstname;
        return $this;
    }
    public function setLastname(string $setlastname)
    {
        $this->lastname = $setlastname;
        return $this;
    }
    public function setEmails(array $setemails)
    {
        $this->emails = $setemails;
        return $this;
    }  
}

