		<ul class="to-form-field-list">
<?php
		foreach($this->data['dictionary']['metaTag'] as $index=>$value)
		{
?>
			<li>
				<h5><?php echo esc_html($value['info']); ?></h5>
				<span class="to-legend"><?php echo esc_html($value['info']); ?>.</span>
				<div>
					<input type="text" name="<?php NLThemeHelper::getFormName('meta_tag_'.$index); ?>" id="<?php NLThemeHelper::getFormName('meta_tag_'.$index); ?>" value="<?php echo esc_attr($this->data['option']['meta_tag_'.$index]); ?>" maxlength="255"/>
				</div>	
			</li>
<?php
		}
?>
		</ul>