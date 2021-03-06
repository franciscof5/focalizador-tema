<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">

		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		
		<!-- TO USE IN JAVASCRIPT FOR LOADING EXTERNAL FILES -->
		<script type="text/javascript">var templateDir = "<?php bloginfo('stylesheet_directory') ?>";</script>

		<title><?php the_title() ?></title>

		<?php do_action( 'bp_head' ) ?>

		<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

		<?php if ( function_exists( 'bp_sitewide_activity_feed_link' ) ) : ?>
			<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> | <?php _e('Site Wide Activity RSS Feed', 'buddypress' ) ?>" href="<?php bp_sitewide_activity_feed_link() ?>" />
		<?php endif; ?>

		<?php if ( function_exists( 'bp_member_activity_feed_link' ) && bp_is_member() ) : ?>
			<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> | <?php bp_displayed_user_fullname() ?> | <?php _e( 'Activity RSS Feed', 'buddypress' ) ?>" href="<?php bp_member_activity_feed_link() ?>" />
		<?php endif; ?>

		<?php if ( function_exists( 'bp_group_activity_feed_link' ) && bp_is_group() ) : ?>
			<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> | <?php bp_current_group_name() ?> | <?php _e( 'Group Activity RSS Feed', 'buddypress' ) ?>" href="<?php bp_group_activity_feed_link() ?>" />
		<?php endif; ?>

		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> <?php _e( 'Blog Posts RSS Feed', 'buddypress' ) ?>" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> <?php _e( 'Blog Posts Atom Feed', 'buddypress' ) ?>" href="<?php bloginfo('atom_url'); ?>" />

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<?php wp_head(); ?>
		
	</head>
<?php if (function_exists('mbj_notify_bar_display')) { mbj_notify_bar_display(); }?>
<?php if (function_exists("activate_maintenance_mode")) { activate_maintenance_mode();} ?>
	<body <?php body_class() ?> id="bp-default">
