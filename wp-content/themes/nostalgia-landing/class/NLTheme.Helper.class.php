<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeHelper
{
	/**************************************************************************/
	
	static function checkSavePost($post_id,$name,$action=null)
	{
		if((defined('DOING_AUTOSAVE')) && (DOING_AUTOSAVE)) return(false);

		if(!array_key_exists($name,$_POST)) return(false);
		
		if(!wp_verify_nonce($_POST[$name],$action)) return(false);

		unset($_POST[$name]);
		
		if(!current_user_can('edit_post',$post_id)) return(false);
		
		return(true);
	}
	
	/**************************************************************************/
	
	static function HEX2RGB($hex) 
	{
		$color=array();

		$color['r']=hexdec(substr($hex,0,2));
		$color['g']=hexdec(substr($hex,2,2));
		$color['b']=hexdec(substr($hex,4,2));
	
		return($color);
	}
	
	/**************************************************************************/
	
	static function DEC2HEX($dec,$add=true)
	{
		$hex=dechex($dec);
		if(($add) && (strlen($dec))==1) $hex='0'.$hex;
		return($hex);
	}
	
	/**************************************************************************/
	
	static function RGB2ARGB($rgb,$opacity)
	{
		$opacity=dechex($opacity*255);
		return($opacity.NLThemeHelper::DEC2HEX($rgb['r']).NLThemeHelper::DEC2HEX($rgb['g']).NLThemeHelper::DEC2HEX($rgb['b']));
	}
	
	/**************************************************************************/
	
	static function createId()
	{
		return(strtoupper(md5(microtime())));
	}
	
	/**************************************************************************/
	
	static function getPostOption($prefix=null)
	{
		if(!is_null($prefix)) $prefix='_'.$prefix.'_';
		
		$option=array();
		foreach($_POST as $key=>$value)
		{
			if(preg_match('/^'.THEME_OPTION_PREFIX.$prefix.'/',$key,$result)) 
			{
				$index=preg_replace('/^'.THEME_OPTION_PREFIX.'_/','',$key);
				$option[$index]=$value;
			}
		}		
		
		$option=NLThemeHelper::stripslashesPOST($option);
		
		return($option);
	}

	/**************************************************************************/
	
	static function setDefaultOption(&$option,$index,$value)
	{
		if(array_key_exists($index,(array)$option)) return;
		$option[$index]=$value;
	}
	
	
	/**************************************************************************/
	
	static function stripslashesPOST($value)
	{
		return(stripslashes_deep($value));
	}

	/**************************************************************************/
	
	static function formatCode($value)
	{
		$value=preg_replace('/\t/','',$value);
		$value=preg_replace('~[\r\n\r\n]+~','',$value);	
		return($value);
	}
	
	/**************************************************************************/
	
	static function getFormName($name,$display=true)
	{
		if(!$display) return(THEME_OPTION_PREFIX.'_'.$name);
		echo THEME_OPTION_PREFIX.'_'.$name;
	}
	
	/**************************************************************************/
	
	static function displayIf($value,$testValue,$text,$display=true)
	{
		if(is_array($value))
		{
			foreach($value as $v)
			{
				if($v==$testValue) 
				{
					if($display) echo $text;
					else return($text);
					return;
				}	
			}
		}
		else 
		{
			if($value==$testValue) 
			{
				if($display) echo $text;
				else return($text);
			}
		}
	}
	
	/**************************************************************************/
	
	static function disabledIf($value,$testValue,$display=true)
	{
		return(NLThemeHelper::displayIf($value,$testValue,' disabled ',$display));
	}
	
	/**************************************************************************/

	static function checkedIf($value,$testValue=1,$display=true)
	{
		return(NLThemeHelper::displayIf($value,$testValue,' checked ',$display));
	}
	
	/**************************************************************************/
	
	static function selectedIf($value,$testValue=1,$display=true)
	{
		return(NLThemeHelper::displayIf($value,$testValue,' selected ',$display));
	}
	
	/**************************************************************************/
	
	static function removeUIndex(&$data)
	{
		$argument=array_slice(func_get_args(),1);
		
		$data=(array)$data;
		
		foreach($argument as $index)
		{
			if(!is_array($index))
			{
				if(!array_key_exists($index,$data))
					$data[$index]='';
			}
			else
			{
				if(!array_key_exists($index[0],$data))
					$data[$index[0]]=$index[1];				
			}
		}
	}
	
	/**************************************************************************/
	
	static function createTermDictionary($term,$parameter=array(),$data=array(),$element=array())
	{
		$dictionary=array();

		$default=array
		(
			'hide_empty'	=>	false
		);
		
		$argument=array_merge($default,$parameter);
		$result=get_terms(array($term),$argument);	
		
		if(in_array('useNone',$element)) $dictionary[-1]=__('[None]',THEME_DOMAIN);
		if(in_array('useSelect',$element)) $dictionary[-1]=__('[Select]',THEME_DOMAIN);
		if(in_array('useDefault',$element)) $dictionary[-1]=__('[Use default settings]',THEME_DOMAIN);
		
		if($result)
		{		
			foreach($result as $post)
				$dictionary[$post->slug]=$post->name;
		}
			
		return($dictionary);		
	}
	
	/**************************************************************************/
	
	static function extractDictionary($data,$element=array(),$labelIndex=0)
	{
		$dictionary=array();
		
		if(in_array('useNone',$element)) $dictionary[-1]=__('[None]',THEME_DOMAIN);
		if(in_array('useSelect',$element)) $dictionary[-1]=__('[Select]',THEME_DOMAIN);
		if(in_array('useDefault',$element)) $dictionary[-1]=__('[Use default settings]',THEME_DOMAIN);
		
		foreach($data as $index=>$value)
			$dictionary[$index]=is_array($value) ? $value[$labelIndex] : $value;
		
		return($dictionary);
	}
	
	/**************************************************************************/
	
	static function getValueFromArray($array,$index)
	{
		if(!array_key_exists($index,$array)) return;
		return($array[$index]);
	}
	
	/**************************************************************************/
	
	static function createHTMLAttribute($value,$valueSeparator=' ',$name='class')
	{
		$html=null;
		
		$Validation=new NLThemeValidation();
		
		if(!is_array($value)) $value=array($value);
		
		$value=trim(implode($valueSeparator,$value));
		
		if($Validation->isEmpty($value)) return($html);
	
		return(' '.$name.'="'.esc_attr($value).'" ');
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/