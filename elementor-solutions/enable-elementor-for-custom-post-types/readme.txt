*****************
Author: Enumbin *
Date: 28/8/2020 *
V: 1.0.0        *
*****************

We build pages with elementor. We also create awesome contents for posts, custom posts etc. But to edit custom post content we need to enable it from elementor settings. 

Here is the solution which let's you enable elementor for your custom post type automatically.

You just call the function given in the files and it will work. It is better to use it on some hook since you dont want to access database everytime. You just want this settings to change when you activate your plugin, or switch theme or activate theme.

Example: 
1. register_activation_hook( 'plugin-name', 'the_function' );
2. add_action( 'after_switch_theme', 'the_function' );
3. add_action( 'after_setup_theme', 'the_function' );
etc.

In my case I did it o my plugin activation. I showed the example for both OOP and Procedural approcah.

Check it out.

Courtesy:
https://smartdatasoft.com/
https://wordpress.org/support/users/pingram3541/

Thank You
Enumbin
enumbin@gmail.com
Dhaka, Bangladesh

