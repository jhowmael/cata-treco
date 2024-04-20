<h3><?= 'Usuários' ?></h3>

<table class="table table-white table-hover">
    <thead>
        <tr>
            <h4><th colspan="8" style="text-align: right;"><?= $this->Html->link('Novo Usuário', ['action' => 'add']) ?></th></h4>
        </tr>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('username') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th><?= $this->Paginator->sort('number') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th><?= 'Ações' ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->name) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->number) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td class="actions">
                    <i class="fa-solid fa-magnifying-glass"></i><?= $this->Html->link('Visualizar', ['action' => 'view', $user->id]) ?>
                    <i class="fa-solid fa-pencil"></i></i><?= $this->Html->link('Editar', ['action' => 'edit', $user->id]) ?>
                    <i class="fa-solid fa-x"></i></i><?= $this->Html->link('Excluir', ['action' => 'delete', $user->id]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) total: {{count}}')) ?></p>

<div class="row">
    <div class="col-10">
    </div>
    <div class="col-2">
        <table class="table table-white table-hover">
            <tr style="list-style: none;">
                <th><?= $this->Paginator->first('<<') ?></th>
                <th><?= $this->Paginator->prev('< ') ?></th>
                <th><?= $this->Paginator->numbers() ?></th>
                <th><?= $this->Paginator->next(' >') ?></th>
                <th><?= $this->Paginator->last(' >>') ?></th>
            </tr>
        </table>
    </div>
</div>

