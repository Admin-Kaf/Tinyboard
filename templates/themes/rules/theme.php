<?php
	require 'info.php';
	
	function rules_build($action, $settings, $board) {
		// Possible values for $action:
		//	- all (rebuild everything, initialization)
		//	- news (news has been updated)
		//	- boards (board list changed)
		
		Rules::build($action, $settings);
	}
	
	// Wrap functions in a class so they don't interfere with normal Tinyboard operations
	class Rules {
		public static function build($action, $settings) {
			global $config;
			
			if ($action == 'all')
				file_write($config['dir']['home'] . 'rules.html', Rules::homepage($settings));
		}
		
		// Build news page
		public static function homepage($settings) {
			global $config;
			
			return Element('themes/rules/rules.html', Array(
				'settings' => $settings,
				'config' => $config,
				'boardlist' => createBoardlist()
			));
		}
	};
	
?>
