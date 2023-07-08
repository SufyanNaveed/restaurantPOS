<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Printable area start -->
<script type="text/javascript">
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;

    window.print();
    document.body.innerHTML = originalContents;
}
</script>

<style>
/* .panel-body{
    border: 1px solid #000;
 } */
#printableArea{
    padding: 15px !important;
}
.panel-body {
    padding: 0px;
}
hr{
    border: 1px solid #909194;
    margin: 0px !important;
}
.top_class{
    /* border: 1px solid #8e8e8e; */
    margin-right: 9px;

}
.padding_class{
    padding:0px;
}
.heading_area{
    background: #d8f3d8;
    padding: 10px 0px 10px 9px;
    font-size: 15px;
    font-weight: 700;
    color: #2b2b97;
    width:50%;
    border-right: 1px solid #8e8e8e;
    border-bottom: 1px solid #cac5c5;
}

.heading_area_right{
    background: #d8f3d8;
    padding: 6px 0px 6px 9px;
    font-size: 14px;
    font-weight: 700;
    color: #2b2b97;
    /* border-right: 1px solid #8e8e8e; */
    border-bottom: 1px solid #cac5c5;
}

.content_area{ 
    padding: 10px 0px 10px 9px;
    font-size: 15px;
    font-weight: 700;
    color: #3d3b3b;
    border-bottom: 1px solid #cac5c5;
}

.content_area_right{ 
    padding: 6px 0px 6px 9px;
    font-size: 14px;
    font-weight: 700;
    color: #3d3b3b;
    border-bottom: 1px solid #cac5c5;
}

.col-sm-6 {
    width: 49.6%;
}
.table-responsive {
    min-height: .01%;
    overflow-x: initial;
}

.div_contact{
    font-size: 14px;
    color: #2b2b97;
    transform: scale(1.5, 1);
    margin-left: 75px;
    display: inline-block;
}

.div_contact_right{
    font-size: 14px;
    color: #2b2b97;
    transform: scale(1.5, 1);
    margin-left: 45px;
    display: inline-block;
}
.logo_img{ 
    width:100%; 
    height:1%;"
}
 
