<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Bairro'), ['action' => 'edit', $tbBairro->cd_bairro]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Bairro'), ['action' => 'delete', $tbBairro->cd_bairro], ['confirm' => __('Are you sure you want to delete # {0}?', $tbBairro->cd_bairro)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Bairro'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Bairro'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbBairro view large-9 medium-8 columns content">
    <h3><?= h($tbBairro->cd_bairro) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nm Bairro') ?></th>
            <td><?= h($tbBairro->nm_bairro) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Bairro') ?></th>
            <td><?= $this->Number->format($tbBairro->cd_bairro) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Cidade') ?></th>
            <td><?= $this->Number->format($tbBairro->cd_cidade) ?></td>
        </tr>
    </table>
</div>
