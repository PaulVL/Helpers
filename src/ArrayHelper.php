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
}