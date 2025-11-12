<?php

////////////////////////////////////////////////////////////////////////////////
//
// File:	function.FacebookLikeButton.php
// Project:	Facebook Bookmarking plugin for CMS Made Simple
// Version:	3.0
// Licence:	Free software under the GNU General Public License
// Web:		http://dev.cmsmadesimple.org/projects/likebutton
// Created:	20221102, v3.0, Magal Hezi
//
////////////////////////////////////////////////////////////////////////////////

function smarty_cms_function_FacebookLikeButton($params, &$smarty) {

	$gCms = cmsms();

	$data_appid= isset($params['appid']) ? '&appId='.$params['appid'].'&autoLogAppEvents=1' : '';
	$data_share= isset($params['share']) ? ' data-share="'.$params['share']. '"' : ' data-share="true"';
	$data_width= isset($params['width']) ? ' data-width="'.$params['width']. '"' : ' data-width="600"';
	$data_size= isset($params['size']) ? ' data-size="'.$params['size']. '"' : ' data-size="large"';
	
	$show_faces= isset($params['show_faces']) ? ' data-show-faces="'.$params['show_faces']. '"' : ' data-show-faces="false"';
	$id = isset($params['id']) ? trim($params['id']) : '';	
	$class = isset($params['class']) ? trim($params['class']) : '';	
	$custom_url = isset($params['custom_url']) ? trim($params['custom_url']) : ""; 
	$data_action = isset($params['action']) ? ' data-action="' . trim($params['action']) . '"' : ' data-action="like"';
	$data_colorscheme = isset($params['colorscheme']) ? ' data-colorscheme="' . trim($params['colorscheme']) . '"' : "";
	$data_font = isset($params['font']) ? ' data-font="' . trim($params['font']) . '"' : "";
	$data_layout = isset($params['layout']) ? ' data-layout="' . trim($params['layout']) . '"' : ' data-layout="standard"';
	$lang = isset($params['lang']) ? trim($params['lang']) : "en_US";
	$comments = isset($params['comments']) ? trim($params['comments']) : "true";

	if ($custom_url != "") {
		$url = $custom_url;
	} else {
		$gCms = CmsApp::get_instance();
		$url = cge_url::current_url();
	}	

	$result = "";
	$result .= '<!-- Start Facebook plugin -->' . PHP_EOL;
	if($id){
		$result .= '<div id="'.$id.'">';
	}
	$result .= '<div id="fb-root"></div>';
	$result .= '<script async defer crossorigin="anonymous" src="https://connect.facebook.net/'.$lang.'/sdk.js#xfbml=1&version=v15.0'.$data_appid.'" nonce="1stsUJtl"></script>';
	if($comments != 'only'){
		$result .= '<div class="fb-like '.$class.'" data-href="' . $url . '"'.$data_share . $show_faces. $data_action . $data_colorscheme . $data_font . $data_layout . $data_size;
		if($params['width'] !== "100%"){
			$result .= $data_width;
		}
		$result .= '></div>';
	}
	if($comments != 'false'){
		$result .= '<div id="comments">';
		$result .= '<div class="fb-comments" data-href="' . $url . '"'.$data_width .' data-num-posts="5">';
		$result .= '</div>';
	}
	$result .= '</div>';
	if($params['width'] == "100%"){
		$result .= '<style>
					.fb-like,
					.fb-like > span,
					.fb-like iframe[style] {
						width: 100% !important;
					}
					</style>';
	}
	$result .= '<!-- End Facebook plugin -->';
	

	return $result;

}

