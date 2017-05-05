<?php
/*

TITLE:	    LocationData

DATE: 	    17/06/08
DEVELOPER:  Tarun Mistry
COPY RIGHT: Mistry Solved Ltd 2008

A basic struct to hold information regarding the chosen area

*/

class locationData
{
	public $areaCode;
	public $areaname;
	public $price;
}

/*

TITLE:	    LocationCalc

DATE: 	    17/06/08
DEVELOPER:  Tarun Mistry
COPY RIGHT: Mistry Solved Ltd 2008

Class to process a CSV file of post codes and provide details of which
area matches a given postcode

*/


class locationCalc
{
	//////////////////////////////////////////////////////////////////////
	// Location of the CSV file
	//////////////////////////////////////////////////////////////////////
	private static $csv = "http://thinkpinkskips.co.uk/quote1/skips_postcodes.csv";
	
	//////////////////////////////////////////////////////////////////////
	// Returns locationData object containing data. NULL if no match
	//////////////////////////////////////////////////////////////////////
	public static function getLocationData($start, $end, $no_days, $skips_type)
	{

      	$data = self::matchAgainstCsv(self::getPostCode($start, $end), self::getPriceIndex($no_days, $skips_type) );
	
		return $data;
	}
	
	//////////////////////////////////////////////////////////////////////
	// Processes CSV file into array
	//////////////////////////////////////////////////////////////////////
	private static function matchAgainstCsv($postcode, $price_index)
	{
		$handle = fopen("http://thinkpinkskips.wordpress/wp-content/themes/thinkpinkskips/skips_postcodes.csv", "r");
	    if ($handle !== false)
	      {
	        while (($list = fgetcsv($handle, 0, ",")) !== false)
	  		  {
		            if(stripos($postcode, $list[0]) !== false)
		       		{
					    $data = new locationData();
		    			$data->areaCode = $list[1];
				    	$data->areaname = $list[2];
				    	$data->price = $list[$price_index];
				      }
			    } 
	       }
		return $data;
		fclose($handle);
   }
	
	//////////////////////////////////////////////////////////////////////
	// Returns valid working post code
	//////////////////////////////////////////////////////////////////////
	private static function getPostCode($start, $end)
	{
		return strtoupper(trim($start) . " " . trim($end));
	}


	private static function getPriceIndex($no_days, $skips_type)
	{
		$index = 0; 

		switch ($skips_type) {
		    case "mini":
		      	if($no_days == 3){
		      		$index = 3; 
		      	} else {
					$index = 4; 
		      	}
		        break;
		    case "midi":
				if($no_days == 3){
		      		$index = 5; 
		      	} else {
					$index = 6; 
		      	}
		        break;
		    case "builders":
				if($no_days == 3){
		      		$index = 7; 
		      	} else {
					$index = 8; 
		      	}
		        break;
	        case "large":
				if($no_days == 3){
		      		$index = 9; 
		      	} else {
					$index = 10; 
		      	}
		        break;
		    default:
		       $index = 0; 
			}

			return $index; 
	}

}


?>