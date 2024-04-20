<center>
    <h4 class="heading"><?= __('Definir Equipe Respostavel') ?></h4>
</center>
<?= $this->Form->create($post) ?>
<?php
echo $this->Form->control('responsable', ['label' => 'Equipe', 'options' => $staffs]);
?>
<br>

<?= $this->Form->control('status', ['type' => 'hidden', 'value' => 'in_progress']); ?>

<center>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</center>
<br>