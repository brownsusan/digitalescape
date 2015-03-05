		<div class="contact-details-box">

			<div id="<?php echo $this->data['id']; ?>" class="google-map"></div>
<?php
		$Validation=new NLThemeValidation();

		if($this->data['optionGoogleMap']['company_info_enable']==1)
		{
?>
			<div class="contact-details">

				<a href="#" class="contact-details-button"></a>
				<div class="clear-fix layout-p-50x50">
					<div class="column-left">
<?php
			$t=null;
			$output=array();

			$output[0]=esc_html($this->data['option']['company_info_company_name']);
			$output[1]=esc_html($this->data['option']['company_info_company_street']);
			$output[2]=esc_html($this->data['option']['company_info_company_postcode'].' '.esc_html($this->data['option']['company_info_company_city']).' '.esc_html($this->data['option']['company_info_company_country']));

			foreach($output as $value)
			{
				if($Validation->isNotEmpty($value))
				{
					if(!is_null($t)) $t.='<br/>';
					$t.=$value;
				}
			}

			echo $t;
?>
					</div>
					<div class="column-right">
						<ul class="no-list">
<?php
			if($Validation->isNotEmpty($this->data['option']['company_info_company_phone']))
			{
?>
							<li class="icon-2 icon-2-1"><?php echo esc_html($this->data['option']['company_info_company_phone']); ?></li>
<?php
			}
			if($Validation->isNotEmpty($this->data['option']['company_info_company_fax']))
			{
?>
							<li class="icon-2 icon-2-2"><?php echo esc_html($this->data['option']['company_info_company_fax']); ?></li>				
<?php
			}
			if($Validation->isNotEmpty($this->data['option']['company_info_company_email']))
			{
?>
							<li class="icon-2 icon-2-3"><?php echo esc_html($this->data['option']['company_info_company_email']); ?></li>			
<?php
			}
?>
						</ul>
					</div>
				</div>
			</div>
<?php
		}
?>
		</div>

		<div class="hidden">
			<script type="text/javascript">
				jQuery(document).ready(function() 
				{
					var theme=new NLTheme();
					theme.createGoogleMap('<?php echo $this->data['id']; ?>',<?php echo json_encode($this->data['optionGoogleMap']); ?>);
				});
			</script>
		</div>