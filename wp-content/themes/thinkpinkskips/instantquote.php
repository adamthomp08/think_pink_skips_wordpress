<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Language" content="sk" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="A1 Supa Skips      &#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;.               &#8220;Super service, excellent value&#8230;&#8230;and very efficient recycling&#8221;" />
<meta name="author" content="Miroslav Vano" />
<meta name="robots" content="index,follow" />
<meta name="generator" content="WordPress 2.5.1" />
<meta name="verify-v1" content="ZWFtePFrC+JLvKIYoC4sWtU0PT3D8HvKf0+OU02WGY0=" />
<link rel="alternate" type="application/rss+xml" title="THINK PINK!  (skips)  ��������������        tel:                                  01524 844151 RSS Feed" href="http://thinkpinkskips.co.uk/feed/" />
<link rel="pingback" href="http://thinkpinkskips.co.uk/xmlrpc.php" />
<link href="http://thinkpinkskips.co.uk/wp-content/themes/pink-glass/style.css" rel="stylesheet" type="text/css" />
<title>Think Pink Skips - A1 Supa-Skips</title>
</head>

<body>
<div id="wrap">
<div id="header">
<h1><a href="http://thinkpinkskips.co.uk/">THINK PINK! (skips) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tel:&nbsp;01524 844151</a></h1>
<p>A1 Supa Skips      &#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;.               &#8220;Super service, excellent value&#8230;&#8230;and very efficient recycling&#8221;</p>
</div>
<div id="menu">
<ul>
<li><a href="http://thinkpinkskips.co.uk" title="Home">Home</a></li>
<li class="page_item page-item-2 current_page_ancestor current_page_parent"><a href="http://thinkpinkskips.co.uk/recycling/" title="Efficient Recycling">Efficient Recycling</a></li>
<li class="page_item page-item-57"><a href="http://thinkpinkskips.co.uk/skips-sizes-permits/" title="Skip Sizes &#038; Permits">Skip Sizes &#038; Permits</a></li>
<li class="page_item page-item-71"><a href="http://thinkpinkskips.co.uk/contact/" title="Contact">Contact</a></li>
</ul>
</div>
<div id="container">
<div id="content">
<div class="page">
<h2>Skip Hire - Quotation</h2>
<p>

         

<!-- BEGIN PHP SCRIPTING -->

<?php

foreach ($_POST as $key => $value)
{
	$$key = $value;
}

/*  This script will receive variables from quote-form.html.  The variables being received are:
    Skip_Size, Duration, pcode1, pcode2, Permit
*/

/* HERE IS WHERE ALL VARIABLES ARE DEFINED IN CASE A VARIABLE IS NOT SELECTED ON THE
   QUOTE-FORM.HTML.  SOME OF THE VARIABLES MAY BE INCOMING WITHOUT VALUES AND THE
   VALUES MUST BE DEFINED TO PREVENT ERRORS.
*/

if ($Skip_Size == NULL)
{
  $Error_txt[] = "Skip Size";
}

if ($Duration == NULL)
{
  $Error_txt[] = "Duration of Hire";
}

if ($pcode1 == NULL) 
{
  $Error_txt[] = "Your Postcode (first part)";
}

if ($pcode2 == NULL)
{
  $Error_txt[] = "Your Postcode (second part)";
}

if ($Permit == NULL)
{
  $Error_txt[] = "On/Off Road";
}

// load $data
if($pcode1 != NULL AND $pcode2 != NULL)
{	
	// Work Out Area Code From Postcode
	include_once("mistrysolved.locationcalc.php");

	// call the PostCode Calculator function
	$data = locationCalc::getLocationData($pcode1,$pcode2);
}


// format errors for display
if($Error_txt != NULL)
{
	$Error_txt = "ERRORS:<br/> The following information was missing: <br/><br/>" . @implode("<br/> ", $Error_txt) . "<br/><br/> Please press back on the browser to correct the problems and try again.";
}
// invalid location
elseif($data == NULL)
{
	$Error_txt = "<br/>We could not find a match to your post code. Please call us on the phone number above for a quote<br/><br/>";
}

