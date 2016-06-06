<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Endereco'), ['action' => 'edit', $tbEndereco->cd_endereco]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Endereco'), ['action' => 'delete', $tbEndereco->cd_endereco], ['confirm' => __('Are you sure you want to delete # {0}?', $tbEndereco->cd_endereco)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Endereco'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Endereco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbEndereco view large-9 medium-8 columns content">
    <h3><?= h($tbEndereco->cd_endereco) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Cd Cep') ?></th>
            <td><?= h($tbEndereco->cd_cep) ?></td>
        </tr>
        <tr>
            <th><?= __('Nm Endereco') ?></th>
            <td><?= h($tbEndereco->nm_endereco) ?></td>
        </tr>
        <tr>
            <th><?= __('Nm Numero') ?></th>
            <td><?= h($tbEndereco->nm_numero) ?></td>
        </tr>
        <tr>
            <th><?= __('Nm Complemento') ?></th>
            <td><?= h($tbEndereco->nm_complemento) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Endereco') ?></th>
            <td><?= $this->Number->format($tbEndereco->cd_endereco) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Instituicao') ?></th>
            <td><?= $this->Number->format($tbEndereco->cd_instituicao) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Bairro') ?></th>
            <td><?= $this->Number->format($tbEndereco->cd_bairro) ?></td>
        </tr>
        <tr>
            <th><?= __('Cd Usuario') ?></th>
            <td><?= $this->Number->format($tbEndereco->cd_usuario) ?></td>
        </tr>
    </table>
</div>
