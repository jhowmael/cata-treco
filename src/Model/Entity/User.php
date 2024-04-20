<?php
declare(strict_types=1);

namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher;

use Cake\ORM\Entity;

class User extends Entity
{

    protected $_accessible = [
        'name' => true,
        'username' => true,
        'password' => true,
        'email' => true,
        'number' => true,
        'created' => true,
        'modified' => true,
        'type' => true,
        'staff' => true,
    ];

    protected $_hidden = [
        'password',
    ];
    
    protected function _setPassword($password)
    {
        return(new DefaultPasswordHasher)->hash($password);
    }
}
