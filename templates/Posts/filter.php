<?php

$staff01 = $this->Url->build(['controller' => 'Posts', 'action' => 'filterIndex', 'staff', 'operacional01']);
$staff02 = $this->Url->build(['controller' => 'Posts', 'action' => 'filterIndex', 'staff', 'operacional02']);
$staff03 = $this->Url->build(['controller' => 'Posts', 'action' => 'filterIndex', 'staff', 'operacional03']);

$type01 = $this->Url->build(['controller' => 'Posts', 'action' => 'filterIndex', 'type', 'rubble']);
$type02 = $this->Url->build(['controller' => 'Posts', 'action' => 'filterIndex', 'type', 'general_trash']);
$type03 = $this->Url->build(['controller' => 'Posts', 'action' => 'filterIndex', 'type', 'electronic_trash']);
$type04 = $this->Url->build(['controller' => 'Posts', 'action' => 'filterIndex', 'type', 'furniture']);

$status01 = $this->Url->build(['controller' => 'Posts', 'action' => 'filterIndex', 'status', 'in_progress']);
$status02 = $this->Url->build(['controller' => 'Posts', 'action' => 'filterIndex', 'status', 'pending']);
$status03 = $this->Url->build(['controller' => 'Posts', 'action' => 'filterIndex', 'status', 'finished']);
$status04 = $this->Url->build(['controller' => 'Posts', 'action' => 'filterIndex', 'status', 'not_finished']);
$status05 = $this->Url->build(['controller' => 'Posts', 'action' => 'filterIndex', 'status', 'irregular_data']);
$status06 = $this->Url->build(['controller' => 'Posts', 'action' => 'filterIndex', 'status', 'postponed']);

?>

<center>
    <h4>Filtrar</h4>
</center>
<br>
<div class="container text-center">
    <div class="row">
        <div class="col-md-4">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-success text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <strong>Equipe</strong>
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="<?= $staff01 ?>">  OPERACIONAL01</a></li>
                    <li><a class="dropdown-item" href="<?= $staff02 ?>">  OPERACIONAL02</a></li>
                    <li><a class="dropdown-item" href="<?= $staff03 ?>">  OPERACIONAL03</a></li>
                </ul>
            </div>
        </div>  
        <div class="col-md-4">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-success text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <strong>Tipo</strong>
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="<?= $type01 ?>">  ENTULHO</a></li>
                    <li><a class="dropdown-item" href="<?= $type02 ?>">  LIXO GENERALIZADO</a></li>
                    <li><a class="dropdown-item" href="<?= $type03 ?>">  LIXO ELETRÔNICO</a></li>
                    <li><a class="dropdown-item" href="<?= $type04 ?>">  MÓVEIS</a></li>
                </ul>
            </div>
        </div>      
        <div class="col-md-4">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-success text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <strong>Situação</strong>
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="<?= $status01 ?>">  EM ANDAMENTO</a></li>
                    <li><a class="dropdown-item" href="<?= $status02 ?>">  PENDENTE</a></li>
                    <li><a class="dropdown-item" href="<?= $status03 ?>">  FINALIZADO</a></li>
                    <li><a class="dropdown-item" href="<?= $status04 ?>">  NÃO FINALIZADO</a></li>
                    <li><a class="dropdown-item" href="<?= $status05 ?>">  DADOS IRREGULARES</a></li>
                    <li><a class="dropdown-item" href="<?= $status06 ?>">  ADIADO</a></li>
                </ul>
            </div>
        </div>     
        <br><br><br>
    </div>   
</div>     