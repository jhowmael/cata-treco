<?= $this->Form->create($post, ['type' => 'file']) ?>
    <form>
        <div class="row">
            <div class="col-12">
                <h1><?= __('Formulário de Solicitação') ?></h1>
            </div>
            <div class="col-12">
                <hr>
            </div>
            <div class="col-12">
                <label> Imagem </label>
                <?= $this->Form->control('image', ['label' => false, 'type' => 'file']) ?>
            </div>
            <div class="col-12">
                <label> Tipo </label>
                <?= $this->Form->control('type', ['label' => false, 'options' => $types]) ?>
            </div>
            <div class="col-4">
                <label> Estado </label>
                <?= $this->Form->control('state', ['label' => false, 'options' => $state]) ?>
            </div>
            <div class="col-4">
                <label> Cidade </label>
                <?= $this->Form->control('city', ['label' => false, 'options' => $city]) ?>
            </div>
            <div class="col-4">
                <label> Bairro </label>
                <?= $this->Form->control('district', ['label' => false, 'options' => $districts]) ?>
            </div>
            <div class="col-4">
                <label> Rua </label>
                <?= $this->Form->control('street', ['label' => false]) ?>
            </div>
            <div class="col-4">
                <label> Numero </label>
                <?= $this->Form->control('numeral', ['label' => false, 'placeholder' => 'Esse campo não é obrigatório para locais públicos']) ?>
            </div>
            <div class="col-4">
                <label> CEP </label>
                <?= $this->Form->control('cep', ['label' => false]) ?>
            </div>
            <div class="col-12">
                <label> Ponto de referência </label>
                 <?= $this->Form->control('reference', ['label' => false]) ?>
            </div>
            <div class="col-4">
                <label> Solicitante </label>
                 <?= $this->Form->control('name', ['label' => false, 'placeholder' => 'Digite seu nome']) ?> 
            </div>
            <div class="col-4">
                <label> Telefone </label>
                 <?= $this->Form->control('number', ['label' => false, 'placeholder' => 'Digite seu telefone']) ?> 
            </div>
            <div class="col-4">
                <label> E-mail </label>
                 <?= $this->Form->control('email', ['label' => false, 'placeholder' => 'Digite seu E-mail']) ?> 
            </div>
            <div class="col-12">
                <label> Observação </label>
                 <?= $this->Form->control('note', ['label' => false]) ?> 
            </div>

            <?= $this->Form->control('status', ['type' => 'hidden', 'value' => 'pending']); ?>
            </div>
        <br>
        <br>
        <center>
            <?= $this->Form->button(__('Enviar')) ?>
        </center>
        <br>
    </form>
<?= $this->Form->end() ?>