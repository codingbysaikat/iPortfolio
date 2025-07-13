<?php
// Essential custom functions for this theme
// Display the first user name
$admins = get_users( array( 'role' => 'administrator' ) );
function display_first_user_name(){
	global $admins;
	if ( !empty( $admins ) ) {
    echo esc_html( $admins[0]->display_name );
}
}
// Display user profile discribtion
function display_first_user_description(){
	global $admins;
	if(!empty($admins)){
		$description = $admins[0]->description;
		return $description;
	}
	return "Error!";
}
// Display the user social media links 
function display_social_link($media){
	global $admins;
	if ( !empty( $admins ) ) {
		$user_id =  $admins[0]->id;
		$facebook  = get_the_author_meta($media, $user_id);
		if(!empty($facebook)){
           return $facebook;
		}     
	}
	return '#';
}
// Display the author image url
function display_author_img_url(){
	global $admins;
		if ( !empty( $admins ) ) {
		$author_id = $admins[0]->id;
		if(!empty($author_id)){
          $avatar_url = get_avatar_url( $author_id );
		  return $avatar_url;
		}     
	}
	return '#';
}
// display the widgets
function display_the_widget($id){
	if ( is_active_sidebar($id)){
          dynamic_sidebar($id);
	} else{
       return "error!";
	}
}