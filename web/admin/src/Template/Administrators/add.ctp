<div class="administrators form large-9 medium-8 columns content">
    <?= $this->Html->link(__('Quay lại'), ['action' => 'index']) ?>
    <?= $this->Form->create($administrator) ?>
    <fieldset>
        <legend><?= __('Khách hàng mới') ?></legend>
        <?php
        echo $this->Form->input('name');
        echo $this->Form->input('password');
        echo $this->Form->input('fullname');
        echo $this->Form->input('email');
        echo $this->Form->input('phone');
        echo $this->Form->input('address', ['class'=> 'input', 'type' => 'text']);
        echo $this->Form->input('status');
        // echo $this->Form->input('role');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
