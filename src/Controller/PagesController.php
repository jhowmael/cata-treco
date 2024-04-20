<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use Cake\Datasource\FactoryLocator;


class PagesController extends AppController
{
    
    public function display(string ...$path): ?Response
    {
        if (!$path) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            return $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }
    
    public function home()
    {
        $action = 'home';
        
        $this->set(compact('action'));

    }
    
    public function contact()
    {
        $action = 'contact';
        
        $this->set(compact('action'));
    }
    
    public function login()
    {
        $action = 'login';
        
        $this->set(compact('action'));
    }
    
    public function doubts()
    {
        $action = 'doubts';
        
        $this->set(compact('action'));
    }
}
