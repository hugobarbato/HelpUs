<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Cidade'), ['action' => 'edit', $tbCidade->cd_cidade]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Cidade'), ['action' => 'delete', $tbCidade->cd_cidade], ['confirm' => __('Are you sure you want to delete # {0}?', $tbCidade->cd_cidade)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Cidade'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Cidade'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbCidade view large-9 medium-8 columns content">
    <h3><?= h($tbCidade->cd_cidade) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nm Cidade') ?></th>
            <td><?= h($tbCidade->nm_cidade) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Cidade') ?></th>
            <td><?= $this->Number->format($tbCidade->cd_cidade) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Estado') ?></th>
            <td><?= $this->Number->format($tbCidade->cd_estado) ?></td>
        </tr>
    </table>
</div>
