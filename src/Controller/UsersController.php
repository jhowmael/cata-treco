<?php
declare(strict_types=1);

namespace App\Controller;

class UsersController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        
                $this->loadComponent('Auth');

        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'username',
                        'password' => 'password',
                    ]
                ]
            ],
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
        ]);

    }
  
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $staffs = array(
            'adiministrativa' => 'ADIMINISTRATIVA',
            'operational01' => 'OPERACIONAL01',
            'operational02' => 'OPERACIONAL02',
            'operational03' => 'OPERACIONAL03',
        );
        
        $types = array(
            'admin' => 'ADIMIN',
            'operation' => 'OPERAÇÂO',
        );

        $this->set(compact('user', 'types', 'staffs'));
    }

    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        
        $staffs = array(
            'adiministrativa' => 'ADIMINISTRATIVA',
            'operacional01' => 'OPERACIONAL01',
            'operacional02' => 'OPERACIONAL02',
            'operacional03' => 'OPERACIONAL03',
        );
        
        $types = array(
            'admin' => 'ADIMIN',
            'operation' => 'OPERAÇÂO',
        );

        $this->set(compact('user', 'staffs', 'types'));
    }

    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        
        $staffs = array(
            'adiministrativa' => 'ADIMINISTRATIVA',
            'operacional01' => 'OPERACIONAL01',
            'operacional02' => 'OPERACIONAL02',
            'operacional03' => 'OPERACIONAL03',
        );
        
        $types = array(
            'admin' => 'ADIMIN',
            'operation' => 'OPERAÇÂO',
        );

        $this->set(compact('user', 'staffs', 'types'));
    }

    public function editUser($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        
        $staffs = array(
            'adiministrativa' => 'ADIMINISTRATIVA',
            'operacional01' => 'OPERACIONAL01',
            'operacional02' => 'OPERACIONAL02',
            'operacional03' => 'OPERACIONAL03',
        );
        
        $types = array(
            'admin' => 'ADIMIN',
            'operation' => 'OPERAÇÂO',
        );

        $this->set(compact('user', 'staffs', 'types'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function login()
    {
        if($this->request->is('post')){
            $user = $this->Auth->identify(); 
            if($user){
                $this->Auth->setUser($user);
                return $this->redirect(['controller' => 'Pages', 'action'=> 'home']);
            }
            $this->Flash->error('Erro: A Senha, ou login estão Incorretos');
        }
    }
    
    public function filter()
    {

    }
    public function indexFilter()
    {
        
    }
}
