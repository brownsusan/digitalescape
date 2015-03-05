		<?php echo $this->data['nonce']; ?>
		<div class="to">
			<ul class="to-form-field-list">
				<li>
					<h5><?php esc_html_e('File type',THEME_DOMAIN); ?></h5>
					<span class="to-legend"><?php esc_html_e('Select audio file type.',THEME_DOMAIN); ?></span>
					<div>
						<select name="<?php NLThemeHelper::getFormName('audio_player_file_type'); ?>" id="<?php NLThemeHelper::getFormName('audio_player_file_type'); ?>">
<?php
		foreach($this->data['dictionary']['audioFileType'] as $index=>$value)
			echo '<option value="'.esc_attr($index).'" '.NLThemeHelper::selectedIf($this->data['option']['audio_player_file_type'],$index,false).'>'.esc_html($value[0]).'</option>';
?>
						</select>
					</div>
				</li>
				<li>
					<h5><?php esc_html_e('Audio file',THEME_DOMAIN); ?></h5>
					<span class="to-legend">
						<?php esc_html_e('Select audio file from media library or paste URL. Media Support:',THEME_DOMAIN); ?><br/>
						<?php esc_html_e('HTML5: mp3, mp4 (AAC/H.264), ogg (Vorbis/Theora), webm (Vorbis/VP8), wav, Flash: mp3, mp4 (AAC/H.264), flv',THEME_DOMAIN); ?>
					</span>
					<div>
						<input type="text" name="<?php NLThemeHelper::getFormName('audio_player_file'); ?>" id="<?php NLThemeHelper::getFormName('audio_player_file'); ?>" class="to-float-left" value="<?php echo esc_attr($this->data['option']['audio_player_file']); ?>"/>
						<input type="button" name="AudioFileBrowse" id="AudioFileBrowse" class="to-button-browse to-button" value="<?php esc_attr_e('Browse',THEME_DOMAIN); ?>"/>
					</div>
				</li>
			</ul>
		</div>
		<script type="text/javascript">
			jQuery(document).ready(function($)
			{
				var element=$('.to').themeOptionElement({init:true});
				element.bindBrowseMedia('#AudioFileBrowse');
			});
		</script>