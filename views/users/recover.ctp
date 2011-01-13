<h2><?php __('Password Reset'); ?></h2>
<div id="auth-recover">
    <p><?php __('Please, enter your username or e-mail. You will receive a message with the next step you must follow to reset your password.') ?></p>
<?php
echo $this->Form->create('User', array('action' => 'recover', array('id' => 'auth-recover-form')));
echo $this->Form->input('email', array('label' => __('Username or E-mail', true)));
echo $this->Form->end(__('Reset it, please', true));
?>
    <div id="auth-login-extra-links">
        <p>
            <?php echo $this->Html->link(__('Log in', true), array('plugin' => 'auth', 'controller' => 'users', 'action' => 'login')); ?> |
            <?php echo $this->Html->link(__('Create your account', true), array('plugin' => 'auth', 'controller' => 'users', 'action' => 'register')); ?>
        </p>
    </div>
</div>
