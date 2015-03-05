		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Logo',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enter URL of image.',THEME_DOMAIN); ?><br/></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('logo_image_url'); ?>" id="<?php NLThemeHelper::getFormName('logo_image_url'); ?>" class="to-float-left" value="<?php echo  esc_attr($this->data['option']['logo_image_url']); ?>" />
					<input type="button" name="LogoFileBrowse" id="LogoFileBrowse" class="to-button-browse to-button" value="<?php esc_attr_e('Browse',THEME_DOMAIN); ?>"/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Logo URL',THEME_DOMAIN); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enter URL of page.',THEME_DOMAIN); ?></span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('logo_link_url'); ?>" id="<?php NLThemeHelper::getFormName('logo_link_url'); ?>" value="<?php echo esc_attr($this->data['option']['logo_link_url']); ?>" maxlength="255" />
				</div>
			</li>
		</ul>
		<script type="text/javascript">
			jQuery(document).ready(function($) 
			{
				var element=$('.to').themeOptionElement();
				element.bindBrowseMedia('#LogoFileBrowse');
			});
		</script>