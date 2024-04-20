<center>
    <h4 class="heading"><?= __('Editar Usuário') ?></h4>
    <h5> <?= $user->name ?> </h5>
</center>

<?= $this->Form->create($user) ?>
<?php
echo $this->Form->control('password', ['label' => 'Senha']);
echo $this->Form->control('email', ['label' => 'E-mail']);
echo $this->Form->control('number', ['label' => 'Telefone']);
?>
<br>
<center>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</center>
<br>

