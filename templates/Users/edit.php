<center>
    <h4 class="heading"><?= __('Editar Usuário') ?></h4>
    <h5> <?= $user->name ?> </h5>
</center>

<?= $this->Form->create($user) ?>
<?php
echo $this->Form->control('staff', ['label' => 'Equipe']);
echo $this->Form->control('type', ['label' => 'Tipo de Usuário']);
?>
<br>
<center>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</center>
<br>

