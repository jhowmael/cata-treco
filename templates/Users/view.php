<center>
    <h4 class="heading"><?= __('Usuário') ?></h4>
</center>
<table>
    <tr>
        <th><?= __('Name') ?></th>
        <td><?= h($user->name) ?></td>
    </tr>
    <tr>
        <th><?= __('Username') ?></th>
        <td><?= h($user->username) ?></td>
    </tr>
    <tr>
        <th><?= __('Email') ?></th>
        <td><?= h($user->email) ?></td>
    </tr>
    <tr>
        <th><?= __('Number') ?></th>
        <td><?= h($user->number) ?></td>
    </tr>
    <tr>
        <th><?= __('Id') ?></th>
        <td><?= $this->Number->format($user->id) ?></td>
    </tr>
    <tr>
        <th><?= __('Tipo') ?></th>
        <?php if(!empty($types[$user->type])):?>
            <td><?= $types[$user->type] ?></td>
        <?php else: ?>
            <td></td>
        <?php endif; ?>
    </tr>

    <tr>
        <th><?= __('Equipe') ?></th>
        <?php if(!empty($staffs[$user->staff])):?>
            <td><?= $staffs[$user->staff] ?></td>
        <?php else: ?>
            <td></td>
        <?php endif; ?>
    </tr>
    <tr>
        <th><?= __('Created') ?></th>
        <td><?= h($user->created) ?></td>
    </tr>
    <tr>
        <th><?= __('Modified') ?></th>
        <td><?= h($user->modified) ?></td>
    </tr>
</table>
