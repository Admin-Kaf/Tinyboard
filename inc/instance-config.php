<?php

/*
*  Instance Configuration
*  ----------------------
*  Edit this file and not config.php for imageboard configuration.
*
*  You can copy values from config.php (defaults) and paste them here.
*/

	setlocale(LC_TIME,"fr_FR");
	$config['db']['server'] = 'localhost';
	$config['db']['database'] = 'cable6';
	$config['db']['prefix'] = 'cable6';
	$config['db']['user'] = 'cable6';
	$config['db']['password'] = 'cg1X1RTmjyhTwdXaWE7byMXvR';


	$config['cookies']['mod'] = 'mod_cable6';
	$config['cookies']['salt'] = '#CIuj@tPy1&6x8uUy*Cv0D%bF6rRct0TB&mtb&5bn5wl6TOWap';

	$config['flood_time'] = 10;
	$config['flood_time_ip'] = 120;
	$config['flood_time_same'] = 30;
	$config['max_body'] = 1800;
	$config['reply_limit'] = 250;
	$config['max_links'] = 20;
	$config['max_filesize'] = 10485760;
    $config['thumb_width'] = 125;
    $config['thumb_height'] = 125;
    $config['thumb_op_width'] = 250;
    $config['thumb_op_height'] = 250;
	$config['max_width'] = 10000;
	$config['max_height'] = 10000;
	$config['threads_per_page'] = 10;
	$config['max_pages'] = 5;
	$config['threads_preview'] = 5;
	$config['root'] = '/';
	$config['secure_trip_salt'] = 'uI2J%W0iCaWehmL6WWalSMgF^zRrIp!qIWMAV@&aJFY&g57cnC';

    // Always update this when adding new valid fields to the post form, or EVERYTHING WILL BE DETECTED AS SPAM!
    $config['spam']['valid_inputs'] = array(
        'hash',
        'board',
        'thread',
        'mod',
        'name',
        'email',
        'subject',
        'post',
        'body',
        'password',
        'sticky',
        'lock',
        'raw',
        'embed',
        'recaptcha_challenge_field',
        'recaptcha_response_field',
        'spoiler',
        'spoiler_nsfw',
        'quick-reply',
        'page',
        'file_url',
        'json_response',
    );
    // Shows some extra information at the bottom of pages. Good for development/debugging.
    $config['debug'] = false;
    // For development purposes. Displays (and "dies" on) all errors and warnings. Turn on with the above.
    $config['verbose_errors'] = true; //<- à changer avant ouverture
    // EXPLAIN all SQL queries (when in debug mode).
    $config['debug_explain'] = false;
    
    // Use syslog() for logging all error messages and unauthorized login attempts.
    //$config['syslog'] = true;
    
    
    //cache
    $config['cache']['enabled'] = 'apc';
    
    // Optional prefix if you're running multiple Tinyboard instances on the same machine.
    $config['cache']['prefix'] = 'test432197_';
    
    
    // Prevents most Tor exit nodes from making posts. Recommended, as a lot of abuse comes from Tor because
    // of the strong anonymity associated with it.
    $config['dnsbl'][] = array('tor.dnsbl.sectoor.de', 1);
    
    
    // Do you need a body for your reply posts?
    $config['force_body'] = false;
    // Do you need a body for new threads?
    $config['force_body_op'] = false;
    // Require an image for threads?
    $config['force_image_op'] = true;
    
    // Track post citations (>>XX). Rebuilds posts after a cited post is deleted, removing broken links.
    // Puts a little more load on the database.
    $config['track_cites'] = false;
    
    
    // Automatically convert things like "..." to Unicode characters ("…").
    $config['auto_unicode'] = true; ///>>>trouver un moyen de remplacer oe par œ OE par Œ " par «» etc.
    
    // Always act as if the user had typed "noko" into the email field.
    $config['always_noko'] = true;
    
    // Attach country flags to posts. Requires the PHP "geoip" extension to be installed:
    // http://www.php.net/manual/en/intro.geoip.php. In the future, maybe I will find and include a proper
    // pure-PHP geolocation library.
    $config['country_flags'] = false;
    
    
    // Show the post the user was banned for on the "You are banned" page.
    $config['ban_show_post'] = true;
    
        // Allow users to appeal bans through Tinyboard.
    $config['ban_appeals'] = true;
    // Do not allow users to appeal bans that are shorter than this length (in seconds).
    $config['ban_appeals_min_length'] = 60 * 60 * 24 * 3; // 3 jours
    
    $config['thumb_method'] = 'convert+gifscale';
    
    // Strip EXIF metadata from JPEG files.
    $config['strip_exif'] = true; //«- enlever sur /p/
    
    // Allowed image file extensions.
    
    $config['allowed_ext'][] = 'jpg';
    $config['allowed_ext'][] = 'jpeg';
    //$config['allowed_ext'][] = 'bmp';
    $config['allowed_ext'][] = 'gif';
    $config['allowed_ext'][] = 'png';
    //$config['allowed_ext'][] = 'svg'; //<- vérifier la sécurité
    
    
    // Location of files.
    $config['file_index'] = 'index.html';
    $config['file_page'] = '%d.html';
    $config['file_mod'] = 'mod.php';
    $config['file_post'] = 'post.php';
    $config['file_script'] = 'main.js';
    
    // Board directory, followed by a forward-slash (/).
	$config['board_path'] = '%s/';
	// Misc directories.
	$config['dir']['img'] = 'src/';
	$config['dir']['thumb'] = 'thumb/';
	$config['dir']['res'] = 'res/';

    
    // Location of thumbnail to use for spoiler images.
    $config['spoiler_image'] = 'static/spoiler.png';
    // Location of thumbnail to use for deleted images.
    // $config['image_deleted'] = 'static/deleted.png';
    
    // Display image identification links using regex.info/exif, TinEye and Google Images.
    $config['image_identification'] = true;
    
    // The default name (ie. Anonymous).
    $config['anonymous'] = 'Anonyme';
    // Tinyboard has been translated into a few langauges. See inc/locale for available translations.
    $config['locale'] = 'fr_FR.UTF8'; // (en, ru_RU.UTF-8, fi_FI.UTF-8, pl_PL.UTF-8)
    
    // Timezone to use for displaying dates/tiems.
    $config['timezone'] = 'Europe/Paris';
    // The format string passed to strftime() for displaying dates.
    // http://www.php.net/manual/en/function.strftime.php
    $config['post_date'] = '%d/%m/%y(%a) %Hh %Mmin %Ss';
    // Same as above, but used for "you are banned' pages.
    $config['ban_date'] = '%A %e %B, %Y';
    
    // The names on the post buttons. (On most imageboards, these are both just "Post").
    $config['button_newtopic'] = _('Poster');
    $config['button_reply'] = _('Poster');
    
    // Assign each poster in a thread a unique ID, shown by "ID: xxxxx" before the post number.
    $config['poster_ids'] = false;
    // Number of characters in the poster ID (maximum is 40).
    $config['poster_id_length'] = 8;
    /*
     * For lack of a better name, “boardlinks” are those sets of navigational links that appear at the top
     * and bottom of board pages. They can be a list of links to boards and/or other pages such as status
     * blogs and social network profiles/pages.
     *
     * "Groups" in the boardlinks are marked with square brackets. Tinyboard allows for infinite recursion
     * with groups. Each array() in $config['boards'] represents a new square bracket group.
     */
    $config['boards'] = array(
		array('home' => $config['root'].'index.html'),
		array('f', 'g', 'int'),
		array('6'),
		array('règlement' => 	$config['root'].'rules.html') 
         //array('status' => 'http://status.example.org/'),
    );
    
    // Show page navigation links at the top as well.
    $config['page_nav_top'] = false;
    // Show "Catalog" link in page navigation. Use with the Catalog theme.
    $config['catalog_link'] = 'catalog.html';
    $config['minify_html'] = false;
    
    
    //date_default_timezone_set('Europe/Paris');
    
    $config['hide_sage'] = true;
    
    $config['spoiler_images'] = false;
    $config['spoiler_nsfw'] = false;
    $config['spoiler_nsfw_image'] = 'static/spoiler_nsfw.png';
    
    $config['markup_repair_tidy'] = true;
    $config['markup'][] = array("/\-\-(.+?)\-\-/", "<del>\$1</del>");
    
    $config['markup'][] = array("#(&gt;)+/(jvc)/#", "<a target=\"_blank\" rel=\"nofollow\" href=\"http://www.jeuxvideo.com/\" > &gt;&gt;&gt;/$2/</a>");
    $config['markup'][] = array("#(&gt;)+/(reddit)/#", "<a target=\"_blank\" rel=\"nofollow\" href=\"http://www.reddit.com/\" > &gt;&gt;&gt;/$2/</a>");
    $config['markup'][] = array("#(&gt;)+/(tumblr)/#", "<a target=\"_blank\" rel=\"nofollow\" href=\"https://www.tumblr.com/\" > &gt;&gt;&gt;/$2/</a>");
    $config['markup'][] = array("#(&gt;)+/(4chan)/([0-9a-zA-Z]{1,58}/)?([0-9]*)#", "<a target=\"_blank\" rel=\"nofollow\" href=\"http://4chan.org/$3$4\" > &gt;&gt;&gt;/$2/$3$4</a>");
    $config['markup'][] = array("#(&gt;)+/(uf|underfoule)/#", "<a target=\"_blank\" rel=\"nofollow\" href=\"http://underfoule.net/\" > &gt;&gt;&gt;/$2</a>");

    
    
    
    // For a normal string replacement:
	//$config['wordfilters'][] = array('>>>/jvc/', '<a href="http://jeuxvideo.com/">&gt;&gt;&gt;/jvc/</a>');	
	// Advanced raplcement (regular expressions):
	//$config['wordfilters'][] = array('/ca[rt]/', 'dog', true); // 'true' means it's a regular expression
    
    
    
    // $config['filters'][] = array(
    //     'condition' => array(
    //         'name' => '/^surgeon$/',
    //         'body' => '/regards,\s+(the )?surgeon$/i',
    //         'OP' => false
    //     ),
    //     'action' => 'ban',
    //     'expires' => 60 * 60 * 3, // 3 hours
    //     'reason' => 'Go away, spammer.'
    // );
    // Example: PHP 5.3+ (anonymous functions)
    // There is also a "custom" condition, making the possibilities of this feature pretty much endless.
    // This is a bad example, because there is already a "name" condition built-in.
    // $config['filters'][] = array(
    //     'condition' => array(
    //         'body' => '/h$/i',
    //         'OP' => false,
    //         'custom' => function($post) {
    //             if($post['name'] == 'Anonymous')
    //                 return true;
    //             else
    //                 return false;
    //         }
    //     ),
    //     'action' => 'reject'
    // );
    
    // Some scripts require jQuery. Check the comments in script files to see what's needed. When enabling
    // jQuery, you should first empty the array so that "js/query.min.js" can be the first, and then re-add
    // "js/inline-expanding.js" or else the inline-expanding script might not interact properly with other
    // scripts.
    $config['additional_javascript'] = array();
    $config['additional_javascript'][] = 'js/jquery.min.js';
    $config['additional_javascript'][] = 'js/instance-settings.js';
    $config['additional_javascript'][] = 'js/inline-expanding.js';
    $config['additional_javascript'][] = 'js/auto-reload.js';
    $config['additional_javascript'][] = 'js/style-select.js';
    $config['additional_javascript'][] = 'js/local-time.js';
    $config['additional_javascript'][] = 'js/smartphone-spoiler.js';
    //$config['additional_javascript'][] = 'js/ajax-post-controls.js';
    //$config['additional_javascript'][] = 'js/ajax.js';
    //$config['additional_javascript'][] = 'js/catalog-link.js';
    $config['additional_javascript'][] = 'js/download-original.js';
    $config['additional_javascript'][] = 'js/expand-all-images.js'; 
    //$config['additional_javascript'][] = 'js/expand.js';
    //$config['additional_javascript'][] = 'js/fix-report-delet-submit.js';
    $config['additional_javascript'][] = 'js/forced-anon.js';
    $config['additional_javascript'][] = 'js/hide-images.js';
    $config['additional_javascript'][] = 'js/hide-threads.js';
    //$config['additional_javascript'][] = 'js/jquery-ui.custom.min.js';
    $config['additional_javascript'][] = 'js/post-hover.js';
    //$config['additional_javascript'][] = 'js/quick-post-controls.js';
    //$config['additional_javascript'][] = 'js/quick-reply-old.js';
    //$config['additional_javascript'][] = 'js/quick-reply.js';
    //$config['additional_javascript'][] = 'js/quote-selection.js';
    $config['additional_javascript'][] = 'js/show-backlinks.js';
    //$config['additional_javascript'][] = 'js/show-op.js';
    $config['additional_javascript'][] = 'js/toggle-images.js';
    //$config['additional_javascript'][] = 'js/toggle-locked-thread.js';
    //$config['additional_javascript'][] = 'js/youtube.js';
    
    // Optional banner image at the top of every page.
	$config['url_banner'] = '/banner.php';
	// Banner dimensions are also optional. As the banner loads after the rest of the page, everything may be
	// shifted down a few pixels when it does. Making the banner a fixed size will prevent this.
	$config['banner_width'] = 300;
	$config['banner_height'] = 100;
    
    $config['quick_reply'] = true;
    
    
    
        // Mod links (full HTML).
        $config['mod']['link_delete'] = '[D]';
        $config['mod']['link_ban'] = '[B]';
        $config['mod']['link_bandelete'] = '[B&amp;D]';
        $config['mod']['link_deletefile'] = '[F]';
        $config['mod']['link_spoilerimage'] = '[S]';
        $config['mod']['link_deletebyip'] = '[D+]';
        $config['mod']['link_deletebyip_global'] = '[D++]';
        $config['mod']['link_sticky'] = '[Sticky]';
        $config['mod']['link_desticky'] = '[-Sticky]';
        $config['mod']['link_lock'] = '[Lock]';
        $config['mod']['link_unlock'] = '[-Lock]';
        $config['mod']['link_bumplock'] = '[No bump]';
        $config['mod']['link_bumpunlock'] = '[-No bump]';
        $config['mod']['link_editpost'] = '[Edit]';
        $config['mod']['link_move'] = '[Move]';
        
        

    $config['mod']['dns_lookup'] = true;

    $config['mod']['ip_recentposts'] = 0;

    $config['mod']['recent_reports'] = 20;

    $config['mod']['modlog_page'] = 400;

    $config['mod']['banlist_page'] = 400;

    $config['mod']['default_ban_message'] = _('CET UTILISATEUR A ÉTÉ BANNI POUR CE MESSAGE');

    $config['mod']['shadow_mesage'] = 'Déplacé vers %s.';

        $config['mod']['groups'] = array(
                10        => 'Janitor',
                20        => 'Mod',
                30        => 'Admin',
                40        => 'Fonda',
                99        => 'Disabled'
        );
        define_groups();
        
        $config['mod']['capcode'] = array(
        //        JANITOR                => array('Janitor'),
                MOD                => array('Modo'),
                ADMIN                => true,
                FONDA				=> true
        );
        
        $config['url_favicon'] = $config['root'].'static/favicon.ico';
        
        $config['mod']['show_ip'] = ADMIN;
        $config['mod']['deletebyip'] = MOD; //«- vérifier qu'il ne peut pas voir l'ip //ok
        

    $config['mod']['view_ban'] = $config['mod']['view_banlist']; //<- afficher que des hash dans la liste des ban

        $config['mod']['view_notes'] = DISABLED;
        $config['mod']['create_notes'] = DISABLED;
        $config['mod']['remove_notes'] = DISABLED;
        $config['mod']['newboard'] = FONDA;
        $config['mod']['manageboards'] = FONDA;
        $config['mod']['deleteboard'] = FONDA;
        $config['mod']['manageusers'] = MOD;
        //$config['mod']['createusers'] = MOD; // /!!!\ Les modo peuvent créer tout et n'imp! y compris des admin et des fonda
        //$config['mod']['deleteusers'] = MOD; //<vérifier qu'ils ne peuvent pas supprimer d'autres modos //ils ne peuvent rien supprimer en fait.
        $config['mod']['modlog_ip'] = ADMIN; //<- voir une page d'un hash d'ip pas de l'ip en lui même //laisser les modo voir les ban des 12 dernières heures //actuellement l'ip est visible des mod et la page de l'ip avec historique aussi
        $config['mod']['search'] = DISABLED;
        // /!\ les mods ne peuvent pas banir par ip: "index manquant: ip"
        
        
        
        

    $config['meta_keywords'] = 'france, français, french, francophone, fandom, board, bbs, système de billet electronique, chan, discussion anonyme, imageboard, planche, image, images, forum, discussion, meme, même, mème, underfoule, acrimonie, mon petit poney, furry, furries, my little pony, friendship is magic, mlp, fim, troll, pire, site, siteweb, forum, trou du cul, merde, ';

    //les meta d'acrimonie: <meta name="keywords" content="imageboard, francophone, french, français, varan, audrey, hepburn, tortues, camembert, planche, images, photos, forum, discussion, cadavre, exquis, gratuit, en ligne,">

?>
