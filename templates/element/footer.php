<?php

if(!empty($user)){
    $loginTitle = $user;
    $login = $this->Url->build(['controller' => 'Posts', 'action' => 'index']);
    
}else{
    $loginTitle = 'Área Restrita';
    $login = $this->Url->build(['controller' => 'Users', 'action' => 'login']);
}

?>

<nav class="navbar bg-primary navbar-fixed-bottom">
    <a> Grupo de engenharia da computação </a>
    <a style="color: white;" href=" <?= $login ?>"> <?= $loginTitle ?> </a>
</nav>