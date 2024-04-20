<center>
    <h4 class="heading"><?= __('Executar Trabalho') ?></h4>
</center>

<?= $this->Form->create($post) ?>
<?php
echo $this->Form->control('status', ['options' => $status]);
echo $this->Form->control('finished', ['type' => 'hidden', 'value' => '']);
?>
<br>
<center>
        <?= $this->Form->button(__('Enviar')) ?>
</center>
<br>
<?= $this->Form->end() ?>
       