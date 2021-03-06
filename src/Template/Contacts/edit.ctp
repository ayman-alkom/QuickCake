<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
    <ul class="nav nav-sidebar">
        <li><?=
            $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contact->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]
            )
            ?></li>
        <li><?= $this->Html->link(__('Contacts Listesi'), ['action' => 'index']) ?></li>
    </ul>
<?php $this->end(); ?>
<?= $this->Form->create($contact); ?>
    <fieldset>
        <legend><?= __('Edit {0}', ['Contact']) ?></legend>
        <?php
        echo $this->Form->input('name');
        echo $this->Form->input('adres');
        echo $this->Form->input('tel');
        echo $this->Form->input('fax');
        echo $this->Form->input('web');
        echo $this->Form->input('email');
        ?>
    </fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>