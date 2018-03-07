<?php
namespace Exception;

class NotAllowedRoleException extends \RuntimeException
{
    private $allowedSet;
    private $label;
    private $currentUnmatchingLabel;
    
    public function __construct (
        array $allowedSet,
        string $label,
        $message = null,
        $code = null,
        $previous = null
        ){
        
           $this->$allowedSet = $currentUnmatchingLabel;
           $this->label = $label;
           
           $cause = 'The label '.$label.' is not allowed.';
           $allowedMessage = 'Only ' . implode(',', $allowedSet).' are allowed.';
        
        parent::__construct($message, $code, $previous);
        
                     
    }
    
}


//The message of this exception MUST in every cases make an explicit reference to the allowed role label, as comma separated label list, 
//and an explicit reference to the mismatching label.
//The Model\Role class MUST be updated to throw the exception on setting a Role label that is not contained in the constants.