<a href="https://github.com/franciscof5/sistema-focalizador-2011"><img style="position: absolute; top: 0; right: 0; border: 0;z-index:999999999999999999" src="https://camo.githubusercontent.com/e7bbb0521b397edbd5fe43e7f760759336b5e05f/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677265656e5f3030373230302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png"></a>
		<?php do_action( 'bp_before_header' ) ?>

		<span id="linha-fundo"></span>
		
		
		<div id="header">
			<a title="<?php bloginfo('name') ?>" href="<?php bloginfo('url'); ?>" class="headertitle" style="width:140px;height:40px; display:inline-block;"><?php #bloginfo('name') ?></a>
			<?php if (is_user_logged_in()) { ?>
			<a title="Membros" href="<?php bloginfo('url'); ?>/colegas/"><div href="" id="icone-amigo">&nbsp;</div></a>
			<a title="Grupos" href="<?php bloginfo('url'); ?>/groups/"><div href="" id="icone-balao">&nbsp;</div></a>
			<a title="Atividade recente" href="<?php bloginfo('url'); ?>/activity/"><div href="" id="icone-notif">&nbsp;</div></a>
			<?php } ?>
			<?php /*if
			<a href="<?php echo site_url() ?>" title="<?php _e( 'Home', 'buddypress' ) ?>"><h1 id="logo"><?php bp_site_name() ?></h1></a>

			<ul id="nav">
				<li<?php if ( bp_is_front_page() ) : ?> class="selected"<?php endif; ?>>
					<a href="<?php echo site_url() ?>" title="<?php _e( 'Home', 'buddypress' ) ?>"><?php _e( 'Home', 'buddypress' ) ?></a>
				</li>

				<?php /*if ( 'activity' != bp_dtheme_page_on_front() && bp_is_active( 'activity' ) ) : ?>
					<li<?php if ( bp_is_page( BP_ACTIVITY_SLUG ) ) : ?> class="selected"<?php endif; ?>>
						<a href="<?php echo site_url() ?>/<?php echo BP_ACTIVITY_SLUG ?>/" title="<?php _e( 'Activity', 'buddypress' ) ?>"><?php _e( 'Activity', 'buddypress' ) ?></a>
					</li>
				<?php endif; ?>

				<li<?php if ( bp_is_page( BP_MEMBERS_SLUG ) || bp_is_member() ) : ?> class="selected"<?php endif; ?>>
					<a href="<?php echo site_url() ?>/<?php echo BP_MEMBERS_SLUG ?>/" title="<?php _e( 'Members', 'buddypress' ) ?>"><?php _e( 'Members', 'buddypress' ) ?></a>
				</li>

				<?php if ( bp_is_active( 'groups' ) ) : ?>
					<li<?php if ( bp_is_page( BP_GROUPS_SLUG ) || bp_is_group() ) : ?> class="selected"<?php endif; ?>>
						<a href="<?php echo site_url() ?>/<?php echo BP_GROUPS_SLUG ?>/" title="<?php _e( 'Groups', 'buddypress' ) ?>"><?php _e( 'Groups', 'buddypress' ) ?></a>
					</li>

					<?php if ( bp_is_active( 'forums' ) && ( function_exists( 'bp_forums_is_installed_correctly' ) && !(int) bp_get_option( 'bp-disable-forum-directory' ) ) && bp_forums_is_installed_correctly() ) : ?>
						<li<?php if ( bp_is_page( BP_FORUMS_SLUG ) ) : ?> class="selected"<?php endif; ?>>
							<a href="<?php echo site_url() ?>/<?php echo BP_FORUMS_SLUG ?>/" title="<?php _e( 'Forums', 'buddypress' ) ?>"><?php _e( 'Forums', 'buddypress' ) ?></a>
						</li>
					<?php endif; ?>
				<?php endif; ?>

				<?php if ( bp_is_active( 'blogs' ) && bp_core_is_multisite() ) : ?>
					<li<?php if ( bp_is_page( BP_BLOGS_SLUG ) ) : ?> class="selected"<?php endif; ?>>
						<a href="<?php echo site_url() ?>/<?php echo BP_BLOGS_SLUG ?>/" title="<?php _e( 'Blogs', 'buddypress' ) ?>"><?php _e( 'Blogs', 'buddypress' ) ?></a>
					</li>
				<?php endif; /////////////////////?>
				
				<?php //if ( is_user_logged_in() ) {
				wp_list_pages( 'title_li=&depth=1&exclude=' . bp_dtheme_page_on_front() ); 
				?>

				<?php do_action( 'bp_nav_items' ); ?>
			</ul><!-- #nav -->

			<div id="search-bar">
				<div class="padder">

				<?php if ( bp_search_form_enabled() ) : ?>

					<form action="<?php echo bp_search_form_action() ?>" method="post" id="search-form">
						<input type="text" id="search-terms" name="search-terms" value="" />
						<?php echo bp_search_form_type_select() ?>

						<input type="submit" name="search-submit" id="search-submit" value="<?php _e( 'Search', 'buddypress' ) ?>" />
						<?php wp_nonce_field( 'bp_search_form' ) ?>
					</form><!-- #search-form -->

				<?php endif; ?>

				<?php do_action( 'bp_search_login_bar' ) ?>

				</div><!-- .padder -->
			</div><!-- #search-bar -->
			*/ ?>
			<?php do_action( 'bp_header' ) ?>
		
		</div><!-- #header -->

		<?php do_action( 'bp_after_header' ) ?>
		<?php do_action( 'bp_before_container' ) ?>
<?php
//get the language file
if(function_exists(qtrans_getLanguage)){
   if(qtrans_getLanguage() == "pb")
	$filelang="pt-br.js";
   else
	$filelang="en.js";
   
} else {
	//If the function doesnt exists then call the default language
	$filelang="pt-br.js";
}
?>
<script src="<?php bloginfo('stylesheet_directory'); ?>/pomodoro/languages/<?php echo $filelang ?>" type="text/javascript"></script>

		<div id="container">
