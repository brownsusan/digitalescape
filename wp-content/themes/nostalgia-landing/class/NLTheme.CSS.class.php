<?php

/******************************************************************************/
/******************************************************************************/

class NLThemeCSS
{
	/**************************************************************************/
	
	function __construct()
	{
		$this->fontWeight=array
		(
			'100'				=>	array(__('100',THEME_DOMAIN)),
			'200'				=>	array(__('200',THEME_DOMAIN)),
			'300'				=>	array(__('300',THEME_DOMAIN)),
			'400'				=>	array(__('400',THEME_DOMAIN)),
			'500'				=>	array(__('500',THEME_DOMAIN)),
			'600'				=>	array(__('600',THEME_DOMAIN)),
			'700'				=>	array(__('700',THEME_DOMAIN)),
			'800'				=>	array(__('800',THEME_DOMAIN)),
			'900'				=>	array(__('900',THEME_DOMAIN)),	
			'bold'				=>	array(__('bold',THEME_DOMAIN)),
			'bolder'			=>	array(__('bolder',THEME_DOMAIN)),
			'inherit'			=>	array(__('inherit',THEME_DOMAIN)),
			'lighter'			=>	array(__('lighter',THEME_DOMAIN)),
			'normal'			=>	array(__('normal',THEME_DOMAIN))
		);

		$this->fontStyle=array
		(
			'inherit'			=>	array(__('inherit',THEME_DOMAIN)),
			'italic'			=>	array(__('italic',THEME_DOMAIN)),
			'normal'			=>	array(__('normal',THEME_DOMAIN)),
			'oblique'			=>	array(__('oblique',THEME_DOMAIN))
		);			
	}
	
	/**************************************************************************/
	
	function create($option,$return=false)
	{
		$option['property']=$this->validateProperty($option['property']);
		
		if(!count($option['property'])) return;
		
		NLThemeHelper::removeUIndex($option,array('media',array()),array('selector',array()),'property',THEME_CONTEXT);
		
		$output=null;
		
		$output.=$this->createMedia($option['media']);
		$output.=$this->createSelector($option['selector']);
		$output.=$this->createProperty($option['property']);
		$output.=$this->createMedia($option['media'],false);
		
		if($return) return($output);
		else echo $output;
	}
	
	/**************************************************************************/
	
	function validateProperty($property)
	{
		$data=array();
		$Validation=new NLThemeValidation();
		
		foreach($property as $name=>$value)
		{
			switch($name)
			{
				case 'font-size':
				case 'min-height':
				case 'padding-top':
				case 'padding-left':
				case 'padding-right':
				case 'padding-bottom':
				case 'margin-top':
				case 'margin-left':
				case 'margin-right':
				case 'margin-bottom':

					if($Validation->isNumber($value,0,9999)) $data[$name]=$value.'px';
				
				break;
				
				case 'color':
				case 'background-color':
					
					if($Validation->isHexColor($value)) $data[$name]='#'.$value;
					
				break;
				
				case 'font-style':
					
					if(isset($this->fontStyle[$value])) $data[$name]=$value;
	
				break;
				
				case 'font-weight':
					
					if(isset($this->fontWeight[$value])) $data[$name]=$value;
	
				break;
				
				case 'font-family':
					
					foreach((array)$value as $family)
					{
						if($Validation->isNotEmpty($family)) 
						{
							NLThemeHelper::removeUIndex($data,$name);
							
							if($Validation->isNotEmpty($data[$name])) $data[$name].=',';
							$data[$name].='\''.$family.'\'';
						}
					}
					
				break;
				
				case 'background-color-rgba':
				
					$background=$Validation->isHexColor($value['background-color']) ? $value['background-color'] : false;
					
					if($background!==false) $background=NLThemeHelper::HEX2RGB($background);
		
					$opacity=$Validation->isNumber($value['opacity'],0,100) ? $value['opacity'] : 100; 
					$opacity/=100;
					
					$data['background-color']=$background===false ? 'transparent' : 'rgba('.$background['r'].','.$background['g'].','.$background['b'].','.$opacity.')';
					
					if($background!==false)
					{
						$background=NLThemeHelper::RGB2ARGB($background,$opacity);
						
						$data['zoom']=1;
						$data['-ms-filter']='progid:DXImageTransform.Microsoft.gradient(startColorstr=#'.$background.',endColorstr=#'.$background.')';
						$data['filter']='progid:DXImageTransform.Microsoft.gradient(startColorstr=#'.$background.',endColorstr=#'.$background.')';
					}

				break;
				
				case 'background-repeat':
				case 'background-position':
					
					if($Validation->isNotEmpty($value)) $data[$name]=$value;
					
				break;
				
				case 'background-image':
					
					if($Validation->isNotEmpty($value)) $data[$name]='url(\''.$value.'\')';
					
				break;
			}
		}
		
		return($data);
	}
	
	/**************************************************************************/
	
	function createSelector($selector)
	{
		$output=null;
		
		foreach($selector as $name)
		{
			if(!is_null($output)) $output.=",\n";
			$output.=$name;
		}
		
		return("\n".$output."\n{\n");
	}
	
	/**************************************************************************/
	
	function createProperty($property)
	{
		$output=null;
		
		foreach($property as $name=>$value)
		{
			if(!is_null($output)) $output.="\n";
			$output.="\t".$name.':'.$value.';';
		}
		
		return($output."\n}\n");		
	}
	
	/**************************************************************************/
	
	function createMedia($media,$start=true)
	{
		if(!count($media)) return;
		
		if($start)
		{
			$output=null;
			foreach($media as $index=>$value)
				$output.=' and ('.$index.':'.$value.'px)';
	
			$output="@media only screen ".$output."\n{\n";
		}
		else $output="}\n\n";
		
		return($output);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/