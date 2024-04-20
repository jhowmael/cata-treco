<center>
    <h4 class="heading"><?= __('NOVO USUÁRIO') ?></h4>
</center>
<?= $this->Form->create($user) ?>
<fieldset>
    <?php
    echo $this->Form->control('name', ['label' => 'Nome']);
    echo $this->Form->control('username', ['label' => 'Login']);
    echo $this->Form->control('password', ['label' => 'Senha']);
    echo $this->Form->control('type', ['label' => 'Tipo de Usuário']);
    echo $this->Form->control('staff', ['label' => 'Equipe']);
    echo $this->Form->control('email', ['label' => 'Email']);
    echo $this->Form->control('number', ['label' => 'Telefone']);
    ?>
</fieldset>
<br>
<center>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</center>
<br>