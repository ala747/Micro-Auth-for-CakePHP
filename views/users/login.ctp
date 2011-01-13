<h2><?php __('Log in') ?></h2>
<div id="auth-login">
<?php
echo $this->Form->create(array('action' => 'login', 'id' => 'auth-login-form'));
echo $this->Form->input('username', array('label' => __('Username', true)));
echo $this->Form->input('password', array('label' => __('Password', true)));
echo $this->Form->end(__('Log in', true));
?>
    <div id="auth-login-extra-links">
        <p>
            <?php echo $this->Html->link(__('Lost your password?', true), array('plugin' => 'auth', 'controller' => 'users', 'action' => 'recover')); ?> |
            <?php echo $this->Html->link(__('Create your account', true), array('plugin' => 'auth', 'controller' => 'users', 'action' => 'register')); ?>
        </p>
    </div>
</div>