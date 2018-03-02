<?php 

namespace Model;

class User
{
    private $id;
    protected $roles =[];
    protected $password = null;
    protected $salt = null;
    protected $username;

    public function getId()
    {
        return $this->id;
    }
    public function getRoles()
    {
        return $this->roles;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getSalt()
    {
        return $this->salt;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function setRoles($setroles){
        $this->roles = $setroles;
        return $this;
    }
    public function setPassword($setpassword)
    {
        $this->password = $setpassword;
        return $this;
    }
    public function setSalt($setsalt)
    {
        $this->salt = $setsalt;
        return $this;
    }
    public function setUsername($setusername)
    {
        $this->username = $setusername;
        return $this;
    }
    public function eraseCredentials()
    {
        $this->salt = null;
        $this->password = null;
 
    }

    
    
    
    
    
    
    
    
}