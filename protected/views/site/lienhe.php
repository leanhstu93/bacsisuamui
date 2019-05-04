<script type="text/javascript" src="/js/animatescroll.js"></script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZA2gDBikBGXs_MQ0reMm7Nsqaigbx9v4&sensor=false&language=vi"> </script>
<?php $ttc = Thongtinchung::model()->find(" idNgonNgu = $this->lang ");
$ch = Cauhinh::model()->find("id = 1 ");
$idmap = $ch->googlemap;
 ?>
<script>
    function hienbandonhatnghe() {
        var opt = {
          center: new google.maps.LatLng(<?php echo $idmap ?>),
          zoom: 17,
          mapTypeId: google.maps.MapTypeId.ROADMAP //ROADMAP/SATELLITE/HYBRID/TERRAIN
        };
        var bd1 = new google.maps.Map(document.getElementById("map_canvas"), opt);
        //tạo maker, infowindow
        var m1 = new google.maps.Marker({
            position: new google.maps.LatLng(<?php echo $idmap ?>),
            map: bd1,
    	  title:'Mời nhắp vào'
    });
    var info = new google.maps.InfoWindow(
          { content: "Đây là <?php echo $ttc->Company ?>",
            size: new google.maps.Size()
    });
    google.maps.event.addListener(m1,'click',function(){info.open(bd1,m1)});

    }
    google.maps.event.addDomListener(window, 'load', hienbandonhatnghe);
</script>
 <section class="container w1000">
    <div class="w100 wrp-ct">
    <div class="contact-page page-left"> 
    	
    	<div class="w100"> 
            <?php 
            $arrBread[0]["Name"] = $this->ngonngu[46];
            $this->renderPartial("//layouts/breadcrumb",array('data'=>$arrBread));?> 
      </div>
      <div class="head"><?php echo $this->ngonngu[46] ?></div>
      <div id="map_canvas" style="height:350px; width:100%;"> </div>
      <div class="w100 wrap-info-ct">
      <div class="w50">
      	<h4 class="heading"><img src="<?php echo $ttc->Logo ?>">	</h4>
      	<div class="excerpt">
				<p class="mails"><i class="fa fa-envelope" aria-hidden="true"></i><span> <?php echo $ttc->Email ?></span></p>
				<p class="dia-chi"><i class="fa fa-map-marker" aria-hidden="true"></i><span> <?php echo $ttc->Address ?></span></p>
				<p class="telephone"><i class="fa fa-phone" aria-hidden="true"></i><span> <?php echo $ttc->Tel ?></span></p>
				<p class="fax"><i class="fa fa-fax" aria-hidden="true"></i> <span><?php echo $ttc->Fax ?></span></p>
			</div>
            </div>
		<div class="media-body text-left w50">
				<h4 class="heading"><?php echo $this->ngonngu[156] ?></h4>
				<div class="excerpt">
					<div role="form" class="wpcf7" id="wpcf7-f137-o1" lang="vi" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form action="/site/Xulybaogia" method="post" class="wpcf7-form">
                        <p> <?php echo $this->ngonngu[3] ?> *<br>
                            <span class="wpcf7-form-control-wrap your-name">
    	                   <input  type="text" name="Baogia[Name]" value="" size="40" class="form-control" required></span> 
                       </p>
                        <p> Email*<br>
                            <span class="wpcf7-form-control-wrap your-email">
                            	<input type="email" name="Baogia[Email]" value="" size="40" class="form-control" required></span> 
                        </p>
                         <p> Điện thoại*<br>
                            <span class="wpcf7-form-control-wrap your-email">
                                <input type="text" name="Baogia[Email]" value="" size="40" class="form-control" required></span> 
                        </p>

                        <p> <?php echo $this->ngonngu[127] ?>*<br>
                            <span class="wpcf7-form-control-wrap your-message">
                            	<textarea name="Baogia[Description]" cols="40" rows="3" class="form-control1" 	required></textarea></span> 
                        </p>
                        <p>
                        	<input type="submit" value="<?php echo $this->ngonngu[158] ?>" name="Gui" class="wpcf7-form-control wpcf7-submit">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->renderPartial("//layouts/right"); ?>
</section>

<style type="text/css">
.wrp-ct{margin-top: 3%}
    .contact-page .wrap-info-ct .heading img{width: 30%}
	.contact-page .wrap-info-ct{    margin-top: 5%;}
    .contact-page .wrap-info-ct .w50:nth-child(1){padding-right: 3%}
    .contact-page .wrap-info-ct .w50:nth-child(1) i{width: 25px;display: inline-block;vertical-align: middle;}
    .contact-page .wrap-info-ct .w50:nth-child(1) p span{width: calc(100% - 25px);display: inline-block;vertical-align: middle;}
	.contact-page .wrap-info-ct .heading{    color: #34090c; font-size: 110%;margin-bottom: 10%; line-height: 25px;}
    .contact-page .excerpt p img{margin-right: 5px}
    .contact-page .excerpt p{width: 100%;float: left;margin-bottom: 2%;display: inline-table;margin-bottom: 25px}
    .form-control1{
    	width: 100%;
    	padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    margin-top: 1%;
    }
    .form-control {
        outline: none;
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    margin-top: 1%;
}
.wpcf7-submit {
    width: 80px;
    border: 0px;
    color: white;
    height: 30px;
    background: #34090c;
    outline: none;
}

.contact-page .head{
        font-size: 150%;
    width: 100%;
    float: left;
    margin-bottom: 3%;
    font-weight: bold;
}
.alert {
	padding: 1% 2%;

    text-shadow: 0 1px 0 rgba(255,255,255,.2);
    -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.25),0 1px 2px rgba(0,0,0,.05);
    box-shadow: inset 0 1px 0 rgba(255,255,255,.25),0 1px 2px rgba(0,0,0,.05);
}
.close:hover, .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
    filter: alpha(opacity=50);
    opacity: .5;
}
.close:hover, .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
    filter: alpha(opacity=50);
    opacity: .5;
}
</style>
<script type="text/javascript">
    $(function(){
        if(window.location.hash == "#baogia")
            $(".wrp-baogia").animatescroll({padding: 70});
    })
</script>