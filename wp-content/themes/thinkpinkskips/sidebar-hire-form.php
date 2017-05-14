

<?php 

include_once("mistrysolved.locationcalc.php");

$error_message = '<p class="error-message">Your request did not submit for the following reasons: </p>'; 
$error = false; 
$permit = false; 

if(isset($_POST['submit'])){

    $fields = array(); 
    foreach( $_POST as $key => $val ) {
        $fields[$key] = $val;

        if($key == "private" && $val == "road"){
            $permit = true; 
        } 

        if($key == "address-1" && $val == ""){
            $error = true;
            $error_message .= "<p> -You did not provide the Address Line 1 of your address</p>";
        }   

        if($key == "postcode-1" && $val == ""){
            $error = true;
            $error_message .= "<p> - You did not provide a the first part of your postcode</p>";
        } 

        if($key == "postcode-2" && $val == ""){
            $error = true;
            $error_message .= "<p> - You did not provide a the 2nd part of your postcode</p>";
        } 
    }

    if(!$error){
        $get_location_data = locationCalc::getLocationData($fields['postcode-1'], $fields['postcode-2'], $fields['days'], $fields['skip-size']);

        if($get_location_data != NULL){
            $total = $get_location_data->price; 
        } else{
            $error = true;
            $error_message .= "<p> - Your postcode is not within our area of delivery please contact us at 01234567891 for a quote</p>";
        }
    }   

    if(!$error){
        if ($permit) {
            $total += 33;
        }

        $vat = $total * 0.2; // cal vat
        $total_ex_vat = $total; //store total without vat
        $total += $vat; // add vat

        foreach ($fields as $key => $value) {
            echo '<p>' . $key . ': ' . $value . '</p>';
        }

        echo '<p>VAT: ' . number_format ($vat, 2) . '</p>';
        echo '<p>Total (ex VAT): ' . number_format ($total_ex_vat, 2) . '</p>';
        echo '<p>Total (incl VAT): ' . number_format ($total, 2) . '</p>';

    } else {  
        echo '<section class="error-log">';
        echo '<div class="container">';
        echo '<div class="col">';
        echo $error_message; // spit out all the error
        echo '</div>';
        echo '</div>';
        echo '<input id="skip-size" type="hidden" name="skip-size" value="mini" />';
        echo '</section>';
   }
} else {

?>

<form action="" method="post">
 <section class="skips-selection">
        <div class="container">
                <h2>Step 1: <span>Size</span></h2>
                <div class="col">
                        <div class="skip-btn active" data-skip-size="mini" >
                               <span class="skip-title">Mini Skip</span>
                               <span class="skip-size">(2 Cubic Yards)</span> 
                               <img src="<?php echo get_template_directory_uri(); ?>/img/mini_skip_white.svg" alt="Mini Skip" />
                        </div>
                </div>
                <div class="col">
                        <div class="skip-btn" data-skip-size="midi">
                                <span class="skip-title">Midi Skip</span>
                                <span class="skip-size">(4 Cubic Yards)</span> 
                                <img src="<?php echo get_template_directory_uri(); ?>/img/midi_skip_pink.svg" alt="Midi Skip" />
                        </div>
                </div>
                <div class="col">
                        <div class="skip-btn" data-skip-size="builders">
                                <span class="skip-title">Builders Skip</span>
                                <span class="skip-size" style="    margin-bottom: 50px;">(8 Cubic Yards)</span> 
                                 <img src="<?php echo get_template_directory_uri(); ?>/img/builders_skip_pink.svg" alt="Builders Skip" />
                        </div>
                </div>
                <div class="col last">
                        <div class="skip-btn" data-skip-size="large">
                                <span class="skip-title">Large Skip</span>
                                <span class="skip-size">(16 Cubic Yards)</span> 
                                <img src="<?php echo get_template_directory_uri(); ?>/img/large_skip_pink.svg" alt="Large Skip" />
                        </div>
                </div>
        </div>
        <input id="skip-size" type="hidden" name="skip-size" value="mini" />
</section>

 <section class="white-text-area">
        <div class="container">
                <div class="col last">
                        <h2>Step 2: <span>Configure</span></h2>
                        <div class="btn-container clearfix">
                                <div class="private-land configure"  data-private="land">Private Land</div>
                                <div class="private-road configure active" data-private="road">Private Road*</div>
                        </div>
                        <p>*If your Skip is to be placed on the road, then we will need to apply for a permit. The charge for a permit is £33.00 + vat and
this will be added to your quote Craven District,council impose additional costs . Please call the office on <a href="tel:01524844151">01524 844 151</a>
for a quote for this area if you require your skip to be placed on the road.</p>
                </div>
        </div>
        <input id="private" type="hidden" name="private" value="road" />
</section>

<section class="pink-text-area-form">
        <div class="container">
                <div class="col last clearfix">
                        <h2>Step 3: <span>Delivery Date</span></h2>
                        <div class="date-picker-container">
                                <div class="date-picker"></div>
                                <input id="date" type="hidden" name="date" value="<?php echo date("d-m-y"); ?>" />
                        </div>
                        <div class="hire-days">
                                <div class="three-day delivery active" data-days="3">3 Days</div>
                                <div class="twenty-one-day delivery" data-days="21">21 Days</div>
                                  <input id="days" type="hidden" name="days"  value="3" />
                        </div>
                </div>
        </div>
</section>
<style>
.notice {
    font-size: 12px;
    background-color: #ededed;
    padding: 16px;
    border: 1px dotted #b1b1b1;
    margin-top: 76px;
}

.notice span {
    display: block;
    font-weight: 600;
    margin-bottom: 5px;
}
</style>
<section class="white-text-area">
        <div class="container">
                <div class="col last clearfix">
                       <h2>Step 4: <span>Delivery Address</span></h2>
                       <div class="address-form">
                                <span>Your Address</span> 
                                <div class="address-lines">
                                        <input type="text" name="address-1" placeholder="Address 1" />
                                        <input type="text" name="address-2" placeholder="Address 2" />
                                        <input type="text" name="address-3" placeholder="Address 3" />
                                </div>
                                <div class="postcode">
                                        <input type="text" name="postcode-1" placeholder="Postcode 1" />
                                        <input type="text" name="postcode-2" placeholder="Postcode 2" />
                                </div>
                       </div>
                       <div class="price">
                               <div class="notice"><span>Note: </span>Enter the two parts of your postcode in the boxes below (eg if your post code is LA23 1AB, enter LA23 in the first box and 1AB in the second box)</div>
                               <input type="submit" name="submit" />
                       </div>
                </div>
        </div>
</section>
</form>

<?php } ?>