// if there are no errors
if ($Error_txt == NULL) 
{
	// CALCULATE SKIP HIRE PRICES
	switch ($Skip_Size)   
	{
		case "Mini":
		switch ($data->areaCode)  
		{
			case "Local":
			
			if($Duration == "3_Day") 
			{
		  		$total = 66.93;
		  	}
		  	else 
		  	{
		       		$total = 66.93;
		  	}
		  	
		  	break;
		  	
		 	case "Area-A":
		       	$total = 79.43;
		  	break;
		  	
		  	case "Area-B":
		       	$total = 97.93;
		   	break;
		  	
		  	case "Area-C":
			$total = 114.93;
		  	break;
		  	
		  	case "Area-D":
			$total = 120.93;
		  	break;
		 	
		 	case "Area-E":
			$total = 140.93;
		  	break;
		}
		break;
		
		case "Midi":
		switch ($data->areaCode)  
		{
			case "Local":
		   	if($Duration == "3_Day") 
		   	{
		       		$total = 89.65;
		   	}
		   	else 
		   	{
		       		$total = 97.13;
		   	}
		  	break;
		  	
		  	case "Area-A":
		       	$total = 109.63;
		  	break;
		  	
		  	case "Area-B":
		       	$total = 128.13;
		  	break;
		  	
		  	case "Area-C":
		       	$total = 145.13;
		  	break;
		  	
		  	case "Area-D":
		     	$total = 151.13;
		  	break;
		  	
		  	case "Area-E":
		     	$total = 171.13;
		  	break;
		}
		break;
		
		
		case "Builders":
		switch ($data->areaCode)  
		{
			case "Local":
		   	if ($Duration == "3_Day") 
		   	{
		       		$total = 157.13;
		   	}
		   	else 
		  	{
		       		$total = 170.11;
		   	}
		  	break;
		  	
		 	case "Area-A":
		       	$total = 182.61;
		  	break;
		 
		 	case "Area-B":
		       	$total = 201.11;
		  	break;
		  	
		 	case "Area-C":
		       	$total = 218.11;
		  	break;
		  	
		 	case "Area-D":
		       	$total = 224.11;
		  	break;
		 	
		 	case "Area-E":
		       	$total = 244.11;
		 	break;
		}
		break;

		case "16-Cubic":
		switch ($data->areaCode)  
		{
			case "Local":
		   	if ($Duration == "3_Day") 
		   	{
		       		$total = 274.00;
		   	}
		   	else 
		  	{
		       		$total = 297.36;
		   	}
		  	break;
		  	
		 	case "Area-A":
		       	$total =  309.86;
		  	break;
		 
		 	case "Area-B":
		       	$total = 328.36;
		  	break;
		  	
		 	case "Area-C":
		       	$total = 345.36;
		  	break;
		  	
		 	case "Area-D":
		       	$total = 351.36;
		  	break;
		 	
		 	case "Area-E":
		       	$total = 371.36;
		 	break;
		}
		break;
		
		default:
		$total = 0;
		break;
	}

	// INCLUDE PERMIT COST
   	if ($Permit == 'Yes') 
   	{
     		$total = $total + 33;
   	}

	// INCLUDE VAT
   	$total = $total * 1.2;
   	$total = number_format ($total, 2);

   	// END CALCULATIONS FOR QUOTE TOTAL
}

// START SCREEN PRINTING OF DATA

