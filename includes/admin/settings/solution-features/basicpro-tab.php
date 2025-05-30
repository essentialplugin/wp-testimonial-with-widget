<?php
/**
 * Admin Class
 *
 * Handles the Admin side functionality of plugin
 *
 * @package Popup Anything on click
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
} ?>
<div id="wtwp_basic_tabs" class="wtwp-vtab-cnt wtwp_basic_tabs wtwp-clearfix">
	
	<!-- <div class="wtwp-deal-offer-wrap">
		<div class="wtwp-deal-offer">
			<div class="wtwp-inn-deal-offer">
				<h3 class="wtwp-inn-deal-hedding"><span>Buy Testimonial Pro</span> today and unlock all the powerful features.</h3>
				<h4 class="wtwp-inn-deal-sub-hedding"><span style="color:red;">Extra Bonus: </span>Users will get <span>extra best discount</span> on the regular price using this coupon code.</h4>
			</div>
			<div class="wtwp-inn-deal-offer-btn">
				<div class="wtwp-inn-deal-code"><span>EPSEXTRA</span></div>
				<a href="<?php // echo esc_url(WTWP_PLUGIN_BUNDLE_LINK); ?>" target="_blank" class="wtwp-sf-btn wtwp-sf-btn-orange"><span class="dashicons dashicons-cart"></span> Get Essential Bundle Now</a>
				<em class="risk-free-guarantee"><span class="heading">Risk-Free Guarantee </span> - We offer a <span>30-day money back guarantee on all purchases</span>. If you are not happy with your purchases, we will refund your purchase. No questions asked!</em>
			</div>
		</div>
	</div> -->

	<!-- <div class="wtwp-deal-offer-wrap">
		<div class="wtwp-deal-offer"> 
			<div class="wtwp-inn-deal-offer">
				<h3 class="wtwp-inn-deal-hedding"><span>Try WP Testimonials with Rotator Widget Pro</span> in Essential Bundle Free For 5 Days.</h3>
			</div>
			<div class="wtwp-deal-free-offer">
				<a href="<?php // echo esc_url( WTWP_PLUGIN_BUNDLE_LINK ); ?>" target="_blank" class="wtwp-sf-free-btn"><span class="dashicons dashicons-cart"></span> Try Pro For 5 Days Free</a>
			</div>
		</div>
	</div> -->

	<!-- <div class="wtwp-black-friday-banner-wrp">
		<a href="<?php // echo esc_url( WTWP_PLUGIN_BUNDLE_LINK ); ?>" target="_blank"><img style="width: 100%;" src="<?php // echo esc_url( WTWP_URL ); ?>assets/images/black-friday-banner.png" alt="black-friday-banner" /></a>
	</div> -->

	<div class="wtwp-black-friday-banner-wrp" style="background:#e1ecc8;padding: 20px 20px 40px; border-radius:5px; text-align:center;margin-bottom: 40px;">
		<h2 style="font-size:30px; margin-bottom:10px;"><span style="color:#0055fb;">WP Blog and Widgets</span> is included in <span style="color:#0055fb;">Essential Plugin Bundle</span> </h2> 
		<h4 style="font-size: 18px;margin-top: 0px;color: #ff5d52;margin-bottom: 24px;">Now get Designs, Optimization, Security, Backup, Migration Solutions @ one stop. </h4>

		<div class="wtwp-black-friday-feature">

			<div class="wtwp-inner-deal-class" style="width:40%;">
				<div class="wtwp-inner-Bonus-class">Bonus</div>
				<div class="wtwp-image-logo" style="font-weight: bold;font-size: 26px;color: #222;"><img style="width: 34px; height:34px;vertical-align: middle;margin-right: 5px;" class="wtwp-img-logo" src="<?php echo esc_url( WTWP_URL ); ?>assets/images/essential-logo-small.png" alt="essential-logo" /><span class="wtwp-esstial-name" style="color:#0055fb;">Essential </span>Plugin</div>
				<div class="wtwp-sub-heading" style="font-size: 16px;text-align: left;font-weight: bold;color: #222;margin-bottom: 10px;">Includes All premium plugins at no extra cost.</div>
				<a class="wtwp-sf-btn" href="<?php echo esc_url( WTWP_PLUGIN_BUNDLE_LINK ); ?>" target="_blank">Grab The Deal</a>
			</div>

			<div class="wtwp-main-list-class" style="width:60%;">
				<div class="wtwp-inner-list-class">
					<div class="wtwp-list-img-class"><img src="<?php echo esc_url( WTWP_URL ); ?>assets/images/logo-image/img-slider.png" alt="essential-logo" /> Image Slider</li></div>

					<div class="wtwp-list-img-class"><img src="<?php echo esc_url( WTWP_URL ); ?>assets/images/logo-image/advertising.png" alt="essential-logo" /> Publication</li></div>

					<div class="wtwp-list-img-class"><img src="<?php echo esc_url( WTWP_URL ); ?>assets/images/logo-image/marketing.png" alt="essential-logo" /> Marketing</li></div>

					<div class="wtwp-list-img-class"><img src="<?php echo esc_url( WTWP_URL ); ?>assets/images/logo-image/photo-album.png" alt="essential-logo" /> Photo album</li></div>

					<div class="wtwp-list-img-class"><img src="<?php echo esc_url( WTWP_URL ); ?>assets/images/logo-image/showcase.png" alt="essential-logo" /> Showcase</li></div>

					<div class="wtwp-list-img-class"><img src="<?php echo esc_url( WTWP_URL ); ?>assets/images/logo-image/shopping-bag.png" alt="essential-logo" /> WooCommerce</li></div>

					<div class="wtwp-list-img-class"><img src="<?php echo esc_url( WTWP_URL ); ?>assets/images/logo-image/performance.png" alt="essential-logo" /> Performance</li></div>

					<div class="wtwp-list-img-class"><img src="<?php echo esc_url( WTWP_URL ); ?>assets/images/logo-image/security.png" alt="essential-logo" /> Security</li></div>

					<div class="wtwp-list-img-class"><img src="<?php echo esc_url( WTWP_URL ); ?>assets/images/logo-image/forms.png" alt="essential-logo" /> Pro Forms</li></div>

					<div class="wtwp-list-img-class"><img src="<?php echo esc_url( WTWP_URL ); ?>assets/images/logo-image/seo.png" alt="essential-logo" /> SEO</li></div>

					<div class="wtwp-list-img-class"><img src="<?php echo esc_url( WTWP_URL ); ?>assets/images/logo-image/backup.png" alt="essential-logo" /> Backups</li></div>

					<div class="wtwp-list-img-class"><img src="<?php echo esc_url( WTWP_URL ); ?>assets/images/logo-image/White-labeling.png" alt="essential-logo" /> Migration</li></div>
				</div>
			</div>
		</div>
		<div class="wtwp-main-feature-item">
			<div class="wtwp-inner-feature-item">
				<div class="wtwp-list-feature-item">
					<img src="<?php echo esc_url( WTWP_URL ); ?>assets/images/logo-image/layers.png" alt="layer" />
					<h5>Site management</h5>
					<p>Manage, update, secure & optimize unlimited sites.</p>
				</div>
				<div class="wtwp-list-feature-item">
					<img src="<?php echo esc_url( WTWP_URL ); ?>assets/images/logo-image/risk.png" alt="backup" />
					<h5>Backup storage</h5>
					<p>Secure sites with auto backups and easy restore.</p>
				</div>
				<div class="wtwp-list-feature-item">
					<img src="<?php echo esc_url( WTWP_URL ); ?>assets/images/logo-image/support.png" alt="support" />
					<h5>Support</h5>
					<p>Get answers on everything WordPress at anytime.</p>
				</div>
			</div>
		</div>
		<a class="wtwp-sf-btn" href="<?php echo esc_url( WTWP_PLUGIN_BUNDLE_LINK ); ?>" target="_blank">Grab The Deal</a>
	</div>

	<h3 style="text-align:center">Compare <span class="wtwp-blue">"WP Testimonials with rotator widget"</span> Free VS Pro</h3>

	<table class="wpos-plugin-pricing-table">
		<colgroup></colgroup>
		<colgroup></colgroup>
		<colgroup></colgroup>
		<thead>
			<tr>
				<th></th>
				<th>
					<h2><?php esc_html_e( 'Free', 'wp-testimonial-with-widget' ); ?></h2>
				</th>
				<th>
					<h2 class="wpos-epb"><?php esc_html_e('Premium', 'wp-testimonial-with-widget'); ?></h2>
				</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<th><?php esc_html_e( 'Designs ', 'wp-testimonial-with-widget' ); ?><span><?php esc_html_e( 'Designs that make your website better', 'wp-testimonial-with-widget' ); ?></span></th>
				<td>4</td>
				<td>20</td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Shortcodes ', 'wp-testimonial-with-widget' ); ?><span><?php esc_html_e( 'Shortcode provide output to the front-end side', 'wp-testimonial-with-widget' ); ?></span></th>
				<td><?php esc_html_e( '2 (Grid, Slider)', 'wp-testimonial-with-widget' ); ?></td>
				<td><?php esc_html_e( '3 (Grid, Slider, form)', 'wp-testimonial-with-widget' ); ?></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Shortcode Parameters ', 'wp-testimonial-with-widget' ); ?><span><?php esc_html_e( 'Add extra power to the shortcode', 'wp-testimonial-with-widget' ); ?></span></th>
				<td>13</td>
				<td>28+</td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Shortcode Generator ', 'wp-testimonial-with-widget' ); ?><span><?php esc_html_e( 'Play with all shortcode parameters with preview panel. No documentation required!!', 'wp-testimonial-with-widget'); ?></span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'WP Templating Features ', 'wp-testimonial-with-widget' ); ?><span class="subtext"><?php esc_html_e( 'You can modify plugin html/designs in your current theme.', 'wp-testimonial-with-widget' ); ?></span></th>
				<td><i class="dashicons dashicons-no-alt"> </i></td>
				<td><i class="dashicons dashicons-yes"> </i></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Widgets ', 'wp-testimonial-with-widget' ); ?><span><?php esc_html_e( 'WordPress Widgets to your sidebars.', 'wp-testimonial-with-widget' ); ?></span></th>
				<td>1</td>
				<td>1</td>
			</tr>

			<tr>
				<th><?php esc_html_e( 'Drag & Drop Post Order Change ', 'wp-testimonial-with-widget' ); ?><span><?php esc_html_e( 'Arrange your desired post with your desired order and display', 'wp-testimonial-with-widget' ); ?></span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Gutenberg Block Supports ', 'wp-testimonial-with-widget' ); ?><span><?php esc_html_e( 'Use this plugin with Gutenberg easily', 'wp-testimonial-with-widget' ); ?></span></th>
				<td><i class="dashicons dashicons-yes"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Elementor Page Builder Support', 'wp-testimonial-with-widget' ); ?> <em class="wpos-new-feature">New</em><span><?php esc_html_e( 'Use this plugin with Elementor easily', 'wp-testimonial-with-widget' ); ?></span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Bevear Builder Support', 'wp-testimonial-with-widget' ); ?> <em class="wpos-new-feature">New</em><span><?php esc_html_e( 'Use this plugin with Bevear Builder easily', 'wp-testimonial-with-widget' ); ?></span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'SiteOrigin Page Builder Support', 'wp-testimonial-with-widget' ); ?> <em class="wpos-new-feature">New</em><span><?php esc_html_e( 'Use this plugin with SiteOrigin easily', 'wp-testimonial-with-widget' ); ?></span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Divi Page Builder Native Support', 'wp-testimonial-with-widget' ); ?> <em class="wpos-new-feature">New</em><span><?php esc_html_e( 'Use this plugin with Divi Builder easily', 'wp-testimonial-with-widget' ); ?></span></th>
				<td><i class="dashicons dashicons-yes"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Avada Page Builder(Fusion) Native Support', 'wp-testimonial-with-widget' ); ?> <em class="wpos-new-feature">New</em><span><?php esc_html_e( 'Use this plugin with Avada Builder easily', 'wp-testimonial-with-widget' ); ?></span></th>
				<td><i class="dashicons dashicons-yes"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'WPBakery Page Builder Supports ', 'wp-testimonial-with-widget' ); ?><span class="subtext"><?php esc_html_e( 'Use this plugin with Visual Composer/WPBakery page builder easily', 'wp-testimonial-with-widget' ); ?></span></th>
				<td><i class="dashicons dashicons-no-alt"> </i></td>
				<td><i class="dashicons dashicons-yes"> </i></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Custom Read More link for Post ', 'wp-testimonial-with-widget' ); ?><span><?php esc_html_e( 'Redirect post to third party destination if any', 'wp-testimonial-with-widget' ); ?></span></th>
				<td><i class="dashicons dashicons-yes"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Publicize ', 'wp-testimonial-with-widget' ); ?><span><?php esc_html_e( 'Support with Jetpack to publish your News post on', 'wp-testimonial-with-widget' ); ?></span></th>
				<td><i class="dashicons dashicons-yes"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr><tr>
				<th><?php esc_html_e( 'Display Desired Post ', 'wp-testimonial-with-widget' ); ?><span><?php esc_html_e( 'Display only the post you want', 'wp-testimonial-with-widget' ); ?></span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>

			<tr>
				<th><?php esc_html_e( 'Display Post for Particular Categories ', 'wp-testimonial-with-widget' ); ?><span><?php esc_html_e( 'Display only the posts with particular category', 'wp-testimonial-with-widget' ); ?></span></th>
				<td><i class="dashicons dashicons-yes"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Exclude Some Posts', 'wp-testimonial-with-widget' ); ?><span><?php esc_html_e( 'Do not display the posts you want', 'wp-testimonial-with-widget' ); ?></span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Exclude Some Categories ', 'wp-testimonial-with-widget' ); ?><span><?php esc_html_e( 'Do not display the posts for particular categories', 'wp-testimonial-with-widget' ); ?></span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Post Order / Order By Parameters ', 'wp-testimonial-with-widget' ); ?><span><?php esc_html_e( 'Display post according to date, title and etc', 'wp-testimonial-with-widget' ); ?></span></th>
				<td><i class="dashicons dashicons-yes"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Multiple Slider Parameters ', 'wp-testimonial-with-widget' ); ?><span><?php esc_html_e( 'Slider parameters like autoplay, number of slide, sider dots and etc.', 'wp-testimonial-with-widget' ); ?></span></th>
				<td><i class="dashicons dashicons-yes"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Slider RTL Support ', 'wp-testimonial-with-widget' ); ?><span><?php esc_html_e( 'Slider supports for RTL website', 'wp-testimonial-with-widget' ); ?></span></th>
				<td><i class="dashicons dashicons-yes"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Automatic Update ', 'wp-testimonial-with-widget' ); ?><span><?php esc_html_e( 'Get automatic plugin updates', 'wp-testimonial-with-widget' ); ?></span></th>
				<td><?php esc_html_e( 'Lifetime', 'wp-testimonial-with-widget' ); ?></td>
				<td><?php esc_html_e( 'Lifetime', 'wp-testimonial-with-widget' ); ?></td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Support ', 'wp-testimonial-with-widget' ); ?><span><?php esc_html_e( 'Get support for plugin', 'wp-testimonial-with-widget' ); ?></span></th>
				<td><?php esc_html_e( 'Lifetime', 'wp-testimonial-with-widget' ); ?></td>
				<td><?php esc_html_e( '1 Year OR Lifetime', 'wp-testimonial-with-widget' ); ?></td>
			</tr>
		</tbody>
	</table>

	<!-- <div class="wtwp-deal-offer-wrap">
		<div class="wtwp-deal-offer">
			<div class="wtwp-inn-deal-offer">
				<h3 class="wtwp-inn-deal-hedding"><span>Buy Testimonial Pro</span> today and unlock all the powerful features.</h3>
				<h4 class="wtwp-inn-deal-sub-hedding"><span style="color:red;">Extra Bonus: </span>Users will get <span>extra best discount</span> on the regular price using this coupon code.</h4>
			</div>
			<div class="wtwp-inn-deal-offer-btn">
				<div class="wtwp-inn-deal-code"><span>EPSEXTRA</span></div>
				<a href="<?php //echo esc_url(WTWP_PLUGIN_BUNDLE_LINK); ?>" target="_blank" class="wtwp-sf-btn wtwp-sf-btn-orange"><span class="dashicons dashicons-cart"></span> Get Essential Bundle Now</a>
				<em class="risk-free-guarantee"><span class="heading">Risk-Free Guarantee </span> - We offer a <span>30-day money back guarantee on all purchases</span>. If you are not happy with your purchases, we will refund your purchase. No questions asked!</em>
			</div>
		</div>
	</div> -->

	<!-- <div class="wtwp-deal-offer-wrap">
		<div class="wtwp-deal-offer"> 
			<div class="wtwp-inn-deal-offer">
				<h3 class="wtwp-inn-deal-hedding"><span>Try WP Testimonials with Rotator Widget Pro</span> in Essential Bundle Free For 5 Days.</h3>
			</div>
			<div class="wtwp-deal-free-offer">
				<a href="<?php // echo esc_url( WTWP_PLUGIN_BUNDLE_LINK ); ?>" target="_blank" class="wtwp-sf-free-btn"><span class="dashicons dashicons-cart"></span> Try Pro For 5 Days Free</a>
			</div>
		</div>
	</div> -->

	<!-- <div class="wtwp-black-friday-banner-wrp">
		<a href="<?php // echo esc_url( WTWP_PLUGIN_BUNDLE_LINK ); ?>" target="_blank"><img style="width: 100%;" src="<?php // echo esc_url( WTWP_URL ); ?>assets/images/black-friday-banner.png" alt="black-friday-banner" /></a>
	</div> -->

</div>