function smarty_cms_help_function_FacebookLikeButton() {
	?>
	<h3>What does this do?</h3>
	<p>The Like button lets a user share your content with friends on Facebook. When the user clicks the Like button on your site, a story appears in the user's friends' News Feed with a link back to your website.</p>
<h3>How do I use it?</h3>
	<p>Insert the tag <code>{FacebookLikeButton}</code> into your template or page (case sensitive).</p>
	<p>To ensure that web-designers have maximum control over customization, if you want to style the plugin's output, feel free to use additional external CSS rules in conjunction with the <code>class</code> parameter.</p>
<p>Alternatively, you can always use the <code>custom_url</code> parameters to set manually (or pass them via smarty) the url and title values of the current page without self detection functionality.</p><br>

<p><strong>Recommended</strong>: Add the Open Graph tags to the &lt;head&gt; section of your template:</p>
<p>&lt;meta property=&quot;og:url&quot; content=&quot;{$canonical}&quot; /&gt;<br>
  &lt;meta property=&quot;og:title&quot; content=&quot;{if isset($pagetitle)}{$pagetitle}{else}{title}{/if}&quot; /&gt;  <br>
  &lt;meta property=&quot;og:description&quot; content=&quot;Your description&quot; /&gt;  <br>
  &lt;meta property=&quot;og:image&quot; content=&quot;http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg&quot; /&gt;<br>
  &lt;meta property=&quot;fb:app_id&quot; content=&quot;XXX&quot; /&gt;<br>
  &lt;meta property=&quot;og:locale&quot; content=&quot;en_US&quot; /&gt;<br>
  &lt;meta property=&quot;og:type&quot; content=&quot;article&quot; /&gt;<br>
</p>
<h3>What parameters does it take?	</h3>
	<ul>
<li><em>(optional)</em> <code>appid</code>
  <ul>
    <li>In order to use <a href="https://developers.facebook.com/docs/sharing/referral-insights">Facebook Insights</a> you must add the app ID to your page. Insights lets you view analytics for traffic to your site from Facebook</li>
    <li>E.g. <code>{FacebookLikeButton appid="XXXXXXXX"}</code></li>
  </ul>
</li>
<li>  <em>(optional)</em> <code>layout</code></li>
		<ul>
			<li>there are three options. 
			  <ul>
			    <li><strong>standard (default)</strong>
<ul>
	        <li>displays social text to the right of the button and friends' profile photos below. Minimum width: 225 pixels. Minimum increases by 40px if action is 'recommend' by and increases by 60px if send is 'true'. Default width: 450 pixels. Height: 35 pixels (without photos) or 80 pixels (with photos). </li>
			        <li><code>{FacebookLikeButton layout="standard"}</code></li>
		          </ul>
			    </li>
			    <li>button_count
			      <ul>
			        <li>displays the total number of likes to the right of the button. Minimum width: 90 pixels. Default width: 90 pixels. Height: 20 pixels.</li>
			        <li><code>{FacebookLikeButton layout="button_count"}</code></li>
		          </ul>
			    </li>
			    <li>box_count
			      <ul>
			        <li>displays the total number of likes above the button. Minimum width: 55 pixels. Default width: 55 pixels. Height: 65 pixels.</li>
			        <li><code>{FacebookLikeButton layout="box_count"}</code></li>
		          </ul>
			    </li>
			    <li>button
                  <ul>
                    <li>displays the like and share button only. Minimum width: 47 pixels. Default width: 47 pixels. Height: 20 pixels.</li>
                    <li><code>{FacebookLikeButton layout="button"}</code></li>
                  </ul>
                </li>
		      </ul>
		  </li>
		</ul>
		<li><em>(optional)</em> <code>share</code>
		  <ul>
		    <li>Specifies whether to include a share button beside the Like button. </li>
		    <li>E.g. <code>{FacebookLikeButton share="false"}</code></li>
	      </ul>
	  </li>
		<li><em>(optional)</em> <code>comments</code>
		  <ul>
		    
		    <li>Specifies whether to include the comments box. </li>
            <li>E.g. <code>{FacebookLikeButton comments="false"}</code></li>
            <li>If you wish to display ONLY the comments box use <code>{FacebookLikeButton comments="only"}</code></li>
            <li>Options: true, false and only</li>
	      </ul>
		</li>
	  <li><em>(optional)</em> <code>class</code></li>
        <ul>
          <li>Populates the "<code>class</code>" attribute of the link, set the CSS class name</li>
          <li>E.g. <code>{FacebookLikeButton class="MyCssClassName"}</code></li>
        </ul>
        <li><em>(optional)</em> <code>id</code></li>
        <ul>
          <li>Populates the &quot;<code>id</code>&quot; attribute of the link, set the CSS class name</li>
          <li>E.g. <code>{FacebookLikeButton id=&quot;MyCssidName&quot;}</code>      </li>
        </ul>
      <li><em>(optional)</em> <code>show_faces</code></li>
		<ul>
			<li>specifies whether to display profile photos below the button (standard layout only)</li>
			<li>E.g.<code>{FacebookLikeButton show_faces="false"}</code></li>
		</ul>
		<li><em>(optional)</em> <code>width</code></li>
		<ul>
			<li>the width of the Like button.</li>
			<li>E.g. <code>{FacebookLikeButton width="200"}</code> or <code>{FacebookLikeButton width="100%"}</code></li>
		</ul>
<li><em>(optional)</em> <code>action</code></li>
		<ul>
			<li>the verb to display on the button.
			  <ul>
			    <li><strong>like (default)</strong></li>
			    <li>recommend</li>
		      </ul>
		    </li>
			<li>E.g. <code>{FacebookLikeButton action="recommend"}</code></li>
		</ul>
		<li><em>(optional)</em> <code>font</code></li>
		<ul>
			<li>the font to display in the button.
			  <ul>
			    <li>arial</li>
			    <li>lucida grande</li>
			    <li>segoe ui</li>
			    <li>tahoma</li>
			    <li>trebuchet ms</li>
			    <li>verdana </li>
		      </ul>
			</li>
			<li>E.g. <code>{FacebookLikeButton font="tahoma"}</code></li>
		</ul>
		<li><em>(optional)</em> <code>colorscheme</code></li>
		<ul>
			<li>the color scheme for the like button.
			  <ul>
			    <li>light</li>
			    <li>dark </li>
		      </ul>
		    </li>
			<li>E.g. <code>{FacebookLikeButton colorscheme="<strong>dark</strong><strong></strong>"}</code></li>
		</ul>
<li><em>(optional)</em> <code>custom_url</code></li>
		<ul>
			<li>Set manually the <strong>complete</strong> url of the current page without self detection functionality</li>
			<li>Simply specify the URL of your Facebook page in the href parameter of the button.</li>
			<li>E.g. <code>{FacebookLikeButton custom_url="https://www.domain.ext/my/current/page"}</code></li>
		</ul>
		<li><em>(optional)</em> <code>lang</code></li>
        <ul>
          <li>Facebook is currently available in over 70 languages.</li>
          <li>The locales that Facebook supports are available in an <a href="http://www.facebook.com/translations/FacebookLocales.xml" target="_blank">XML file</a>.</li>
          <li>Default language is 'en_US' and represents US English.</li>
          <li>E.g. <code>{FacebookLikeButton lang="es_LA"}</code></li>
        </ul>
        <p>&nbsp;</p>
</ul>
	<?php
}

