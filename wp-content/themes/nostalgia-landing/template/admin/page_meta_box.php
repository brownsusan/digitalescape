		<?php echo $this->data['nonce']; ?>
		<div class="to">
			<ul class="to-form-field-list">
<?php
		if(count($this->data['dictionary']['pageSchema'] ))
		{
?>
				<li>
					<h5><?php esc_html_e('Page schema',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php esc_html_e('Select page schema.',THEME_DOMAIN); ?></span>
					<div>
						<select name="<?php NLThemeHelper::getFormName('page_page_schema'); ?>" id="<?php NLThemeHelper::getFormName('page_page_schema'); ?>">
<?php
			foreach($this->data['dictionary']['pageSchema'] as $index=>$value)
				echo '<option value="'.esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['page_page_schema'],$index,false).'>'.esc_html($value['title']).'</option>';
?>
						</select>
					</div>
				</li>
<?php
		}
?>
				<li>
					<h5><?php esc_html_e('Additional class name',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php esc_html_e('Additional class name.',THEME_DOMAIN); ?></span>
					<div>
						<input type="text" name="<?php NLThemeHelper::getFormName('page_class_name'); ?>" id="<?php NLThemeHelper::getFormName('page_class_name'); ?>" value="<?php echo esc_attr($this->data['option']['page_class_name']); ?>" maxlength="255" />
					</div>
				</li>
				<li>
					<h5><?php esc_html_e('Page layout',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php esc_html_e('Select page layout.',THEME_DOMAIN); ?></span>
					<div>
						<select name="<?php NLThemeHelper::getFormName('page_page_layout'); ?>" id="<?php NLThemeHelper::getFormName('page_page_layout'); ?>">
<?php
		foreach($this->data['dictionary']['pageLayout'] as $index=>$value)
			echo '<option value="'.esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['page_page_layout'],$index,false).'>'.esc_html($value[0]).'</option>';
?>
						</select>
					</div>
				</li>
				<li>
					<h5><?php esc_html_e('Navigation bar icon',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php esc_html_e('Navigation bar icon.',THEME_DOMAIN); ?></span>
					<div>
						<select name="<?php NLThemeHelper::getFormName('page_navigation_bar_icon'); ?>" id="<?php NLThemeHelper::getFormName('page_navigation_bar_icon'); ?>">
<?php
		foreach($this->data['dictionary']['navigationBarIcon'] as $index=>$value)
			echo '<option value="'.esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['page_navigation_bar_icon'],$index,false).'>'.esc_html($value[0]).'</option>';
?>
						</select>
					</div>
				</li>
				<li>
					<h5><?php esc_html_e('Show header',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php esc_html_e('Show header.',THEME_DOMAIN); ?></span>
					<div class="to-radio-button">
						<input type="radio" name="<?php NLThemeHelper::getFormName('page_show_header'); ?>" id="<?php NLThemeHelper::getFormName('page_show_header_1'); ?>" value="1" <?php echo ($this->data['option']['page_show_header']==1 ? 'checked' : ''); ?>/>
						<label for="<?php NLThemeHelper::getFormName('page_show_header_1'); ?>"><?php esc_html_e('Yes',THEME_DOMAIN); ?></label>
						<input type="radio" name="<?php NLThemeHelper::getFormName('page_show_header'); ?>" id="<?php NLThemeHelper::getFormName('page_show_header_0'); ?>" value="0" <?php echo ($this->data['option']['page_show_header']==0 ? 'checked' : ''); ?>/>
						<label for="<?php NLThemeHelper::getFormName('page_show_header_0'); ?>"><?php esc_html_e('No',THEME_DOMAIN); ?></label>
					</div>
				</li>
				<li>
					<h5><?php esc_html_e('Show page',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php esc_html_e('Show page.',THEME_DOMAIN); ?></span>
					<div class="to-radio-button">
						<input type="radio" name="<?php NLThemeHelper::getFormName('page_show_page'); ?>" id="<?php NLThemeHelper::getFormName('page_show_page_1'); ?>" value="1" <?php echo ($this->data['option']['page_show_page']==1 ? 'checked' : ''); ?>/>
						<label for="<?php NLThemeHelper::getFormName('page_show_page_1'); ?>"><?php esc_html_e('Yes',THEME_DOMAIN); ?></label>
						<input type="radio" name="<?php NLThemeHelper::getFormName('page_show_page'); ?>" id="<?php NLThemeHelper::getFormName('page_show_page_0'); ?>" value="0" <?php echo ($this->data['option']['page_show_page']==0 ? 'checked' : ''); ?>/>
						<label for="<?php NLThemeHelper::getFormName('page_show_page_0'); ?>"><?php esc_html_e('No',THEME_DOMAIN); ?></label>
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