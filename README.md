# Micro Auth Plugin for CakePHP #

The Micro Auth plugin creates a set of pages that allow people to register in your CakePHP powered website. 

The included pages are: register form, login form, password reset form, verify token for password reset and profile form for edit account information. It also have two more features: an auto generated password system which generates and sends the first password to the user e-mail on registration (helping to avoid scam e-mail addresses and people impersonation) and automatic e-mails needed for the password reset system.

It's strongly based on the nice work of [Aidan Lister](http://aidanlister.com/). You can see his original [blog post](http://aidanlister.com/2009/05/creating-a-community-in-five-minutes-with-cakephp/) and grab the latest version of [his app in Github](https://github.com/aidanlister/cakecommunity)

It also use the [Gravatar Helper](https://github.com/hharnett/cakephp-gravatar-helper) by Hayden Harnett and the [CustomLayouts component](http://bakery.cakephp.org/articles/filippo.toso/2008/11/15/a-new-automagic-for-cakephp-layouts-with-the-customlayouts-component) by filippo.toso 

### Installation ###

1. Place the auth folder into any of your plugin directories for your app (for example app/plugins or cake/plugins)

2. Create database tables using either the schema shell or the SQL dump provided on `auth/config/schema/auth_plugin.sql`:
	`cake schema create -plugin auth`

3. That's it! Now you should be able to point your browser to http://your_app_url/auth/users/register, register your first user, and log in with the password provided to your e-mail (or "on screen" if you have `Configure::write('debug', 1);` or `Configure::write('debug', 2);` on your app/config/core.php) on http://your_app_url/auth/users/login.

### Optionals ###

If everything went well, you can now add a Login|Register/Welcome|Logout box in your layouts/views just using:

    echo $this->element('loginbox', array('plugin' => 'auth'));

You can also beautify your Micro Auth Routes adding the following to your `config/routes.php` file (then your URL will get rid of the ugly `auth` part, i.e.: http://your_app_url/users/register):

    /**
     * ...auth plugin route.
     */
    Router::connect('/users/:action/*', array('plugin' => 'auth', 'controller' => 'users'));

As the CustomLayouts component is included, you can easily customize your layouts and views (into your `app/views` folder, it won't work in the plugin `views` folder - yet -) following the following convention:

    * if exists, use the views/layouts/{controller}/{action}.ctp layout (`views/layouts/Users/{action}.ctp` in this case), otherwise
    * if exists, use the views/layouts/{controller}.ctp layout (`views/layouts/Users.ctp` in this case), otherwise
    * use the layout defined by the controller



## Requirements ##

* PHP version: PHP 5.x+ (must test on 4.x)
* CakePHP version: Cakephp 1.3 Stable (must test 1.2.x too)
