<?php

/**
 * Copyright (C) 2015 FeatherBB
 * based on code by (C) 2008-2012 FluxBB
 * and Rickard Andersson (C) 2002-2008 PunBB
 * License: http://www.gnu.org/licenses/gpl.html GPL version 2 or higher
 */
 
// Make sure no one attempts to run this script "directly"
if (!defined('FEATHER')) {
    exit;
}

?>

<h2><span><?php echo $lang_help['BBCode'] ?></span></h2>
<div class="box">
	<div class="inbox">
		<p><a name="bbcode"></a><?php echo $lang_help['BBCode info 1'] ?></p>
		<p><?php echo $lang_help['BBCode info 2'] ?></p>
	</div>
</div>
<h2><span><?php echo $lang_help['Text style'] ?></span></h2>
<div class="box">
	<div class="inbox">
		<p><?php echo $lang_help['Text style info'] ?></p>
		<p><code>[b]<?php echo $lang_help['Bold text'] ?>[/b]</code> <?php echo $lang_help['produces'] ?> <samp><strong><?php echo $lang_help['Bold text'] ?></strong></samp></p>
		<p><code>[u]<?php echo $lang_help['Underlined text'] ?>[/u]</code> <?php echo $lang_help['produces'] ?> <samp><span class="bbu"><?php echo $lang_help['Underlined text'] ?></span></samp></p>
		<p><code>[i]<?php echo $lang_help['Italic text'] ?>[/i]</code> <?php echo $lang_help['produces'] ?> <samp><em><?php echo $lang_help['Italic text'] ?></em></samp></p>
		<p><code>[s]<?php echo $lang_help['Strike-through text'] ?>[/s]</code> <?php echo $lang_help['produces'] ?> <samp><span class="bbs"><?php echo $lang_help['Strike-through text'] ?></span></samp></p>
		<p><code>[del]<?php echo $lang_help['Deleted text'] ?>[/del]</code> <?php echo $lang_help['produces'] ?> <samp><del><?php echo $lang_help['Deleted text'] ?></del></samp></p>
		<p><code>[ins]<?php echo $lang_help['Inserted text'] ?>[/ins]</code> <?php echo $lang_help['produces'] ?> <samp><ins><?php echo $lang_help['Inserted text'] ?></ins></samp></p>
		<p><code>[em]<?php echo $lang_help['Emphasised text'] ?>[/em]</code> <?php echo $lang_help['produces'] ?> <samp><em><?php echo $lang_help['Emphasised text'] ?></em></samp></p>
		<p><code>[color=#FF0000]<?php echo $lang_help['Red text'] ?>[/color]</code> <?php echo $lang_help['produces'] ?> <samp><span style="color: #ff0000"><?php echo $lang_help['Red text'] ?></span></samp></p>
		<p><code>[color=blue]<?php echo $lang_help['Blue text'] ?>[/color]</code> <?php echo $lang_help['produces'] ?> <samp><span style="color: blue"><?php echo $lang_help['Blue text'] ?></span></samp></p>
		<p><code>[h]<?php echo $lang_help['Heading text'] ?>[/h]</code> <?php echo $lang_help['produces'] ?></p> <div class="postmsg"><h5><?php echo $lang_help['Heading text'] ?></h5></div>
	</div>
</div>
<h2><span><?php echo $lang_help['Links and images'] ?></span></h2>
<div class="box">
	<div class="inbox">
		<p><?php echo $lang_help['Links info'] ?></p>
		<p><a name="url"></a><code>[url=<?php echo feather_escape(get_base_url(true).'/') ?>]<?php echo feather_escape($feather_config['o_board_title']) ?>[/url]</code> <?php echo $lang_help['produces'] ?> <samp><a href="<?php echo feather_escape(get_base_url(true).'/') ?>"><?php echo feather_escape($feather_config['o_board_title']) ?></a></samp></p>
		<p><code>[url]<?php echo feather_escape(get_base_url(true).'/') ?>[/url]</code> <?php echo $lang_help['produces'] ?> <samp><a href="<?php echo feather_escape(get_base_url(true).'/') ?>"><?php echo feather_escape(get_base_url(true).'/') ?></a></samp></p>
		<p><code>[url=/help/]<?php echo $lang_help['This help page'] ?>[/url]</code> <?php echo $lang_help['produces'] ?> <samp><a href="<?php echo get_link('/help') ?>"><?php echo $lang_help['This help page'] ?></a></samp></p>
		<p><code>[email]myname@example.com[/email]</code> <?php echo $lang_help['produces'] ?> <samp><a href="mailto:myname@example.com">myname@example.com</a></samp></p>
		<p><code>[email=myname@example.com]<?php echo $lang_help['My email address'] ?>[/email]</code> <?php echo $lang_help['produces'] ?> <samp><a href="mailto:myname@example.com"><?php echo $lang_help['My email address'] ?></a></samp></p>
		<p><code>[topic=1]<?php echo $lang_help['Test topic'] ?>[/topic]</code> <?php echo $lang_help['produces'] ?> <samp><a href="<?php echo get_link('topic/1/') ?>"><?php echo $lang_help['Test topic'] ?></a></samp></p>
		<p><code>[topic]1[/topic]</code> <?php echo $lang_help['produces'] ?> <samp><a href="<?php echo get_link('topic/1/') ?>"><?php echo get_link('topic/1/') ?></a></samp></p>
		<p><code>[post=1]<?php echo $lang_help['Test post'] ?>[/post]</code> <?php echo $lang_help['produces'] ?> <samp><a href="<?php echo get_link('post/1/#p1') ?>"><?php echo $lang_help['Test post'] ?></a></samp></p>
		<p><code>[post]1[/post]</code> <?php echo $lang_help['produces'] ?> <samp><a href="<?php echo get_link('post/1/#p1') ?>"><?php echo get_link('post/1/#p1') ?></a></samp></p>
		<p><code>[forum=1]<?php echo $lang_help['Test forum'] ?>[/forum]</code> <?php echo $lang_help['produces'] ?> <samp><a href="<?php echo get_link('topic/1/') ?>"><?php echo $lang_help['Test forum'] ?></a></samp></p>
		<p><code>[forum]1[/forum]</code> <?php echo $lang_help['produces'] ?> <samp><a href="<?php echo get_link('forum/1/') ?>"><?php echo get_link('forum/1/') ?></a></samp></p>
		<p><code>[user=2]<?php echo $lang_help['Test user'] ?>[/user]</code> <?php echo $lang_help['produces'] ?> <samp><a href="<?php echo get_link('user/2/') ?>"><?php echo $lang_help['Test user'] ?></a></samp></p>
		<p><code>[user]2[/user]</code> <?php echo $lang_help['produces'] ?> <samp><a href="<?php echo get_link('user/2/') ?>"><?php echo get_link('user/2/') ?></a></samp></p>
	</div>
	<div class="inbox">
		<p><a name="img"></a><?php echo $lang_help['Images info'] ?></p>
		<p><code>[img=<?php echo $lang_help['FluxBB bbcode test'] ?>]<?php echo feather_escape(get_base_url(true)) ?>/img/test.png[/img]</code> <?php echo $lang_help['produces'] ?> <samp><img style="height: 21px" src="<?php echo feather_escape(get_base_url(true)) ?>/img/test.png" alt="<?php echo $lang_help['FluxBB bbcode test'] ?>" /></samp></p>
	</div>
</div>
<h2><span><?php echo $lang_help['Quotes'] ?></span></h2>
<div class="box">
	<div class="inbox">
		<p><?php echo $lang_help['Quotes info'] ?></p>
		<p><code>[quote=James]<?php echo $lang_help['Quote text'] ?>[/quote]</code></p>
		<p><?php echo $lang_help['produces quote box'] ?></p>
		<div class="postmsg">
			<div class="quotebox"><cite>James <?php echo $lang_common['wrote'] ?></cite><blockquote><div><p><?php echo $lang_help['Quote text'] ?></p></div></blockquote></div>
		</div>
		<p><?php echo $lang_help['Quotes info 2'] ?></p>
		<p><code>[quote]<?php echo $lang_help['Quote text'] ?>[/quote]</code></p>
		<p><?php echo $lang_help['produces quote box'] ?></p>
		<div class="postmsg">
			<div class="quotebox"><blockquote><div><p><?php echo $lang_help['Quote text'] ?></p></div></blockquote></div>
		</div>
		<p><?php echo $lang_help['quote note'] ?></p>
	</div>
</div>
<h2><span><?php echo $lang_help['Code'] ?></span></h2>
<div class="box">
	<div class="inbox">
		<p><?php echo $lang_help['Code info'] ?></p>
		<p><code>[code]<?php echo $lang_help['Code text'] ?>[/code]</code></p>
		<p><?php echo $lang_help['produces code box'] ?></p>
		<div class="postmsg">
			<div class="codebox"><pre><code><?php echo $lang_help['Code text'] ?></code></pre></div>
		</div>
	</div>
</div>
<h2><span><?php echo $lang_help['Lists'] ?></span></h2>
<div class="box">
	<div class="inbox">
		<p><a name="lists"></a><?php echo $lang_help['List info'] ?></p>
		<p><code>[list][*]<?php echo $lang_help['List text 1'] ?>[/*][*]<?php echo $lang_help['List text 2'] ?>[/*][*]<?php echo $lang_help['List text 3'] ?>[/*][/list]</code>
		<br /><span><?php echo $lang_help['produces list'] ?></span></p>
		<div class="postmsg">
			<ul><li><p><?php echo $lang_help['List text 1'] ?></p></li><li><p><?php echo $lang_help['List text 2'] ?></p></li><li><p><?php echo $lang_help['List text 3'] ?></p></li></ul>
		</div>
		<p><code>[list=1][*]<?php echo $lang_help['List text 1'] ?>[/*][*]<?php echo $lang_help['List text 2'] ?>[/*][*]<?php echo $lang_help['List text 3'] ?>[/*][/list]</code>
		<br /><span><?php echo $lang_help['produces decimal list'] ?></span></p>
		<div class="postmsg">
			<ol class="decimal"><li><p><?php echo $lang_help['List text 1'] ?></p></li><li><p><?php echo $lang_help['List text 2'] ?></p></li><li><p><?php echo $lang_help['List text 3'] ?></p></li></ol>
		</div>
		<p><code>[list=a][*]<?php echo $lang_help['List text 1'] ?>[/*][*]<?php echo $lang_help['List text 2'] ?>[/*][*]<?php echo $lang_help['List text 3'] ?>[/*][/list]</code>
		<br /><span><?php echo $lang_help['produces alpha list'] ?></span></p>
		<div class="postmsg">
			<ol class="alpha"><li><p><?php echo $lang_help['List text 1'] ?></p></li><li><p><?php echo $lang_help['List text 2'] ?></p></li><li><p><?php echo $lang_help['List text 3'] ?></p></li></ol>
		</div>
	</div>
</div>
<h2><span><?php echo $lang_help['Nested tags'] ?></span></h2>
<div class="box">
	<div class="inbox">
		<p><?php echo $lang_help['Nested tags info'] ?></p>
		<p><code>[b][u]<?php echo $lang_help['Bold, underlined text'] ?>[/u][/b]</code> <?php echo $lang_help['produces'] ?> <samp><strong><span class="bbu"><?php echo $lang_help['Bold, underlined text'] ?></span></strong></samp></p>
	</div>
</div>
<h2><span><?php echo $lang_help['Smilies'] ?></span></h2>
<div class="box">
	<div class="inbox">
		<p><a name="smilies"></a><?php echo $lang_help['Smilies info'] ?></p>
<?php

// Display the smiley set
require FEATHER_ROOT.'include/parser.php';

$smiley_groups = array();

foreach ($pd['smilies'] as $smiley_text => $smiley_data) {
    $smiley_groups[$smiley_data['file']][] = $smiley_text;
}

foreach ($smiley_groups as $smiley_img => $smiley_texts) {
    echo "\t\t<p><code>". implode('</code> ' .$lang_common['and']. ' <code>', $smiley_texts).'</code> <span>' .$lang_help['produces']. '</span> <samp>'.$pd['smilies'][$smiley_texts[0]]['html'] .'</samp></p>'."\n";
}

?>
	</div>
</div>