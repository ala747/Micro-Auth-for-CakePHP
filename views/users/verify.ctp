<h2><?php __('Password Reset'); ?></h2>
<div id="auth-verify">
<?php if (isset($success)): ?>
    <div class="message"><?php __("Access verified. Your new password has been emailed to you."); ?></div>
    <p><?php __("A new password has been generated for your account and mailed to you. After you've logged in, you should change your password to something memorable via the account information page."); ?></p>
<?php else: ?>
    <div class="warning"><?php __("Invalid token. This page has expired, or the link was not copied from your email client correctly."); ?></div>
    <p><?php __("Make sure you have copied the entire link correctly, pasting it together if the link was split over two lines. If you're copying the link correctly and still can't get access, please contact us."); ?></p>
<?php endif; ?>
    <div id="auth-login-extra-links">
        <p>
            <?php echo $this->Html->link(__('Log in', true), array('plugin' => 'auth', 'controller' => 'users', 'action' => 'login')); ?> |
            <?php echo $this->Html->link(__('Create your account', true), array('plugin' => 'auth', 'controller' => 'users', 'action' => 'register')); ?>
        </p>
    </div>
</div>