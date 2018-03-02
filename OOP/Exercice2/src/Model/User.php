<?php
namespace Model;

class User
{
    private $id;
    protected $roles = [];
    protected $password;
    protected $salt;
    protected $username;
    
    public function getId()
    {
        return $this->id;
    }

    public function getRoles()
    {
        $result = [Role::ROLE_USER];
        foreach ($this->roles as $role){
            $result[] = $role->getLabel();
        }
        return array_unique($result);
    }
    
    //The getRoles() method must allays return the 'ROLE\_USER' in the set of roles
    //A method "addRole" must be added 
    
    public function addRole(Role $role)
    {
        if(!in_array($role, $this->roles)){
           $this->roles[] = $role;  
            
        }
       return $this; 
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

    public function setRoles($roles)
    {
        $this->roles = $roles;
        return $this;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function setSalt($salt)
    {
        $this->salt = $salt;
        return $this;
    }

    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    public function eraseCredentials()
    {
        $this->password = null;
        $this->salt = null;
    }
}

