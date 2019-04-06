<?php  
/** 
 * Template Name: login page 
 */  
 get_header();   
   
   
if($_POST) 
{  
   
    global $wpdb;  
   
    //We shall SQL escape all inputs  
    $username = $wpdb->escape($_REQUEST['username']);  
    $password = $wpdb->escape($_REQUEST['password']);  
    $remember = $wpdb->escape($_REQUEST['rememberme']);  
   
    if($remember) $remember = "true";  
    else $remember = "false";  
   
    $login_data = array();  
    $login_data['user_login'] = $username;  
    $login_data['user_password'] = $password;  
    $login_data['remember'] = $remember;  
   
    $user_verify = wp_signon( $login_data, false );   
   
    if ( is_wp_error($user_verify) )   
    {  
        echo "Invalid login details";  
       // Note, I have created a page called "Error" that is a child of the login page to handle errors. This can be anything, but it seemed a good way to me to handle errors.  
     } else
    {    
       echo "<script type='text/javascript'>window.location.href='". home_url('page_id=6') ."'</script>";  
       exit();  
     }  
   
} else 
{  
   
    // No login details entered - you should probably add some more user feedback here, but this does the bare minimum  
   
    //echo "Invalid login details";  
   
}  
 ?>  
  
<form id="login1" name="form" action="<?php echo home_url(); ?>/login/" method="post">  
  
        <input id="username" type="text" placeholder="Username" name="username"><br>  
        <input id="password" type="password" placeholder="Password" name="password">  
        <input id="submit" type="submit" name="submit" value="Submit">  
</form>    
<?php get_footer(); ?> 