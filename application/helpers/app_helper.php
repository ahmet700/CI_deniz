<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if ( ! function_exists('array2items'))
{
	function array2items($items)
	{
		$return = "";
		
		if ( ! is_array($items))
		{
			$items = array($items);
		}
		
		foreach ($items as $item)
		{
			if (isset($array[$item]))
			{
				$return[$item] = $array[$item];
			}
			else
			{
				$return[$item] = $default;
			}
		}

		return $return;
	}
}
//////////////////  Sorunlu Set value /////////////
function set_valuex($field = '', $default = '')
{
    if (!isset($_POST[$field]))
    {
        return $default;
    }

    if (FALSE === ($OBJ = & _get_validation_object()))
    {
        return form_prep($_POST[$field], $field);
    }

    return form_prep($OBJ->set_value($field, $_POST[$field]), $field);
}



/* End of file array_helper.php */
/* Location: ./system/helpers/array_helper.php */