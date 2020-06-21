In Theme Editor: DirectoryEngine: profile-togos.php (template/profile-togos.php) ,
DirectoryEngine: author-togos.php (template/author-togos.php),
And DirectoryEngine: profile-togo.php (mobile/template/profile-togo.php)
added the follows:
//Files for Hosts
		$user_meta=get_userdata($user_ID); $user_roles=$user_meta->roles;
		if (in_array("host", $user_roles)){
			echo '<h2>Files For Hosts:</h2><ul class="files_for_hosts">';
			echo '<ul class="files_for_hosts">';
			$output = load_host_files();
			$size = count($output[0]);
		   for ($i=0;$i<$size;$i++) {
			   $file = $output[0][$i];
			   $file_path = $output[1][$i];
			   echo '<li class="col-md-12"><a href="' . $file_path . '">' . $file . '</a></li>';
		   }
			echo '</ul>';
		} 
		//End Files for Hosts
					    
In theme editor: DirectoryEngine: Page Profile Page Template (mobile/page-profile.php), 
added for mobile:
<?php $user_meta=get_userdata($user_ID); $user_roles=$user_meta->roles;
if (in_array("host", $user_roles)){
		//$output = load_host_files();
		//$total_togo = count($output[0]); ?>
                <a href="#user_togo" role="tab" data-toggle="tab">
                    <i class="fa fa-pagelines"></i><?php _e("Files", ET_DOMAIN); ?>
                </a>
				<?php } else {…

