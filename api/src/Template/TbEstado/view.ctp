<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Estado'), ['action' => 'edit', $tbEstado->cd_estado]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Estado'), ['action' => 'delete', $tbEstado->cd_estado], ['confirm' => __('Are you sure you want to delete # {0}?', $tbEstado->cd_estado)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Estado'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Estado'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbEstado view large-9 medium-8 columns content">
    <h3><?= h($tbEstado->cd_estado) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nm Estado') ?></th>
            <td><?= h($tbEstado->nm_estado) ?></td>
        </tr>
        <tr>
            <th><?= __('Sg Estado') ?></th>
            <td><?= h($tbEstado->sg_estado) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Estado') ?></th>
            <td><?= $this->Number->format($tbEstado->cd_estado) ?></td>
        </tr>
    </table>
</div>
