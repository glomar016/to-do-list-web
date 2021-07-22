<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Bus Reservation System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<style>
			.receipt-content .logo a:hover{text-decoration:none;color:#7793c4}.receipt-content .invoice-wrapper{background:#fff;border:1px solid #cdd3e2;box-shadow:0 0 1px #ccc;padding:40px 40px 60px;margin-top:40px;border-radius:4px}.receipt-content .invoice-wrapper .payment-details span{color:#a9b0bb;display:block}.receipt-content .invoice-wrapper .payment-details a{display:inline-block;margin-top:5px}.receipt-content .invoice-wrapper .line-items .print a{display:inline-block;border:1px solid #9cb5d6;padding:13px 13px;border-radius:5px;color:#708dc0;font-size:13px;-webkit-transition:all .2s linear;-moz-transition:all .2s linear;-ms-transition:all .2s linear;-o-transition:all .2s linear;transition:all .2s linear}.receipt-content .invoice-wrapper .line-items .print a:hover{text-decoration:none;border-color:#333;color:#333}.receipt-content{background:#eceef4}@media (min-width:1200px){.receipt-content .container{width:900px}}.receipt-content .logo{text-align:center;margin-top:50px}.receipt-content .logo a{font-family:Myriad Pro,Lato,Helvetica Neue,Arial;font-size:36px;letter-spacing:.1px;color:#555;font-weight:300;-webkit-transition:all .2s linear;-moz-transition:all .2s linear;-ms-transition:all .2s linear;-o-transition:all .2s linear;transition:all .2s linear}.receipt-content .invoice-wrapper .intro{line-height:25px;color:#444}.receipt-content .invoice-wrapper .payment-info{margin-top:25px;padding-top:15px}.receipt-content .invoice-wrapper .payment-info span{color:#a9b0bb}.receipt-content .invoice-wrapper .payment-info strong{display:block;color:#444;margin-top:3px}@media (max-width:767px){.receipt-content .invoice-wrapper .payment-info .text-right{text-align:left;margin-top:20px}}.receipt-content .invoice-wrapper .payment-details{border-top:2px solid #ebecee;margin-top:30px;padding-top:20px;line-height:22px}@media (max-width:767px){.receipt-content .invoice-wrapper .payment-details .text-right{text-align:left;margin-top:20px}}.receipt-content .invoice-wrapper .line-items{margin-top:40px}.receipt-content .invoice-wrapper .line-items .headers{color:#a9b0bb;font-size:13px;letter-spacing:.3px;border-bottom:2px solid #ebecee;padding-bottom:4px}.receipt-content .invoice-wrapper .line-items .items{margin-top:8px;border-bottom:2px solid #ebecee;padding-bottom:8px}.receipt-content .invoice-wrapper .line-items .items .item{padding:10px 0;color:#696969;font-size:15px}@media (max-width:767px){.receipt-content .invoice-wrapper .line-items .items .item{font-size:13px}}.receipt-content .invoice-wrapper .line-items .items .item .amount{letter-spacing:.1px;color:#84868a;font-size:16px}@media (max-width:767px){.receipt-content .invoice-wrapper .line-items .items .item .amount{font-size:13px}}.receipt-content .invoice-wrapper .line-items .total{margin-top:30px}.receipt-content .invoice-wrapper .line-items .total .extra-notes{float:left;width:40%;text-align:left;font-size:13px;color:#7a7a7a;line-height:20px}@media (max-width:767px){.receipt-content .invoice-wrapper .line-items .total .extra-notes{width:100%;margin-bottom:30px;float:none}}.receipt-content .invoice-wrapper .line-items .total .extra-notes strong{display:block;margin-bottom:5px;color:#454545}.receipt-content .invoice-wrapper .line-items .total .field{margin-bottom:7px;font-size:14px;color:#555}.receipt-content .invoice-wrapper .line-items .total .field.grand-total{margin-top:10px;font-size:16px;font-weight:500}.receipt-content .invoice-wrapper .line-items .total .field.grand-total span{color:#20a720;font-size:16px}.receipt-content .invoice-wrapper .line-items .total .field span{display:inline-block;margin-left:20px;min-width:85px;color:#84868a;font-size:15px}.receipt-content .invoice-wrapper .line-items .print{margin-top:50px;text-align:center}.receipt-content .invoice-wrapper .line-items .print a i{margin-right:3px;font-size:14px}.receipt-content .footer{margin-top:40px;margin-bottom:110px;text-align:center;font-size:12px;color:#969cad}  
	</style>
</head>
<body>
                        
<div class="receipt-content">
    <div class="container bootstrap snippets bootdey">
		<div class="row" style="margin-left: 10em !important; margin-right: -10em !important;">
			<div class="col-md-9">
				<div class="invoice-wrapper">
					<div class="col-sm-5 text-right">
						<img src="<?php echo base_url()?>resources/assets/img/brs-logo-sm.png" alt="">
					</div>
					<div class="intro col-sm-7">
						Hi <strong id="name">John McClane</strong>, 
						<br>
						This is the receipt for a payment of <strong id="total">$360.00</strong> (PHP) for your trip
					</div>
					
					<div class="payment-info">
						<div class="row">
							<div class="col-sm-6">
								<span>Reference No.</span>
								<strong id="referenceNo">434334343</strong>
							</div>
						</div>
					</div>

					<div class="payment-details">
						<div class="row">
							<div class="col-sm-6">
								<span>Payment To</span>
								<strong id="name2">
									John McClane
								</strong>
								<span>Billing Address</span>
								<p id="billAddress">
									344 9th Avenue
									San Francisco
									99383
									USA
									</p>
								<span>Route</span>
									<p id="route">
									Cubao - Fairview | 9:00AM - 9:00PM
									</p>
								<span>Promo Code</span>
									<p id="promoCode">
									UGESAKALAM - 20% Discount
									</p>
							</div>
							<div class="col-sm-6 text-right">
									<span>Payment Date</span>
									<strong id="paymentDate">Jul 09, 2014 - 12:20 pm</strong>
									<span>Date of Trip</span>
									<strong id="tripDate">Jul 09, 2014 - 12:20 pm</strong>
							</div>							
						</div>
					</div>

					<div class="line-items">
						<div class="headers clearfix">
							<div class="row">
								<div class="col-xs-4">Passenger</div>
								<div class="col-xs-3">Seat Number</div>
								<div class="col-xs-5 text-right">Amount</div>
							</div>
						</div>
						<div class="items">
							<div class="row item">
								<div class="col-xs-4 desc">
									<strong id="passengerName">Koko Pimentel</strong><br>
									<span>Senior/PWD:</span><br>
									<span id="insurance">Insurance: NONE</span><br>
									<span id="landmark">Landmark: Fairview</span><br>
									<strong>Total:</strong>
								</div>
								<div class="col-xs-3 qty">
								<p id="seatNo">16</p>
								</div>
								<div class="col-xs-5 amount text-right">
									<span id="tripAmount">$120</span> <br>
									<span id="pwdDiscount">- $0</span> <br> <br> <br>
									<strong id="total">$120</strong>
								</div>
							</div>
							<div class="row item">
								<div class="col-xs-4 desc">
									<strong id="passengerName">Rodrigo Duterte</strong><br>
									<span>Senior/PWD:</span><br>
									<span id="insurance">Insurance: NONE</span><br>
									<span id="landmark">Landmark: Fairview</span><br>
									<strong>Total:</strong>
								</div>
								<div class="col-xs-3 qty">
								<p id="seatNo">17</p>
								</div>
								<div class="col-xs-5 amount text-right">
									<span id="tripAmount">$120</span> <br>
									<span id="pwdDiscount">- $0</span> <br> <br> <br>
									<strong id="total">$120</strong>
								</div>
							</div>
							<div class="row item">
								<div class="col-xs-4 desc">
									<strong id="passengerName">Jose Marie Chan</strong><br>
									<span>Senior/PWD:</span><br>
									<span id="insurance">Insurance: NONE</span><br>
									<span id="landmark">Landmark: Fairview</span><br>
									<strong>Total:</strong>
								</div>
								<div class="col-xs-3 qty">
								<p id="seatNo">21</p>
								</div>
								<div class="col-xs-5 amount text-right">
									<span id="tripAmount">$120</span> <br>
									<span id="pwdDiscount">- $0</span> <br> <br> <br>
									<strong id="total">$120</strong>
								</div>
							</div>
						</div>
						<div class="total text-right">
							<p class="extra-notes">
								<strong>Extra Notes</strong>
								Please arrive at the terminal 1 hour before the scheduled time
							</p>
							<div class="field grand-total">
								Total Amount: <span>$360.00</span>
							</div>
						</div>

						<div class="print col-sm-12">
							<a href="#">
								<i class="fa fa-print"></i>
								Print this receipt
							</a>
						</div>
					</div>
				</div>

				<div class="footer">
					Copyright © 2021. Bus Reservation
				</div>
			</div>
		</div>
	</div>
</div>                    


<script type="text/javascript">
                        
                    
</script>
</body>
</html>