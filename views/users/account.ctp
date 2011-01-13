<h2><?php __('Account Page'); ?></h2>
<div id="auth-account">
    <p><?php printf(__('You last logged in %s.', true), $this->data['User']['lastlogin']); ?></p>
    
<?php 
echo $this->Form->create(array('action' => 'account', array('id' => 'auth-account-form')));
?>
    <div id="auth-account-info">
        <h3><?php __('Account Info') ?></h3>
<?php
echo $this->Form->input('User.username', array('label' => __('Username', true)));
echo $this->Form->input('User.email', array('label' => __('E-mail', true)));
?>
    </div>

<?php 
if($gravatar_data['active'] == true){
?>
    <div id="auth-account-gravatar">
        <h3><?php __('Your Current Avatar'); ?></h3>
        <?php echo $gravatar->image($this->data['User']['email'], array('size' => $gravatar_data['size'], 'rating' => $gravatar_data['rating']), array('alt' => __('Sidebar Avatar', true), 'width' => $gravatar_data['size'], 'height' => $gravatar_data['size']));?>
        <p><?php __('Your avatar is managed by Gravatar.com. If you want to make changes, you should go to <a href="http://en.gravatar.com/emails/">their website</a>.'); ?></p>
    </div>
<?php 
}
?>

    <div id="auth-account-changepassword"></div>
        <h3><?php __('Change your password'); ?></h3>
<?php
echo $this->Form->input('User.password_old',     array('label' => __('Old password', true), 'type' => 'password', 'autocomplete' => 'off'));
echo $this->Form->input('User.password_confirm', array('label' => __('New password', true), 'type' => 'password', 'autocomplete' => 'off'));
echo $this->Form->input('User.password',         array('label' => __('Re-enter new password', true), 'type' => 'password', 'autocomplete' => 'off'));
?>
    </div>
<?php
echo $this->Form->end(__('Update account', true));
?>
</div>