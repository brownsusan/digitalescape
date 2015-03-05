		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Favicon',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enter URL of favicon.',THEME_DOMAIN); ?><br/></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('favicon_url'); ?>" id="<?php NLThemeHelper::getFormName('favicon_url'); ?>" class="to-float-left" value="<?php echo  esc_attr($this->data['option']['favicon_url']); ?>" />
					<input type="button" name="faviconURLBrowse" id="faviconURLBrowse" class="to-button-browse to-button" value="<?php esc_attr_e('Browse',THEME_DOMAIN); ?>"/>
				</div>
			</li>
		</ul>
		<script type="text/javascript">
			jQuery(document).ready(function($) 
			{
				var element=$('.to').themeOptionElement();
				element.bindBrowseMedia('#faviconURLBrowse');
			});
		</script>