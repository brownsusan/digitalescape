		<?php echo $this->data['nonce']; ?>
		<div class="to">
			<ul class="to-form-field-list">
				<li>
					<h5><?php esc_html_e('On click action',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php esc_html_e('Select action when user click on thumbnail.',THEME_DOMAIN); ?></span>
					<div>
						<select name="<?php NLThemeHelper::getFormName('gallery_action_open'); ?>" id="<?php NLThemeHelper::getFormName('gallery_action_open'); ?>">
<?php
		foreach($this->data['dictionary']['actionOpen'] as $index=>$value)
			echo '<option value="'.esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['gallery_action_open'],$index).'>'.esc_html($value[0]).'</option>';
?>
						</select>
					</div>
				</li>
				<li>
					<h5><?php esc_html_e('Video URL (Youtube)',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php esc_html_e('Enter URL of video from Youtube.',THEME_DOMAIN); ?></span>
					<div>
						<input type="text" name="<?php NLThemeHelper::getFormName('gallery_url_video_youtube'); ?>" id="<?php NLThemeHelper::getFormName('gallery_url_video_youtube'); ?>" value="<?php echo esc_attr($this->data['option']['gallery_url_video_youtube']); ?>" maxlength="255" />
					</div>
				</li>
				<li>
					<h5><?php esc_html_e('Video URL (Vimeo)',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php esc_html_e('Enter URL of video from Vimeo.',THEME_DOMAIN); ?></span>
					<div>
						<input type="text" name="<?php NLThemeHelper::getFormName('gallery_url_video_vimeo'); ?>" id="<?php NLThemeHelper::getFormName('gallery_url_video_vimeo'); ?>" value="<?php echo esc_attr($this->data['option']['gallery_url_video_vimeo']); ?>" maxlength="255" />
					</div>
				</li>
				<li>
					<h5><?php esc_html_e('Page URL',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php esc_html_e('Enter URL of which need to open.',THEME_DOMAIN); ?></span>
					<div>
						<input type="text" name="<?php NLThemeHelper::getFormName('gallery_url_page'); ?>" id="<?php NLThemeHelper::getFormName('gallery_url_page'); ?>" value="<?php echo esc_attr($this->data['option']['gallery_url_page']); ?>" maxlength="255" />
					</div>
				</li>
				<li>
					<h5><?php esc_html_e('Additional shortcodes',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php esc_html_e('Additional shortcodes.',THEME_DOMAIN); ?></span>
					<div>
						<?php esc_html_e('Image',THEME_DOMAIN); ?>: [<?php echo THEME_CONTEXT; ?>_single_image id="<?php echo $this->data['postId']; ?>"]
					</div>
				</li>
			</ul>
		</div>
		<script type="text/javascript">
			jQuery(document).ready(function($)
			{
				$('.to').themeOptionElement({init:true});	
			});
		</script>