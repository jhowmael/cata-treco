<style>
    .container{
        width: 30%;
    }
</style>
<div class="row">
    <h2 class="text-center">Login</h2>

    <?= $this->Form->create() ?>
    <div class="col-mb-12">
        <label> Login </label>
        <legend><?= $this->Form->input('username', array('type' => 'text')) ?></legend>
    </div>
    <div class="col-mb-12">
        <label> Senha </label>
        <legend><?= $this->Form->input('password', array('type' => 'password')) ?></legend>
    </div>
    <div class="col-mb-12">
        <center>
            <?= $this->Form->button(__('Entrar')) ?>
        </center>
        <br>
    </div>
    <?= $this->Form->end() ?>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br>

