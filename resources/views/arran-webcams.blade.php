<x-app-layout title='Arran Webcams' :assets="$assets ?? []" :isBanner="true">

<div class="bd-example">
            <div class="row  row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
            
<div >
		<div class='wrapper'>
			<div class='twitchWrapper'>
				<div class='twitchStream'>
					<iframe src="https://player.twitch.tv/?channel=cmalbrodick&parent=wx.arranweather.com" frameborder="0" scrolling="no"></iframe>
				</div>
				</div>
		</div>
                        <div class="card-body">
                            <h5 class="card-title">Brodick Pier Calmac Webcam</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">CMAL Brodick</a>
                        </div>
                    </div></div></div>
                                      <div class="card">
<iframe
    src="https://player.twitch.tv/?channel=cmallochranza&parent=wx.arranweather.com"
    height="100%"
    width="100%"
    allowfullscreen>
</iframe>
                        <div class="card-body">
                            <h5 class="card-title">Lochranza Pier Calmac Webcam</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Lochranza Pier Calmac Webcam</a>
                        </div>
                    </div>
                <div class="col">
                    <div class="card">
            
<div >
<?php $string1=Storage::url('public/stringcam1.jpg');?>
<?php $string2=Storage::url('public/stringcam2.jpg');?>
                        <div class="card-body">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="66%" src="<?php echo $string1 ?>" />
                            <h5 class="card-title">NAC String Road Cam West</h5>
                            <p class="card-text">Handy to check in winter months for snow at the top of the string road</p>
                            <a href="https://www.north-ayrshire.gov.uk/roads-and-travel/roadcams.aspx" class="btn btn-primary">NAC Road Cams</a>
                        </div>
                    </div></div>   </div>                 <div class="card">
            
<div >
                        <div class="card-body">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="66%" src="<?php echo $string2 ?>" />
                            <h5 class="card-title">NAC String Road Cam East</h5>
                            <p class="card-text">Handy to check in winter months for snow at the top of the string road</p>
                            <a href="https://www.north-ayrshire.gov.uk/roads-and-travel/roadcams.aspx" class="btn btn-primary">NAC Road Cams</a>
                        </div>
                    </div></div>
                
                 </div>
                  </div>


</x-app-layout>
