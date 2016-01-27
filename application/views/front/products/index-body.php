<?php
$price['sb'] = 29.99;
$price['mb'] = 49.99;
$price['mw'] = 69.99;
?>
<?php $themes = "/public/themes/front/";?>
  <div class="third">
    <h2 class="section-title">Products</h2>
    <div class="container">

      <div class="heading-box">
        <h2 class="box-title">E-Commerce Tools</h2>
        <p class="desc-lg">Free Open-source E-Commerce Plugins for nopCommerce Shopping Cart
          <br><div class="col-md-offset-4 promo-btn">  </div>
        </p>
        <div class="clearfix"></div>
      </div>

      <div class="row">
        <div class="col-sm-12 col-md-12 bot-20">
          <div class="deal-boxed">
            <div class="icon-tag"> &#9729; <span>Free!</span> </div>
            <div class="box-content">
              <h4 class="box-title">PayPalAdvanced Payments Plugin for nopCommerce 3.70</h4>
              <h5 class="box-title"></h5>
              <img class="deal-icons" alt="" height="120" width="120" src="<?php echo base_url($themes . 'img/icons/paypaladvanced_nop370_sm.png'); ?>">
              <p class="deal-t1">&#9728; Built for nopCommerce 3.70</p>
              <p class="deal-t1">&#9728; Supports Authorize or Authorize and Capture</p>
              <p class="deal-t1">&#9728; Supports Refund, Partial Refund, Capture if Authorize is enabled for the transaction mode</p>
              <p class="deal-t1">&#9728; Supports Mobile devices (iPhone, iPad, and Android)</p>
              <p class="deal-t1">&#9728; Installation guide is provided in the download zip file</p>
              <div class="promo-btn">
              	<a class="btn btn-default" href="<?php echo base_url('products/download/PayPal-advanced-nop'); ?>"> DOWNLOAD NOW </a>
              	<br/>
              	You can also <a href='https://github.com/CloudberrySoftware/PayPalAdvanced-Payments-Plugin'><u>download</u></a> the source code at Github.
              	<br/>
              	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
              	If you find our tools useful, you can treat us coffee
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="B9FPTS7D9PAUG">
			<input type="image" src="http://www.cloudberrysoft.com/public/themes/front/img/coffeebtn.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>

              </div>
            </div>
          </div>
        </div>
        </div>
      </div>

    </div>
  </div>

<script type="text/javascript">
///duration-2
$( document ).ready(function() {

  $("input[name='duration-1']").click(function (){
    var val = $(this).val();
    if(val == "monthly") {
      $("#dur-1").text(<?=$price['sb'];?>);
      $("#dur-1").next("em").text("/mo");
    } else {
      $("#dur-1").text(<?=($price['sb']*12);?>);
      $("#dur-1").next("em").text("/yr");
    }
  });

  $("input[name='duration-2']").click(function (){
    var val = $(this).val();
    if(val == "monthly") {
      $("#dur-2").text(<?=$price['mb'];?>);
      $("#dur-2").next("em").text("/mo");
    } else {
      $("#dur-2").text(<?=($price['mb'] * 12 );?>);
      $("#dur-2").next("em").text("/yr");
    }
  });

  $("input[name='duration-3']").click(function (){
    var val = $(this).val();
    if(val == "monthly") {
      $("#dur-3").text(<?=$price['mw'];?>);
      $("#dur-3").next("em").text("/mo");
    } else {
      $("#dur-3").text(<?=($price['mw']*12);?>);
      $("#dur-3").next("em").text("/yr");
    }
  });


});
</script>