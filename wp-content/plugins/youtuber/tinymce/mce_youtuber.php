<?php
$wpconfig = realpath("../../../../wp-config.php");

if (!file_exists($wpconfig)) {
	echo "Could not found wp-config.php. Error in path :\n\n".$wpconfig ;	
	die;	
}// stop when wp-config is not there

require_once($wpconfig);

// check for rights
if(!current_user_can('edit_posts')) die;

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Youtuber</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<script language="javascript" type="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/tiny_mce_popup.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/utils/mctabs.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/utils/form_utils.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-content/plugins/youtuber/tinymce/youtuber.js"></script>
	<script language="javascript" type="text/javascript">
		var old=false;
	</script>
	<base target="_self" />
</head>
<body id="link" onload="tinyMCEPopup.executeOnLoad('init();');document.body.style.display='';document.getElementById('youtuber_tab').focus();" style="display: none">
<!-- <form onsubmit="insertLink();return false;" action="#"> -->
	<form name="Youtuber" action="#">
	<div class="tabs">
		<ul>			
			<li id="youtuber_tab" class="current"><span><a href="javascript:mcTabs.displayTab('youtuber_tab','youtuber_panel');" onmousedown="return false;">Youtuber</a></span></li>
		</ul>
	</div>
	
	<div class="panel_wrapper" style="height: 100px;">

		<!-- rss panel -->
		<div id="youtuber_panel" class="panel current">
		<br />
			<table border="0" cellpadding="3" cellspacing="0" width="100%">
				<tr>
					<td nowrap="nowrap" valign="top">
						<label><?php _e('Write here the URL to the video in YouTube or Vimeo.', 'youtuber'); ?></label>
					</td>
				</tr>
				<tr>
					<td  nowrap="nowrap" valign="top">
						<input type="text" id="youtuberlink" name="youtuberlink" style="width: 100%" value="<?php _e('URL', 'youtuber'); ?>" onclick="if(!old) { this.value=''; old=true; }"/>
					</td>
				</tr>
				<tr>
					<td nowrap="nowrap" valign="top">
						<label><?php _e('These would look like to:', 'youtuber'); ?>
							<ul>
								<li>http://youtube.com/watch?v=XyzW_abCd12</li>
								<li>http://vimeo.com/1234567</li>
							</ul>
						</label>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="mceActionPanel">
		<div style="float: left">
			<input type="button" id="cancel" name="cancel" value="<?php _e("Cancel", 'youtuber'); ?>" onclick="tinyMCEPopup.close();" />
		</div>

		<div style="float: right">
			<input type="submit" id="insert" name="insert" value="<?php _e("Insert", 'youtuber'); ?>" onclick="insertYoutuberLink();" />
		</div>
	</div>
</form>
</body>
</html>
