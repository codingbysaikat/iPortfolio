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
// Display the Taglines 
function display_the_taglines(){
	$taglines = carbon_get_theme_option('crb_taglines');
	$tagline_array = array();
	if (!empty($taglines)) {
    foreach ($taglines as $tagline) {
        if (!empty($tagline['tagline'])) {
            $tagline_array[] = $tagline['tagline'];
        }
    }
      echo join(", ", $tagline_array);
    } else {
    echo 'No taglines found.';
    }
}

// Display the Carbon Fields text meta 
function display_carbon_text_meta($meta_id){
	$value = carbon_get_theme_option($meta_id);
	if (!empty($value)) {
    return $value;
    }
}

// Display the skill items
function display_first_part_skill_items(){
	$skills = carbon_get_theme_option('crb_skills');
	$total_skills = is_array($skills) ? count($skills) : 0;
	$mid_skill = $total_skills/2;
	$count = 0;
	if(!empty($skills)){
		foreach ($skills as $skill_item) {
			$count++;
			if($count <= $mid_skill){
			$skill_name = isset($skill_item['skill']) ? $skill_item['skill'] : '';
			$skill_percent = isset($skill_item['skill_percentage']) ? $skill_item['skill_percentage'] : '';
	?>
            <div class="progress">
              <span class="skill"><span><?php echo $skill_name; ?></span> <i class="val"><?php echo $skill_percent; ?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $skill_percent; ?>" aria-valuemin="0" aria-valuemax="<?php echo $skill_percent; ?>"></div>
              </div>
            </div>	

	<?php
	       }
		}
	}
}
function display_second_part_skill_items(){
	$skills = carbon_get_theme_option('crb_skills');
	$total_skills = is_array($skills) ? count($skills) : 0;
	$mid_skill = $total_skills/2;
	$count = 0;
	if(!empty($skills)){
		foreach ($skills as $skill_item) {
			$count++;
			if($count > $mid_skill){
			$skill_name = isset($skill_item['skill']) ? $skill_item['skill'] : '';
			$skill_percent = isset($skill_item['skill_percentage']) ? $skill_item['skill_percentage'] : '';
	?>
            <div class="progress">
              <span class="skill"><span><?php echo $skill_name; ?></span> <i class="val"><?php echo $skill_percent; ?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $skill_percent; ?>" aria-valuemin="0" aria-valuemax="<?php echo $skill_percent; ?>"></div>
              </div>
            </div>	

	<?php
	       }
		}
	}
}