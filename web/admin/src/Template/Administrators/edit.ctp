<ul class="side-nav">
    <li class="heading"><?= __('Actions') ?></li>
    
    <li><?= $this->Html->link(__('Quay lại'), ['action' => 'index']) ?></li>
</ul>
<div class="administrators form large-9 medium-8 columns content">
    <?= $this->Form->create($administrator) ?>
    <fieldset>
        <legend><?= __('Sửa thông tin') ?></legend>
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
