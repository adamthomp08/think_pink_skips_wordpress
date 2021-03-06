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
	public static function getLocationData($start, $end)
	{

      	$data = self::matchAgainstCsv(self::getPostCode($start, $end));
	
		return $data;
	}
	
	//////////////////////////////////////////////////////////////////////
	// Processes CSV file into array
	//////////////////////////////////////////////////////////////////////
	private static function matchAgainstCsv($postcode)
	{
		$handle = fopen("skips_postcodes.csv", "r");
	    if ($handle !== false)
      {
        while (($list = fgetcsv($handle, 0, ",")) !== false)
  		  {
	            if(stripos($postcode, $list[0]) !== false)
	       		{
				    $data = new locationData();
	    			$data->areaCode = $list[1];
			    	$data->areaname = $list[2];
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

}


?>