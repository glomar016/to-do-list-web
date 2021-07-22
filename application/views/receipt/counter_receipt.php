
<style>
    #invoice-POS{box-shadow:0 0 1in -.25in rgba(0,0,0,.5);padding:2mm;margin:0 auto;width:50mm;background:#fff;color:#222}h2{font-size:1.4em}h3{font-size:1.6em;font-weight:400;line-height:2em}p{font-size:.7em;color:#666;line-height:1.2em}#bot,#mid,#top{border-bottom:1px solid #eee}#top{min-height:100px}#mid{min-height:80px}#bot{min-height:50px}#top .logo{height:60px;width:60px;background:url(<?php echo base_url()?>resources/assets/img/brs-logo.png) no-repeat;background-size:60px 60px}.clientlogo{float:left;height:60px;width:60px;background:url(http://michaeltruong.ca/images/client.jpg) no-repeat;background-size:60px 60px;border-radius:50px}.info{display:block;margin-left:0}.title{float:right}.title p{text-align:right}table{width:100%;border-collapse:collapse}.tabletitle{font-size:.5em;background:#eee}.service{border-bottom:1px solid #eee}.item{width:24mm}.itemtext{font-size:.5em}#legalcopy{margin-top:5mm}
</style>
  <div id="invoice-POS">
    
    <center id="top">
      <div>
          <!-- <img src="<?php echo base_url()?>resources\assets\img\brs-logo-sm.png"> -->
      </div>
      <div class="info"> 
        <h2>Bus Reservation</h2>
      </div><!--End Info-->
    </center><!--End InvoiceTop-->
    
    <div id="mid">
      <div class="info">
        <h2>Customer Info</h2>
        <p id="userInfo"> 
            Address : street city, state 0000</br>
            Email   : JohnDoe@gmail.com</br>
            Phone   : 555-555-5555</br>
            Date of Payment   : 01/01/21</br>
        </p>
      </div>
      <div class="info">
        <h2>Trip Info</h2>
        <p id="userInfo"> 
            Route : street city, state 0000</br>
            Date of Trip   : 01/01/21</br>
            Promo Code   : 555-555-5555</br>
        </p>
      </div>
    </div><!--End Invoice Mid-->
    
    <div id="bot">

					<div id="table">
						<table>
							<tr class="tabletitle">
								<td class="item"><h2>Passengers</h2></td>
								<td class="Hours"><h2>Seat No.</h2></td>
								<td class="Rate"><h2>Sub Total</h2></td>
							</tr>

							<tr class="service">
								<td class="tableitem">
                                    <p class="itemtext" id="passenger">
                                        Koko Pimentel
                                        <br> Senior/PWD:
                                        <br> Insurance: NONE
                                        <br> Landmark: Fairview
                                    </p></td>
								<td class="tableitem" id="passengerSeat">
                                    <p class="itemtext">
                                        $120
                                        <br> - $0
                                        <br>
                                        <br>
                                        <br>
                                    </p></td>
								<td class="tableitem">
                                    <p class="itemtext" id="passengerSubTotal">
                                        $120
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                    </p>
                                </td>
							</tr>
							<tr class="service">
								<td class="tableitem">
                                    <p class="itemtext" id="passenger">
                                        Koko Pimentel
                                        <br> Senior/PWD:
                                        <br> Insurance: NONE
                                        <br> Landmark: Fairview
                                    </p></td>
								<td class="tableitem" id="passengerSeat">
                                    <p class="itemtext">
                                        $120
                                        <br> - $0
                                        <br>
                                        <br>
                                        <br>
                                    </p></td>
								<td class="tableitem">
                                    <p class="itemtext" id="passengerSubTotal">
                                        $120
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                    </p>
                                </td>
							</tr>
							<tr class="service">
								<td class="tableitem">
                                    <p class="itemtext" id="passenger">
                                        Koko Pimentel
                                        <br> Senior/PWD:
                                        <br> Insurance: NONE
                                        <br> Landmark: Fairview
                                    </p></td>
								<td class="tableitem" id="passengerSeat">
                                    <p class="itemtext">
                                        $120
                                        <br> - $0
                                        <br>
                                        <br>
                                        <br>
                                    </p></td>
								<td class="tableitem">
                                    <p class="itemtext" id="passengerSubTotal">
                                        $120
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                    </p>
                                </td>
							</tr>

							<tr class="service">
								<td class="tableitem">
                                    <p class="itemtext" id="passenger">
                                        Koko Pimentel
                                        <br> Senior/PWD:
                                        <br> Insurance: NONE
                                        <br> Landmark: Fairview
                                    </p></td>
								<td class="tableitem" id="passengerSeat">
                                    <p class="itemtext">
                                        $120
                                        <br> - $0
                                        <br>
                                        <br>
                                        <br>
                                    </p></td>
								<td class="tableitem">
                                    <p class="itemtext" id="passengerSubTotal">
                                        $120
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                    </p>
                                </td>
							</tr>

							<tr class="service">
								<td class="tableitem">
                                    <p class="itemtext" id="passenger">
                                        Koko Pimentel
                                        <br> Senior/PWD:
                                        <br> Insurance: NONE
                                        <br> Landmark: Fairview
                                    </p></td>
								<td class="tableitem" id="passengerSeat">
                                    <p class="itemtext">
                                        $120
                                        <br> - $0
                                        <br>
                                        <br>
                                        <br>
                                    </p></td>
								<td class="tableitem">
                                    <p class="itemtext" id="passengerSubTotal">
                                        $120
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                    </p>
                                </td>
							</tr>

							<tr class="tabletitle" >
								<td></td>
								<td class="Rate"><h2>Total</h2></td>
								<td class="payment" id="totalAmount" ><h2>$360</h2></td>
							</tr>

						</table>
					</div><!--End Table-->

					<div id="legalcopy">
						<p class="legal"> This official receipt has a validity of five (5) years from the date of transaction
						</p>
					</div>

				</div><!--End InvoiceBot-->
  </div><!--End Invoice-->