function smarty_cms_about_function_FacebookLikeButton() {
	?>
<p>Author: <a href="http://www.facebook.com/MagalFreelanceWebDeveloper">Magal Hezi</a></p>
<p>Version: 3.0</p>
	<p>Update: Check for updates for this plugin at the <a href="http://dev.cmsmadesimple.org/projects/likebutton" target="_blank">CMS Made Simple Forge page</a></p>
	<p>Feature Requests: If you want to add others social bookmarking services or functionality, please let me know by opening a new feature request in the dedicated <strong>Feature Requests tab</strong> of the <a href="http://dev.cmsmadesimple.org/projects/likebutton" target="_blank">CMS Made Simple Forge page</a> for this plugin</p>
	<p>Bugs: If you want to submit a new bug, please let me know by opening a new bug in the dedicated <strong>Bug Tracker tab</strong> of the <a href="http://dev.cmsmadesimple.org/projects/likebutton" target="_blank">CMS Made Simple Forge page</a> for this plugin</p>
	<p>Licence: Free software under the GNU General Public License</p>
	<p>Change History:</p>
	<ul>

<li>Version 3.0
  <ul>
    <li>Updated to FB v15.0</li>
    <li><strong>Facebook App ID</strong> ready</li>
    <li>100% width possible</li>
  </ul>
  Version 2.0
  <ul>
    <li>Updated to FB v2</li>
    <li>Has Share button available</li>
    <li>Send button removed.</li>
    <li>Comments box available and optional (can also be used alone)</li>
  </ul>
</li>
<li>Version 1.1
  <ul>
    <li>Fixed bug. Will now work when added to template</li>
  </ul>
</li>
<li>Version 1.0</li>
		<ul>
			<li>First release</li>
		</ul>
	</ul>
	<?php
}
?>