if($Error_txt == NULL) 
{

  echo "
	<table border='1' cellpadding='0' cellspacing='0' style='border-collapse: collapse' bordercolor='#BDD7CB' width='85%' bgcolor='#FFFFDF'>
            <tr>
              <td width='100%' align='center' colspan='2'>
            </td>
            </tr>
            <tr>
              <td width='100%' align='center' colspan='2'><font color='#FF00FF'><b>
              SKIP HIRE QUOTE</b></font></td>
            </tr>
            <tr>
              <td align='right'>Skip Size&nbsp;&nbsp;</td>
              <td><b>
  $Skip_Size </b>
            </td>
            </tr>
            <tr>
              <td align='right'>Skip Hire Duration&nbsp;&nbsp;
              </td>
              <td><b>
  $Duration </b>
              </td>
            </tr>
            <tr>
              <td align='right'>Customer Location&nbsp;&nbsp;</td>
              <td> <b>$data->areaname </b>
              </td>
            </tr>
            <tr>
              <td align='right'>Permit Required&nbsp;&nbsp;</td>
              <td> <b>
  $Permit </b>
              </td>
            </tr>
            <tr>
              <td width='100%' colspan='2'>&nbsp;</td>
            </tr>
            <tr>
              <td width='100%' colspan='2' align='center'><b>
              <font size='4' color='#FF00FF'>
              QUOTE TOTAL:&nbsp;&nbsp;&nbsp;
  &pound;$total&nbsp;&nbsp;&nbsp;(Inclusive of VAT at 20&#37;)
              </font></b></td>
            </tr>
            <tr>
              <td width='100%' colspan='2'>&nbsp;</td>
            </tr>

           
            <tr>
              <td width='100%'align='center' colspan='2'><b>To accept this quote, please complete the contact and delivery address details below and then click the 'Accept This Quote' button. You can check your order details on the next page and then pay via any major credit or debit card using Worldpay.<br><br>To recalculate the quote click your browser 'back button'</b><br><br></td>
            </tr>
            <tr>
              <td align='right'>
              <form action='instantquote2.php' method='POST'> 
              Delivery Contact Name:&nbsp;</td>
              <td><input type='text' size='30' name='Name' tabindex='1' maxlength='50'>
              </td>
            </tr> 
            <tr>
              <td align='right'>Delivery Phone Number:&nbsp;</td>
              <td><input type='text' size='20' name='Phone' tabindex='2' maxlength='50'>
              </td>
            </tr> 
            <tr>
              <td align='right'>Delivery Contact Email:&nbsp;</td>
              <td><input type='text' size='30' name='email' tabindex='3' maxlength='50'>
              </td>
            </tr> 
            <tr>
              <td align='right'>Delivery Address:&nbsp;</td>
              <td><textarea name='Address' rows='5' cols='30' tabindex='4'></textarea>
              </td>
            </tr>
            <tr><td colspan='2'><b>Please note:</b> If a skip permit has been requested (due to on road skip location), then we need a minimum of 3 working days to apply for the permit.</td>
            </tr>
            <tr>
              <td align='right'>Date Skip Required:&nbsp;</td>
              <td><input type='text' size='30' name='DeliveryDate' tabindex='5' maxlength='30'>
              </td>
            </tr>
            <tr>
              <td align='right'>Required Delivery Timeslot:&nbsp;</td>
              <td>
              <SELECT id='DeliveryTime' name='DeliveryTime'>
                 <option value='Select...' selected>Select...</option>
   		 <option value='0730-1000'>7:30am - 10am</option>
 		 <option value='1000-1300'>10am - 1pm</option>
  		 <option value='1300-1600'>1pm - 4pm</option>
    		 <option value='Anytime'>Any Time</option>
               </SELECT>
             <tr>
             </tr>
            </tr> 
            <tr>
              <td colspan='2'>
<input type=hidden name=subject value='ThinkPinkSkips Instant Quote Submission'>
<input type=hidden name=Skip_Size value='$Skip_Size'>
<input type=hidden name=Duration value='$Duration'>
<input type=hidden name=pcode1 value='$pcode1'>
<input type=hidden name=pcode2 value='$pcode2'>
<input type=hidden name=Location value='$data->areaname'>
<input type=hidden name=Permit value='$Permit'>
<input type=hidden name=Quoted value='$total'>


             </td>
            </tr>
            <tr>
              <td width='100%' colspan='2' align='center'> 
               <input type='submit' value='Accept This Quote' name='Submit_Button' style='font-family: Arial; font-size: 10pt; color: #FF00FF; font-weight: bold' tabindex='5'>
                <input type='reset' value='Reset' name='Reset_Button' style='font-size: 10pt; font-family: Arial; color: #FF00FF' tabindex='6'></p>
              </td>
            </tr>
           </table>

";
}
else
{
  echo "
	<table border='1' cellpadding='0' cellspacing='0' style='border-collapse: collapse' bordercolor='#BDD7CB' width='85%' bgcolor='#FFFFDF'>
            <tr>
              <td width='100%' align='center' colspan='2'>

            </td>
            </tr>
            <tr>
              <td width='100%' colspan='2' align='center'><b>
              <font size='2' color='#FF0000'>
  		$Error_txt
              </td>
            </tr>            
         </table>
";
}

?>

<!-- END PHP SCRIPT -->
</p>
</div>
</div>
<div id="sidebar">
<h3>Search</h3>
<p>
<form method="get" id="searchform" action="http://thinkpinkskips.co.uk/">
<input type="text" value="" name="s" id="s" class="search" />
<input type="submit" id="searchsubmit" value="GO" />
</form><br />
</p>
<h3>Articles</h3>
<ul>
	<li class="cat-item cat-item-27"><a href="http://thinkpinkskips.co.uk/category/area-covered/" title="View all posts filed under Area&#039;s Covered">Area&#039;s Covered</a>
<ul class='children'>
	<li class="cat-item cat-item-28"><a href="http://thinkpinkskips.co.uk/category/area-covered/kendal-skip-hire/" title="View all posts filed under Kendal Skip Hire">Kendal Skip Hire</a>
</li>
	<li class="cat-item cat-item-31"><a href="http://thinkpinkskips.co.uk/category/area-covered/lancaster-skip-hire/" title="View all posts filed under Lancaster Skip Hire">Lancaster Skip Hire</a>
</li>
	<li class="cat-item cat-item-32"><a href="http://thinkpinkskips.co.uk/category/area-covered/morecambe-skip-hire/" title="View all posts filed under Morecambe Skip Hire">Morecambe Skip Hire</a>
</li>
</ul>
</li>
	<li class="cat-item cat-item-26"><a href="http://thinkpinkskips.co.uk/category/business-customers/" title="View all posts filed under Business Customers">Business Customers</a>
<ul class='children'>
	<li class="cat-item cat-item-38"><a href="http://thinkpinkskips.co.uk/category/business-customers/business-partnerships/" title="View all posts filed under Business Partnerships">Business Partnerships</a>
</li>
</ul>
</li>
	<li class="cat-item cat-item-15"><a href="http://thinkpinkskips.co.uk/category/grab-and-tipper-hire/" title="View all posts filed under Grab and Tipper Hire">Grab and Tipper Hire</a>
</li>
	<li class="cat-item cat-item-30"><a href="http://thinkpinkskips.co.uk/category/highway-act-1980/" title="View all posts filed under Highway Act 1980">Highway Act 1980</a>
</li>
	<li class="cat-item cat-item-16"><a href="http://thinkpinkskips.co.uk/category/recycled-aggregates/" title="View all posts filed under Recycled Aggregates">Recycled Aggregates</a>
</li>
	<li class="cat-item cat-item-3"><a href="http://thinkpinkskips.co.uk/category/recycling/" title="View all posts filed under Recycling">Recycling</a>
</li>
	<li class="cat-item cat-item-22"><a href="http://thinkpinkskips.co.uk/category/site-waste-management-plans/" title="View all posts filed under Site Waste Management Plans">Site Waste Management Plans</a>
</li>

</ul>
<h3>Links</h3>
<ul>
<li><a href="http://local.direct.gov.uk/LDGRedirect/index.jsp?LGSL=521&#38;LGIL=0&#38;ServiceName=Apply%20for%20a%20skip%20permit" title="Need a permit?">Direct.gov.uk</a></li>
<li><a href="http://www.envirofirst.co.uk/" title="ENVIROfirst">ENVIROfirst</a></li>
<li><a href="http://www.environment-agency.gov.uk/" title="Enviroment Agency Information">Enviroment agency</a></li>
<li><a href="http://www.envirowise.gov.uk/" title="Practical enviromenal advise for business">Envirowise</a></li>
<li><a href="http://www.netregs-swmp.co.uk/simple-guide-20080406.pdf" title="Simple guide to Site Waste Management Plans">Site Waste Management Plans</a></li>
</ul>

</div>
</div>
<div id="footer"><center>(c) 2014 A1 Supaskips<br>
<b>A1 SUPASKIPS Ltd</b> | Registered in the <b>UK</b> | Registered office: <b>The Old Court House, Morecambe, LA4 5HR</b> <br>| Company Number: <b>3569203</b> | VAT Number: <b>GB 483 1772 30</b> | email: <a href="mailto:office@thinkpinkskips.co.uk">office@thinkpinkskips.co.uk</a> 
</center> 
</div>

</div>
</div>
</body>
</html>