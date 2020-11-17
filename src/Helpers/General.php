<?php
namespace budisteikul\coresdk\Helpers;

class General {
	
    public static function digitFormat($number,$digit)
    {
        $number = str_pad($number, $digit, '0', STR_PAD_LEFT);
        return $number;
    }

	public static function dateFormat($date="",$type="")
	{
		if($date=="") $date = \Carbon\Carbon::now()->toDateTimeString();
		
		
		switch($type)
		{
			case 1:
				return \Carbon\Carbon::parse($date)->format('Y-m-d H:i:s');
			break;
			case 2:
				return \Carbon\Carbon::parse($date)->format('d-m-Y H:i');
			break;
			case 3:
				return \Carbon\Carbon::parse($date)->format('l, d F Y, H:i');
			break;
			case 4:
				return \Carbon\Carbon::parse($date)->format('d F Y');
			break;
			case 5:
				return \Carbon\Carbon::parse($date)->format('d/m/Y');
			break;
			case 6:
				return \Carbon\Carbon::parse($date)->format('l, d F Y');
			break;
			case 7:
				return \Carbon\Carbon::parse($date)->format('Y-m-d 00:00:00');
			break;
			case 8:
				return \Carbon\Carbon::parse($date)->format('Y-m-d 23:59:59');
			break;
			case 9:
				return \Carbon\Carbon::parse($date)->format('d F Y, H:i');
			break;
			default:
				return \Carbon\Carbon::now()->toDateTimeString();
		}
	}

	public static function numberFormat($exp)
    {
        return number_format($exp, 0, ',', '.');
    }
}
?>