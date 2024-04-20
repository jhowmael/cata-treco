<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Post extends Entity
{
  
    protected $_accessible = [
        'image' => true,
        'type' => true,
        'note' => true,
        'name' => true,
        'number' => true,
        'email' => true,
        'address' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'city' => true,
        'district' => true,
        'state' => true,
        'reference' => true,
        'cep' => true,
        'numeral' => true,
        'finished' => true,
        'responsable' => true,
        'street' => true,
    ];
}
