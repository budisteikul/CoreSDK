<?php
namespace budisteikul\coresdk\Classes;

class GeneralClass {
	
    public static function digitFormat($number,$digit)
    {
        $number = str_pad($number, $digit, '0', STR_PAD_LEFT);
        return $number;
    }

	public static function dateFormat($date="",$type="")
	{
		if($date=="") $date = \Carbon\Carbon::now()->toDateTimeString();
        if($type==1)
        {
            return \Carbon\Carbon::parse($date)->format('Y-m-d H:i:s');
        }
        else if($type==2)
        {
            return \Carbon\Carbon::parse($date)->format('d-m-Y H:i');
        }
        else if($type==3)
        {
            return \Carbon\Carbon::parse($date)->format('l, d F Y, H:i');
        }
        else if($type==4)
        {
            return \Carbon\Carbon::parse($date)->format('d F Y');
        }
        else if($type==5)
        {
            return \Carbon\Carbon::parse($date)->format('d/m/Y');
        }
        else if($type==6)
        {
            return \Carbon\Carbon::parse($date)->format('l, d F Y');
        }
        else
        {
            return \Carbon\Carbon::parse($date)->format('d F Y, H:i');
        }
		
	}

	public static function numberFormat($exp)
    {
        return number_format($exp, 0, ',', '.');
    }

    public static function dateNow()
    {
    	return \Carbon\Carbon::now()->toDateTimeString();
    }

    public static function dateBetween($date="",$type="")
    {

    	if($date=="") $date = \Carbon\Carbon::now()->toDateTimeString();
    	if($type=="first")
    	{
    		return \Carbon\Carbon::parse($date)->format('Y-m-d 00:00:00');
    	}
    	else
    	{
    		return \Carbon\Carbon::parse($date)->format('Y-m-d 23:59:59');
    	}
    	
    }

}
?>