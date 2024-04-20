<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class PostsTable extends Table
{

    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('posts');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('PostAddress');
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->requirePresence('image', 'create')
            ->notEmptyFile('image');

        $validator
            ->scalar('type')
            ->maxLength('type', 255)
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        $validator
            ->scalar('note')
            ->maxLength('note', 255);

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');


        return $validator;
    }
    
    public function findCustom(Query $query, array $options)
    {
        $query->select(['id'])
              ->where(['status' => $options['status']])
              ->order(['name' => 'ASC']);

        return $query;
    }

}
