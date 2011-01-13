<div id="auth-loginbox">
    <?php 
if($session->read('Auth.User.username')):
    printf( _('Hello, %1$s | %2$s'), $html->link( $session->read('Auth.User.username'), array( 'plugin' => 'auth', 'controller' => 'users', 'action' => 'account' )), $html->link( __('Logout', true), array( 'plugin' => 'auth', 'controller' => 'users', 'action' => 'logout' )));
else :
    printf( _('%1$s or %2$s'), $html->link( __('Login', true), array( 'plugin' => 'auth', 'controller' => 'users', 'action' => 'login' )), $html->link( __('Register', true), array( 'plugin' => 'auth', 'controller' => 'users', 'action' => 'register' )));
endif;
?> 
</div>
