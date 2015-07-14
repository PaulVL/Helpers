<?php

namespace PaulVL\Helpers;

class ArrayHelper
{
	public static function recursive_filter($array) 
	{ 
		foreach ($array as &$element) 
		{ 
			if (is_array($element)) 
			{ 
				$element = self::recursive_filter($element); 
			} 
		} 

		return array_filter($array); 
	}

	public static function empty_to_null($array)
	{
		foreach ($array as $key => &$element) 
		{ 
			if (is_array($element)) 
			{ 
				$element = self::empty_to_null($element); 
			}else {
				$array[$key] = PhpHelper::empty_ignoring_zero(trim($element)) ? null : $element;
			}
		} 

		return $array;
	}
}