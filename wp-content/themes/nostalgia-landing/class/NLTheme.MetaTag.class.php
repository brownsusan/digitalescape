<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeMetaTag
{
	/**************************************************************************/

	function NLThemeMetaTag()
	{
		$this->metaTag=array
		(
			'keywords'			=>	array
			(
				'info'			=>	__('Keywords',THEME_DOMAIN),
				'structure'		=>	array('name'=>'keywords','content'=>'[value]')
			),
			'description'		=>	array
			(
				'info'			=>	__('Description',THEME_DOMAIN),
				'structure'		=>	array('name'=>'description','content'=>'[value]')
			),
			'subject'			=>	array
			(
				'info'			=>	__('Subject',THEME_DOMAIN),
				'structure'		=>	array('name'=>'subject','content'=>'[value]')
			),
			'copyright'			=>	array
			(
				'info'			=>	__('Copyright',THEME_DOMAIN),
				'structure'		=>	array('name'=>'copyright','content'=>'[value]')
			),
			'language'			=>	array
			(
				'info'			=>	__('Language',THEME_DOMAIN),
				'structure'		=>	array('name'=>'language','content'=>'[value]')
			),
			'robots'			=>	array
			(
				'info'			=>	__('Robots',THEME_DOMAIN),
				'structure'		=>	array('name'=>'robots','content'=>'[value]')
			),
			'revised'			=>	array
			(
				'info'			=>	__('Revised',THEME_DOMAIN),
				'structure'		=>	array('name'=>'revised','content'=>'[value]')
			),
			'abstract'			=>	array
			(
				'info'			=>	__('Abstract',THEME_DOMAIN),
				'structure'		=>	array('name'=>'abstract','content'=>'[value]')
			),
			'topic'				=>	array
			(
				'info'			=>	__('Topic',THEME_DOMAIN),
				'structure'		=>	array('name'=>'topic','content'=>'[value]')
			),
			'summary'			=>	array
			(
				'info'			=>	__('Summary',THEME_DOMAIN),
				'structure'		=>	array('name'=>'summary','content'=>'[value]')
			),
			'classification'	=>	array
			(
				'info'			=>	__('Classification',THEME_DOMAIN),
				'structure'		=>	array('name'=>'Classification','content'=>'[value]')
			),
			'author'			=>	array
			(
				'info'			=>	__('Author',THEME_DOMAIN),
				'structure'		=>	array('name'=>'author','content'=>'[value]')
			),
			'designer'			=>	array
			(
				'info'			=>	__('Designer',THEME_DOMAIN),
				'structure'		=>	array('name'=>'designer','content'=>'[value]')
			),
			'copyright'			=>	array
			(
				'info'			=>	__('Copyright',THEME_DOMAIN),
				'structure'		=>	array('name'=>'copyright','content'=>'[value]')
			),
			'replyto'			=>	array
			(
				'info'			=>	__('Reply-to',THEME_DOMAIN),
				'structure'		=>	array('name'=>'reply-to','content'=>'[value]')
			),
			'owner'				=>	array
			(
				'info'			=>	__('Owner',THEME_DOMAIN),
				'structure'		=>	array('name'=>'owner','content'=>'[value]')
			),
			'url'				=>	array
			(
				'info'			=>	__('Url',THEME_DOMAIN),
				'structure'		=>	array('name'=>'url','content'=>'[value]')
			),
			'identifierurl'		=>	array
			(
				'info'			=>	__('Identifier-URL',THEME_DOMAIN),
				'structure'		=>	array('name'=>'identifier-URL','content'=>'[value]')
			),
			'directory'			=>	array
			(
				'info'			=>	__('Directory',THEME_DOMAIN),
				'structure'		=>	array('name'=>'directory','content'=>'[value]')
			),
			'category'			=>	array
			(
				'info'			=>	__('Category',THEME_DOMAIN),
				'structure'		=>	array('name'=>'category','content'=>'[value]')
			),
			'coverage'			=>	array
			(
				'info'			=>	__('Coverage',THEME_DOMAIN),
				'structure'		=>	array('name'=>'coverage','content'=>'[value]')
			),
			'distribution'		=>	array
			(
				'info'			=>	__('Distribution',THEME_DOMAIN),
				'structure'		=>	array('name'=>'distribution','content'=>'[value]')
			),
			'rating'			=>	array
			(
				'info'			=>	__('Rating',THEME_DOMAIN),
				'structure'		=>	array('name'=>'rating','content'=>'[value]')
			),
			'revisitafter'		=>	array
			(
				'info'			=>	__('Revisit-after',THEME_DOMAIN),
				'structure'		=>	array('name'=>'revisit-after','content'=>'[value]')
			),
			'expires'			=>	array
			(
				'info'			=>	__('Expires',THEME_DOMAIN),
				'structure'		=>	array('name'=>'Expires','content'=>'[value]')
			),
			'pragma'			=>	array
			(
				'info'			=>	__('Pragma',THEME_DOMAIN),
				'structure'		=>	array('name'=>'Pragma','content'=>'[value]')
			),
			'cachecontrol'		=>	array
			(
				'info'			=>	__('Cache-Control',THEME_DOMAIN),
				'structure'		=>	array('name'=>'Cache-Control','content'=>'[value]')
			)
		);
	}
	
	/**************************************************************************/
	
	function createMetaTag()
	{
		$output=null;
		$Validation=new NLThemeValidation();
		
		foreach($this->metaTag as $metaTagIndex=>$metaTagValue)
		{
			$value=NLThemeOption::getOption('meta_tag_'.$metaTagIndex);
			if($Validation->isEmpty($value)) continue;
		
			$attribute=null;
			foreach($metaTagValue['structure'] as $structureIndex=>$structureValue)
				$attribute.=' '.$structureIndex.'="'.$structureValue.'"';
				
			$output.='<meta'.preg_replace('/\[value\]/',esc_attr($value),$attribute).'>';
		}
		
		return($output);
	}

	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/