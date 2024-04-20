<?php

namespace App\Model\Behavior;

use ArrayObject;
use Cake\ORM\Behavior;
use Cake\Event\EventInterface;
use Cake\Datasource\EntityInterface;

class PostAddressBehavior extends Behavior
{
        
    public function afterSave(EventInterface $event, EntityInterface $entity, ArrayObject $options)
    {
     
        if(!$entity->isNew()){
           return false;
        }
       
        $entity->address = $entity->state.' \ '.$entity->city.' \ '.$entity->district.' \ '.$entity->street.' \ '.$entity->numeral.' \ '.$entity->cep;

        $this->table()->save($entity);
        
    }   
}