<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Language" content="sk" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="A1 Supa Skips      &#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;.               &#8220;Super service, excellent value&#8230;&#8230;and very efficient recycling&#8221;" />

<meta name="author" content="Miroslav Vano" />

<meta name="robots" content="index,follow" />

<meta name="generator" content="WordPress 2.5.1" />

<link rel="alternate" type="application/rss+xml" title="THINK PINK!  (skips)                        tel:                                  01524 844151 RSS Feed" href="http://thinkpinkskips.co.uk/feed/" />

<link rel="pingback" href="http://thinkpinkskips.co.uk/xmlrpc.php" />

<link href="http://thinkpinkskips.co.uk/wp-content/themes/pink-glass/style.css" rel="stylesheet" type="text/css" />

<title>Think Pink Skips - A1 Supa-Skips</title>

</head>



<body>

<div id="wrap">

<div id="header">

<h1><a href="http://thinkpinkskips.co.uk/">THINK PINK!  (skips)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tel:&nbsp;01524 844151</a></h1>

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



if ($Name == NULL)

{

  $Error_txt[] = "Name";

}



if ($email == NULL)

{

  $Error_txt[] = "Email Address";

}



if ($Phone == NULL) 

{

  $Error_txt[] = "Phone Number";

}

if ($Address == NULL)

{

  $Error_txt[] = "Address";

}

if ($DeliveryDate == NULL)

{

  $Error_txt[] = "Date For Skip Delivery";

}







// format errors for display

if($Error_txt != NULL)

{

	$Error_txt = "ERRORS:<br/> The following information was missing: <br/><br/>" . @implode("<br/> ", $Error_txt) . "<br/><br/> Please press back on the browser to correct the problems and try again.";

}





// IF NO ERRORS DISPLAY DETAILS FOR CONFIRMATION AND SEND BY EMAIL



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

              PLEASE CONFIRM YOUR SKIP HIRE REQUEST</b></font></td>

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

  &pound;$Quoted&nbsp;&nbsp;&nbsp;(Inclusive of VAT at 20&#37;)

              </font></b></td>

            </tr>

            <tr>

              <td width='100%' colspan='2'>&nbsp;</td>

            </tr>

            <tr>

              <td align='right'>Your Name:&nbsp;&nbsp;</td>

              <td> <b>

  $Name </b>

              </td>

            </tr>

            <tr>

              <td align='right'>Your Email:&nbsp;&nbsp;</td>

              <td> <b>

  $email </b>

              </td>

            </tr>  

            <tr>

              <td align='right'>Your Phone Number:&nbsp;&nbsp;</td>

              <td> <b>

  $Phone </b>

              </td>

            </tr>  

            <tr>

              <td align='right'>Your Address:&nbsp;&nbsp;</td>

              <td> <b>

  $Address </b>

              </td>

            </tr>  

            <tr>

              <td align='right'>Your Postcode:&nbsp;&nbsp;</td>

              <td> <b>

  $pcode1 &nbsp; $pcode2</b>

              </td>

            </tr>    

          <tr>

              <td align='right'>Location:&nbsp;&nbsp;</td>

              <td> <b>

  $Location </b>

              </td>

            </tr>  

            <tr>

              <td align='right'>Requested Skip Delivery Date:&nbsp;&nbsp;</td>

              <td> <b>

  $DeliveryDate </b>

              </td>

            </tr>     
           <tr>

              <td align='right'>Requested Skip Delivery Time:&nbsp;&nbsp;</td>

              <td> <b>

  $DeliveryTime </b>

              </td>

            </tr>   
            <tr>

              <td width='100%'align='center' colspan='2'><b><br>To accept this quote, please click the 'Accept This Quote' button below. You will then be transferred to our WorldPay payment page to complete the Booking.<br><br>Or to make any amendments or corrections please click your browser 'back button'</b><br><br></td>

            </tr>

            <tr>

              <td colspan='2'>

<form action='https://secure.worldpay.com/wcc/purchase' method=POST>

<!-- This next line contains the testMode parameter - it specifies that the submission is a test submission -->
<input type=hidden name='testMode' value='0'>

<!-- This next line contains a mandatory parameter. Put your Installation ID inside the quotes after value= -->
<input type=hidden name='instId' value='229412'>

<!-- Another mandatory parameter. Put your own reference identifier for the item purchased inside the quotes after value= -->
<input type=hidden name='cartId' value='SkipHire1'>

<!-- Another mandatory parameter. Put the total cost of the item inside the quotes after value= -->
<input type=hidden name='amount' value='$Quoted'>

<!-- Another mandatory parameter. Put the code for the purchase currency inside the quotes after value= -->
<input type=hidden name='currency' value='GBP'>

<input type=hidden name='MC_Name' value='$Name'>
<input type=hidden name='MC_Phone' value='$Phone'>
<input type=hidden name='MC_email' value='$email'>
<input type=hidden name='MC_Address' value='$Address'>
<input type=hidden name='MC_DeliveryDate' value='$DeliveryDate'>
<input type=hidden name='MC_DeliveryTime' value='$DeliveryTime'>
<input type=hidden name='MC_Skip_Size' value='$Skip_Size'>
<input type=hidden name='MC_Duration' value='$Duration'>
<input type=hidden name='MC_pcode1' value='$pcode1'>
<input type=hidden name='MC_pcode2' value='$pcode2'>
<input type=hidden name='MC_Location' value='$Location'>
<input type=hidden name='MC_Permit' value='$Permit'>


<!-- This creates the button. When it is selected in the browser, the form submits the purchase details to us. -->
<input type=submit value=' Accept This Quote and Pay via Worldpay '><br>

</form>

             </td>

            </tr>

            <tr>

              <td width='100%' colspan='2' align='left'> 
<p><br>
         <strong>Refund Policy</strong>
</p><p>
If you have ordered a skip online and wish to cancel 24 hrs prior to deliver please either email sales@thinkpinkskips.co.uk  of your wish to cancel, stating your name address and postcode or call our sales team on 01524 844151 for a full refund. If the payment has been authorised then a refund back to the original card will be made within 14 days.
</p><p>
In the event of a skip/ delivery been canceled within 24 hours of the delivery date without good cause, a proportion of the delivery cost we be charged at the discretion of the company to cover any cost incurred.
</p><p>
In the event of a skip been ordered and A1 Supaskips not been able to meet the delivery requirements, then a n alternative will be notified to the customer. In the event that this is not satisfactory a full refund will be issued back to the original card 
      </p><p>
<script language='JavaScript' src='https://select.worldpay.com/wcc/logo?instId=229412'></script>
             </p> </td>

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

<div id="footer"><cemter>(c) 2008 A1 Supaskips<br>
<b>A1 SUPASKIPS Ltd</b> | Registered in the <b>UK</b> | Registered office: <b>The Old Court House, Morecambe, LA4 5HR</b> <br>| Company Number: <b>3569203</b> | VAT Number: <b>GB 483 1772 30</b> | email: <a href="mailto:office@thinkpinkskips.co.uk">office@thinkpinkskips.co.uk</a> 
</center> </div>



</div>

</div>

</body>

</html>

