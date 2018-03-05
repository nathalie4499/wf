<?php
namespace Exception;

class NotAllowedRoleException extends \RuntimeException
{
    private $listallowedRoleLabel = [];
    private $currentUnmatchingLabel;
    
    public function __construct ($message = null, $code = null, $previous = null, $listallowedRoleLabel, $currentUnmatchingLabel) {
        
        parent::__construct($message, $code, $previous);
        if($label)
    }
}


//You must create a class 'Exception\NotAllowedRoleException', that extends the \RuntimeException. 
//This exception must take, additionally to the constructor parameter, the list of allowed role label (as array) and the current unmatching label.
//The message of this exception MUST in every cases make an explicit reference to the allowed role label, as comma separated label list, 
//and an explicit reference to the mismatching label.
//The Model\Role class MUST be updated to throw the exception on setting a Role label that is not contained in the constants.
//$role = new Role(Role::ROLE_USER || Role::ROLE_ADMIN);