@media print {
    .padding_class{
        padding:0px;
    }
    .col-sm-6 {
        width: 45%;
    }

    .logo_img{ 
        width:unset; 
        height:1%;"
        margin-left:0px;
    }

    .div_contact{
        font-size: 8px;
        color: #2b2b97; 
        margin-left: 35px; 
    }
    .div_contact_right{
        font-size: 8px;
        color: #2b2b97; 
        margin-right: 40px; 
    }
}
</style>
<!-- Printable area end -->
<div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div id="printableArea" onload="printDiv('printableArea')">
                        <div class="panel-body">
                            <div class="row" >
                                <div class="table-responsive">
                                    <table class="table" style="border-collapse: collapse;">
                                        <tr>
                                            <td width = "35%">
                                                <div class="padding_class">  
                                                    <img src="<?php echo base_url();?><?php echo $storeinfo->logo; ?>" class="img img-responsive logo_img" alt="">
                                                    <div class="div_contact">
                                                        Tel: 02-5526604, 02-5526603 <br>
                                                        P.O.BOX. 132623, Abu Dhabi - U.A.E. <br>
                                                        E-mail: nooraltmaman@gmail.com <br>
                                                        Website: www.nooraltmamantrading.com 
                                                    </div> 
                                                </div>
                                            </td>
                                            <td width = "30%"></td>
                                            <td width = "35%" >
                                                <div class="padding_class"> 
                                                    <img src="<?php echo base_url();?><?php echo $storeinfo->logo; ?>" class="img img-responsive logo_img" alt="">
                                                    <div class="div_contact_right text-right">
                                                        ٹیلیفون                       ۰۲-٥٥۲٦٦۰۳, ۰۲-٤۰٦٦۲٥٥       <br>
                                                        صندوق بريد. 132623 ، أبو ظبي - الإمارات العربية المتحدة. <br>
                                                        E-mail: nooraltmaman@gmail.com <br>
                                                        Website: www.nooraltmamantrading.com <br>
                                                    </div>
                                                </div>
                                            </td> 
                                        </tr>  
                                    </table>
                                </div>

                                <div class="table-responsive">
                                    <table class="table" style="margin-bottom:10px;"> 
                                        <tr>
                                            <td width="50%" style="border: 1px solid black; padding: 0">
                                                <table class="table" style="margin-bottom:10px;"> 
                                                    <tr>
                                                        <td class="heading_area"> 
                                                            Customer Code:   
                                                        </td>
                                                        <td class="content_area"> 
                                                            <span class=""><?php echo $customerinfo->cuntomer_no;?> </span> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="heading_area"> 
                                                            Customer Name:   
                                                        </td>
                                                        <td class="content_area"> 
                                                            <span class=""><?php echo $customerinfo->customer_name;?> </span> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="heading_area"> 
                                                            Place/Emirates:   
                                                        </td>
                                                        <td class="content_area"> 
                                                            <span class=""><?php echo $customerinfo->customer_address;?> </span> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="heading_area_right"> 
                                                             Customer phone:   
                                                        </td>
                                                        <td class="content_area"> 
                                                            <span class=""><?php echo $customerinfo->customer_phone;?> </span> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="heading_area_right"> 
                                                             Customer TRN:   
                                                        </td>
                                                        <td class="content_area"> 
                                                            <span class=""><?php echo '-';?> </span> 
                                                        </td>
                                                    </tr> 
                                                </table> 
                                            </td>
                                            <td width="50%" style="border: 1px solid black; padding: 0">
                                                <table class="table" style="margin-bottom:10px;"> 
                                                    <tr>
                                                        <td class="heading_area_right"> 
                                                            Invoice No  
                                                        </td>
                                                        <td class="content_area_right"> 
                                                            <span class=""><?php echo $orderinfo->saleinvoice;?>  </span> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="heading_area_right"> 
                                                        Invoice Date  
                                                        </td>
                                                        <td class="content_area"> 
                                                            <span class=""><?php echo $orderinfo->order_date;?> </span> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="heading_area_right"> 
                                                        LPO No.   
                                                        </td>
                                                        <td class="content_area_right"> 
                                                            <span class=""><?php echo 'COUNTER - 025526';?> </span> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="heading_area_right"> 
                                                            Payment Terms  
                                                        </td>
                                                        <td class="content_area"> 
                                                            <span class=""><?php echo 'Cash';?> </span> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="heading_area_right"> 
                                                            User 
                                                        </td>
                                                        <td class="content_area_right"> 
                                                            <span class=""><?php echo $waiterinfo->first_name;?>  </span> 
                                                        </td>
                                                    </tr> 
                                                </table> 
                                            </td>  
                                        </tr> 
                                    </table>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr style="background: #d8f3d8;color: #2b2b97;">
                                                <th class="text-center" style="border: 1px solid black;">Sr.</th>
                                                <th class="text-center" style="border: 1px solid black;">Item Code.</th>
                                                <th width="35%" class="text-center" style="border: 1px solid black;">Description</th> 
                                                <th class="text-center" style="border: 1px solid black;">Qty.</th>
                                                <th class="text-center" style="border: 1px solid black;">Unit.</th> 
                                                <th class="text-center" style="border: 1px solid black;">Unit Price</th>
                                                <th class="text-center" style="border: 1px solid black;">Amount Excl. VAT (AED)</th>
                                                <th class="text-center" style="border: 1px solid black;">VAT%</th>
                                                <th class="text-center" style="border: 1px solid black;">VAT Amount VAT (AED)</th>
                                                <th class="text-center" style="border: 1px solid black;">Amount Incl. VAT (AED)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i=0; 
                                            $totalamount=0;
                                            $subtotal=0;
                                            $total=$orderinfo->totalamount;
                                            $multiplletax = array();
                                            foreach ($iteminfo as $item){  
                                                $i++; 
                                                if($item->price>0){
                                                    $itemprice= $item->price*$item->menuqty;
                                                    $singleprice=$item->price;
                                                    }
                                                    else{
                                                        $itemprice= $item->mprice*$item->menuqty;
                                                        $singleprice=$item->mprice;
                                                        }
                                                $discount=0;
                                                $adonsprice=0;
                                                if(!empty($item->add_on_id)){
                                                    $addons=explode(",",$item->add_on_id);
                                                    $addonsqty=explode(",",$item->addonsqty);
                                                    $x=0;
                                                    foreach($addons as $addonsid){
                                                            $adonsinfo=$this->order_model->read('*', 'add_ons', array('add_on_id' => $addonsid));
                                                            $adonsprice=$adonsprice+$adonsinfo->price*$addonsqty[$x];
                                                            $x++;
                                                        }
                                                    $nittotal=$adonsprice;
                                                    $itemprice=$itemprice;
                                                    }
                                                else{
                                                    $nittotal=0;
                                                    $text='';
                                                }
                                                    
                                                $totalamount=$totalamount+$nittotal;
                                                $subtotal=$subtotal+$itemprice;
                                                
                                                $itemtotal=$totalamount+$subtotal;
                                                $calvat= $itemprice* $item->productvat/100;
                                                $vattotal = $vattotal +  $calvat;  
                                                    // $discountpr=0; 
                                                    // if($settinginfo->discount_type==1){ 
                                                    // $dispr=$billinfo->discount*100/$billinfo->total_amount;
                                                    // $discountpr='('.$dispr.'%)';
                                                    // } 
                                                    // else{$discountpr='('.$currency->curr_icon.')';}
                                                    
                                                    // $sdr=0; 
                                                    // if($storeinfo->service_chargeType==1){ 
                                                    // $sdpr=$billinfo->service_charge*100/$billinfo->total_amount;
                                                    // $sdr='('.round($sdpr).'%)';
                                                    // } 
                                                    // else{$sdr='('.$currency->curr_icon.')';}
                                                    // $calvat=$billinfo->VAT;


                                                ?>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid black;"><?php echo $i;?></td>
                                                    <td class="text-center" style="border: 1px solid black;"><?php echo $item->ProductsID;?></td>
                                                    <td class="text-center" style="border: 1px solid black;"><?php echo $item->ProductName;?></td> 
                                                    <td class="text-center" style="border: 1px solid black;"><?php echo $item->menuqty;?></td>
                                                    <td class="text-center" style="border: 1px solid black;">-</td> 
                                                    <td class="text-center" style="border: 1px solid black;"><?php echo number_format($singleprice,2); ?> </td>
                                                    <td class="text-center" style="border: 1px solid black;"><?php echo number_format($itemprice,2);?></td>
                                                    <td class="text-center" style="border: 1px solid black;"><?php echo number_format($item->productvat,2); ?> </td>
                                                    <td class="text-center" style="border: 1px solid black;"><?php echo number_format($calvat,2); ?></td>
                                                    <td class="text-center" style="border: 1px solid black;"><?php echo number_format($itemprice + $calvat,2); ?></td>
                                                </tr>
                                            <?php } ?>                                            
                                             
                                            <tr>
                                                <td style="border: 1px solid black;" height="5px">&nbsp;</td>
                                                <td style="border: 1px solid black;" height="5px"></td>
                                                <td style="border: 1px solid black;" height="5px"></td> 
                                                <td style="border: 1px solid black;" height="5px"></td>
                                                <td style="border: 1px solid black;" height="5px"></td>
                                                <td style="border: 1px solid black;" height="5px"></td>
                                                <td style="border: 1px solid black;" height="5px"></td>
                                                <td style="border: 1px solid black;" height="5px"></td>
                                                <td style="border: 1px solid black;" height="5px"></td>
                                                <td style="border: 1px solid black;" height="5px"></td>
                                            </tr> 

                                            <tr>
                                                <td class="text-left" colspan="7" style="border: 1px solid black; background: #d8f3d8;color: #2b2b97;"><b>Amount in Words: (AED):(Dhs): <?php echo AmountInWords($subtotal); ?></b></td>
                                                <td class="text-left" colspan="2" style="border: 1px solid black;"><b>Gross Amount (AED)</b></td>
                                                <td class="text-right" style="border: 1px solid black;"><b><?php echo number_format($subtotal,2); ?></b></td>
                                            </tr>

                                            <tr>
                                                <td class="text-left" colspan="7" style="border: 1px solid black;"> <b>Previous Balance: 0.00</b> </td>
                                                <td class="text-left" colspan="2" style="border: 1px solid black; background: #d8f3d8;color: #2b2b97;"><b>Discount</b></td>
                                                <td class="text-right" style="border: 1px solid black;"><b><?php $discount=0; if(empty($billinfo)){ echo number_format($discount,2);} else{ $discount= $billinfo->discount; echo number_format($discount,2);} ?></b></td>
                                            </tr>

                                            <tr>
                                                <td class="text-left" colspan="7" rowspan="3" style="border: 1px solid black;">
                                                    <span><b><i>Terms & Conditions:</i></b></span><br>
                                                    <span>1- Goods as above have been received in good condition..</span><br>
                                                    <span>2- Goods return is accepted only if it is in good condition and within seven days from the invoice date.</span><br>
                                                    <span>3- Incase of anycheque return AED 100 will be charged to your account. </span><br>
                                                    <span>4- This is electronic invoice from company pos system, no need stamp and Receiver sign </span><br>
                                                </td>
                                                <td class="text-left" colspan="2" style="border: 1px solid black; background: #d8f3d8;color: #2b2b97;"><b>VAT 5% (AED)</b></td>
                                                <td class="text-right" style="border: 1px solid black;"><b><?php echo number_format($vattotal,2); ?></b></td>
                                            </tr>

                                            <tr>
                                                 <td class="text-left" colspan="2" style="border: 1px solid black; background: #d8f3d8;color: #2b2b97;"><b>Round Off (AED)</b></td>
                                                <td class="text-right" style="border: 1px solid black;"><b><?php echo number_format(round($subtotal + $discount + $vattotal),2); ?></b></td>
                                            </tr>

                                            <tr>
                                                 <td class="text-left" colspan="2" style="border: 1px solid black; background: #d8f3d8;color: #2b2b97;"><b>NET Amount (AED)</b></td>
                                                <td class="text-right" style="border: 1px solid black;"><b><?php echo number_format(round($subtotal + $discount + $vattotal),2); ?></b></td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                               <div class="row" style="margin-right: 0px !important; margin-left:0px !important;">
                                <div class="col-xs-8 invoicefooter-content">
                                    <p></p>
                                    <p><strong>Thank you for shopping with us</strong></p> 
                                </div>
                                </div>
                                 
                    <div class="panel-footer text-left hidden-print">
                       
                        <button class="btn btn-info" onclick="printDiv('printableArea')"><span class="fa fa-print"></span></button>

                    </div>
                </div>
            </div>                
        </div>



