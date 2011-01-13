<h2><?php __('Create your Account') ?></h2>
<div id="auth-register">
    <p><?php __('Please, enter your desired Username and an E-mail account. A password will be e-mailed to you.') ?></p>
<?php
echo $this->Form->create(array('action' => 'register', array('id' => 'auth-register-form')));
echo $this->Form->input('username', array('label' => __('Username', true)));
echo $this->Form->input('email', array(
    'label' => __('E-mail', true),
    'error' => array(
        'unique' => sprintf(__('Already taken. Did you %s', true), $html->link(__('lost your password?', true), array('plugin' => 'auth', 'controller' => 'users', 'action' => 'recover'))), 
        'escape' => false
    )
));
echo $this->Form->end(__('Register', true));
?>
    <div id="auth-login-extra-links">
        <p>
            <?php echo $this->Html->link(__('Log in', true), array('plugin' => 'auth', 'controller' => 'users', 'action' => 'login')); ?> |
            <?php echo $this->Html->link(__('Lost your password?', true), array('plugin' => 'auth', 'controller' => 'users', 'action' => 'recover')); ?>
        </p>
    </div>
</div>

