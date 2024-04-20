<?php
declare(strict_types=1);

namespace App\Controller;

class PostsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
       
        /*
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
        */
    }
    
    public function index()
    {
        $posts = $this->paginate($this->Posts);
        
        $status = array(
            'in_progress' => 'EM ANDAMENTO',
            'pending' => 'PENDENTE',
            'finished' => 'FINALIZADO',
            'not_finished' => 'NÃO FINALIZADO',
            'irregular_data' => 'DADOS IRREGULARES',
            'postponed' => 'ADIADO',
        );
        
        $types = array(
            'rubble' => 'ENTULHO',
            'general_trash' => 'LIXO GENERALIZADO',
            'electronic_trash' => 'LIXO ELETRÔNICO',
            'furniture' => 'MÓVEIS',
        );
        
        $staff = array (
            'operacional01' => 'OPERACIONAL01',
            'operacional02' => 'OPERACIONAL02',
            'operacional03' => 'OPERACIONAL03',
        );

        $this->set(compact('posts', 'status', 'types', 'staff'));
    }
    
    public function operationIndex($responsable = null)
    {
        $posts = $this->paginate($this->Posts);
        
        $status = array(
            'in_progress' => 'EM ANDAMENTO',
            'pending' => 'PENDENTE',
            'finished' => 'FINALIZADO',
            'not_finished' => 'NÃO FINALIZADO',
            'irregular_data' => 'DADOS IRREGULARES',
            'postponed' => 'ADIADO',
        );
        
        $types = array(
            'rubble' => 'ENTULHO',
            'general_trash' => 'LIXO GENERALIZADO',
            'electronic_trash' => 'LIXO ELETRÔNICO',
            'furniture' => 'MÓVEIS',
        );
        
        $staff = array (
            'operacional01' => 'OPERACIONAL01',
            'operacional02' => 'OPERACIONAL02',
            'operacional03' => 'OPERACIONAL03',
        );

        $this->set(compact('posts', 'status', 'types', 'staff', 'responsable'));
    }
    
    public function filter()
    {
    }
    
    public function filterIndex($mode = null, $filter = null)
    {
        $posts = $this->paginate($this->Posts);
        
        $status = array(
            'in_progress' => 'EM ANDAMENTO',
            'pending' => 'PENDENTE',
            'finished' => 'FINALIZADO',
            'not_finished' => 'NÃO FINALIZADO',
            'irregular_data' => 'DADOS IRREGULARES',
            'postponed' => 'ADIADO',
        );
        
        $types = array(
            'rubble' => 'ENTULHO',
            'general_trash' => 'LIXO GENERALIZADO',
            'electronic_trash' => 'LIXO ELETRÔNICO',
            'furniture' => 'MÓVEIS',
        );
        
        $staff = array (
            'operacional01' => 'OPERACIONAL01',
            'operacional02' => 'OPERACIONAL02',
            'operacional03' => 'OPERACIONAL03',
        );

        $this->set(compact('posts', 'status', 'types', 'staff', 'mode', 'filter'));
    }
    
    public function view($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => [],
        ]);

        $types = array(
            'rubble' => 'ENTULHO',
            'general_trash' => 'LIXO GENERALIZADO',
            'electronic_trash' => 'LIXO ELETRÔNICO',
            'furniture' => 'MÓVEIS',
        );
        
        $status = array(
            'in_progress' => 'EM ANDAMENTO',
            'pending' => 'PENDENTE',
            'finished' => 'FINALIZADO',
            'not_finished' => 'NÃO FINALIZADO',
            'irregular_data' => 'DADOS IRREGULARES',
            'postponed' => 'ADIADO',
        );
        
        $this->set(compact('post', 'types', 'status'));
    }

    public function add()
    {
        $action = 'add';
        
        $this->set(compact('action'));
        
        $post = $this->Posts->newEmptyEntity();    

        if ($this->request->is('post')) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());

            if(!$post->getErrors)
            {
             
                $image = $this->request->getData('image');

                $name = $image->getClientFilename();

                $targetPath = 'img'.DS.$name;
                if($image)
                {
                    $image->moveTo($targetPath);
                }

                $post->image = $name;
            }
            
            
            if ($this->Posts->save($post)) {
                $this->Flash->success('Sua solicitação foi enviada, o seu código para acompanhamento é:'.$post->id);

                return $this->redirect(['controller' => 'Pages', 'action' => 'home']);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
        }
        
        $types = array(
            'rubble' => 'ENTULHO',
            'general_trash' => 'LIXO GENERALIZADO',
            'electronic_trash' => 'LIXO ELETRÔNICO',
            'furniture' => 'MÓVEIS',
        );
        
        $city = array ('São Vicente' => 'SÃO VICENTE');

        $state = array ('São Paulo' => 'SÃO PAULO');
                
        $districts = array (
            'Beira Mar' => 'BEIRA MAR',
            'Boa Vista' => 'BOA VISTA',
            'Catiapoã' => 'CATIAPOA',
            'Centro' => 'CENTRO',
            'Cidade Náutica' => 'CIDADE NAUTICA',
            'Esplanada dos Barreiros' => 'ESPLANADA DOS BARREIROS',
            'Gonzaguinha' => 'GONZAGINHA',
            'Humaitá' => 'HUMAITA',
            'Itararé' => 'ITARARE',
            'Japuí' => 'JAPUI',
            'Jardim Guaçu' => 'JARDIM GUAÇU',
            'Jardim Independência' => 'JARDIM INDEPENDENCIA',
            'Jardim Irmã Dolores' => 'JARDIM IRMÃ DOLORES',
            'Jardim Rio Branco' => 'JARDIM RIO BRANCO',
            'Jockey Club' => 'JOCKEY CLUB',
            'Nova São Vicente' => 'NOVA SÃO VICENTE',
            'Parque Bitaru' => 'PARQUE BITARU',
            'Parque Continental' => 'PARQUE CONTINENTAL',
            'Parque das Bandeiras' => 'PARQUE DAS BANDEIRAS',
            'Parque São Vicente' => 'PARQUE SÃO VICENTE',
            'Samaritá' => 'SAMARITA',
            'Vila Ema' => 'VILA EMA',
            'Vila Margarida' => 'VILA MARGARIDA',
            'Vila Melo' => 'VILA MELO',
            'Vila Nossa Senhora de Fátima ou Vila Fátima' => 'NOSSA SENHORA DE FATIMA',
            'Vila Nova Mariana' => 'VILA NOVA MARIANA',
            'Vila São Jorge' => 'SÃO JORGE',
            'Vila Valença' => 'VILA VALENÇA',
            'Vila Voturuá' => 'VILA VOTURÚA',
        );
        $this->set(compact('post', 'types', 'state',  'city', 'districts'));
    }

    public function edit($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('The post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
        }
        
        $types = array(
            'rubble' => 'ENTULHO',
            'general_trash' => 'LIXO GENERALIZADO',
            'electronic_trash' => 'LIXO ELETRÔNICO',
            'furniture' => 'MÓVEIS',
        );
        
        $status = array(
            'pending' => 'PENDENTE',
            'finished' => 'FINALIZADO',
            'not_finished' => 'NÃO FINALIZADO',
            'irregular_data' => 'DADOS IRREGULARES',
            'postponed' => 'ADIADO',
        );
        
        $this->set(compact('post', 'types', 'status'));
    }

    public function define($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('The post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
        }
        
        $staffs = array(
            'operacional01' => 'OPERACIONAL01',
            'operacional02' => 'OPERACIONAL02',
            'operacional03' => 'OPERACIONAL03',
        );
        
        $this->set(compact('post', 'staffs'));
    }
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $post = $this->Posts->get($id);
        if ($this->Posts->delete($post)) {
            $this->Flash->success(__('The post has been deleted.'));
        } else {
            $this->Flash->error(__('The post could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
