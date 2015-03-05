		<?php echo $this->data['nonce']; ?>
		<div class="to">
			<ul class="to-form-field-list">
				<li>
					<h5><?php esc_html_e('Video file',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php esc_html_e('Select video file from media library or paste URL.',THEME_DOMAIN); ?></span>
					<div>
						<input type="text" name="<?php NLThemeHelper::getFormName('bg_video_file'); ?>" id="<?php NLThemeHelper::getFormName('bg_video_file'); ?>" class="to-float-left" value="<?php echo esc_attr($this->data['option']['bg_video_file']); ?>" />
						<input type="button" name="VideoFileBrowse" id="VideoFileBrowse" class="to-button-browse to-button" value="<?php esc_attr_e('Browse',THEME_DOMAIN); ?>"/>
					</div>
				</li>
			</ul>
		</div>
		<script type="text/javascript">
			jQuery(document).ready(function($) 
			{
				var element=$('.to').themeOptionElement({init:true});
				element.bindBrowseMedia('#VideoFileBrowse');
			});
		</script>