<h3><?= 'Solicitações' ?></h3>

<table class="table table-white table-hover">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id', ['label' => 'Código']) ?></th>
            <th><?= $this->Paginator->sort('type', ['label' => 'Tipo']) ?></th>
            <th><?= $this->Paginator->sort('name', ['label' => 'Solicitante']) ?></th>
            <th><?= $this->Paginator->sort('responsable', ['label' => 'Equipe']) ?></th>
            <th><?= $this->Paginator->sort('status', ['label' => 'Status']) ?></th>
            <th><?= $this->Paginator->sort('created', ['label' => 'Data da Solicitação']) ?></th>
            <th><?= 'Ações' ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($posts as $post): ?>
            <tr>
                <?php if ($post->responsable): ?>
                    <td><?= $this->Number->format($post->id) ?></td>
                    <td><?= $types[$post->type] ?></td>
                    <td><?= h($post->name) ?></td>
                    <?php if (!empty($staff[$post->responsable])): ?>
                        <td><?= $staff[$post->responsable] ?></td>
                    <?php else: ?>
                        <td></td>
                    <?php endif; ?>
                    <td><?= $status[$post->status] ?></td>
                    <td><?= h($post->created) ?></td>
                    <td class="actions">
                        <i class="fa-solid fa-magnifying-glass"></i><?= $this->Html->link('Visualizar', ['action' => 'view', $post->id]) ?>
                        <?php if ($post->status == 'in_progress'): ?>
                            <i class="fa-solid fa-check"></i><?= $this->Html->link('Executar', ['action' => 'edit', $post->id]) ?>
                        <?php endif; ?>
                    </td>
                <?php endif; ?>
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
