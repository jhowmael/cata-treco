<?php
$home = $this->Url->build(['controller' => 'Pages', 'action' => 'home']);
$post = $this->Url->build(['controller' => 'Posts', 'action' => 'add']);
$contact = $this->Url->build(['controller' => 'Pages', 'action' => 'contact']);
$doubts = $this->Url->build(['controller' => 'Pages', 'action' => 'doubts']);

if(!empty($user)){
  $loginTitle = $userName;
  $login = $this->Url->build(['controller' => 'Users', 'action' => 'login']);
  $editUser = $this->Url->build(['controller' => 'Users', 'action' => 'editUser', $userId]);
  
}else{
  $loginTitle = 'Área Restrita';
  $login = $this->Url->build(['controller' => 'Users', 'action' => 'login']);
}

?>

<div class="container-fluid">
  <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 280px;">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <img src="webroot/img/logo.png" alt="" width="60%"/>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <?php if (!empty($action) && $action == 'home'): ?>
           
            <a href="<?= $home ?>" class="nav-link active" aria-current="page">  <i class="fa-solid fa-house"></i> Home </a>
          <?php else: ?>
            <a href="<?= $home ?>" class="nav-link" aria-current="page"> <i class="fa-solid fa-house"></i> Home </a>
          <?php endif; ?>
        </li>
        <li>
        <?php if (!empty($action) &&  $action == 'add'): ?>
            <a href="<?= $post ?>" class="nav-link active" aria-current="page"><i class="fa-solid fa-scroll"></i> Solicitar </a>
        <?php else: ?>
            <a href="<?= $post ?>" class="nav-link" aria-current="page"><i class="fa-solid fa-scroll"></i>  Solicitar </a>
        <?php endif; ?>
        </li>
        <li>
        <?php if (!empty($action) && $action == 'contact'): ?>
            <a href="<?= $contact ?>" class="nav-link active" aria-current="page"> <i class="fa-solid fa-phone"></i> Contato</a>
        <?php else: ?>
            <a href="<?= $contact ?>" class="nav-link" aria-current="page"> <i class="fa-solid fa-phone"></i> Contato</a>
        <?php endif; ?>
        </li>
      </ul>
      <hr>
      <div class="dropdown">
          <a href="#" class="d-flex align-items-center link-success text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-lock"></i>
          <strong>&ensp; <?= $loginTitle ?></strong>
          </a>
          <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
            <?php if(empty($user)): ?>
                <li><a class="dropdown-item" href="<?= $login ?>"> <i class="fa-solid fa-user-plus"></i> Login</a></li>
            <?php endif; ?>
            <?php if(!empty($user)): ?>
              <li><a class="dropdown-item" href="<?= $login ?>"> <i class="fa-solid fa-user-minus"></i> Lougout</a></li>
            <?php endif; ?>
            <?php if(!empty($user)): ?>
                <li><a class="dropdown-item" href="<?= $editUser ?>"> <i class="fa-solid fa-user-gear"></i> Editar Conta</a></li>
            <?php endif; ?>
          </ul>
      </div>
    </div>
  </div>