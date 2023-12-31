<x-app-layout :assets="$assets ?? []" :title="$title ?? []" :isBanner="true">

<div class="bd-example">
            <div class="row  row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
            
		<div class='wrapper' align="center">
			<div class='twitchWrapper'>
				<div class='twitchStream'>
					<iframe src="https://player.twitch.tv/?channel=cmalbrodick&parent=arranweather.com" frameborder="0" scrolling="no" ></iframe>
				</div>
				</div>
		</div>
                        <div class="card-body">
                            <h5 class="card-title">Brodick Pier CMAL Webcam</h5>
                            <p class="card-text">A view looking over Brodick Pier</p>
                            <a href="#" class="btn btn-primary">CMAL Brodick</a>
                        </div>
                    </div></div>
                                      <div class="card">
		<div class='wrapper'>
			<div class='twitchWrapper'>
				<div class='twitchStream'>
					<iframe src="https://player.twitch.tv/?channel=cmallochranza&parent=arranweather.com" frameborder="0" scrolling="no" ></iframe>
				</div>
				</div>
		</div>
                        <div class="card-body">
                            <h5 class="card-title">Lochranza Pier CMAL Webcam</h5>
                            <p class="card-text">A view of Lochranza pier slip way across to Newton shore.</p>
                            <a href="#" class="btn btn-primary">Lochranza Pier CMAL Webcam</a>
                        </div>
                    </div>
                <div class="col">
                    <div class="card">
            
<div >
<?php $string1=Storage::url('public/stringcam1.jpg');?>
<?php $string2=Storage::url('public/stringcam2.jpg');?>
<?php $brodickcam=Storage::url('public/brodickwebcam.jpg');?>
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
                    <div class="card">
            
<div >
                        <div class="card-body">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="66%" src="<?php echo $brodickcam ?>" />
                            <h5 class="card-title">Cottage on Arran Webcam</h5>
                            <p class="card-text">A fantastic view across Brodick Beach, over the bay and up to Goatfell. Webcam is run by the amazing team at Cottages On Arran team</p>
                            <a href="https://www.cottagesonarran.co.uk/arran-webcam/" class="btn btn-primary">cottageonarran.com</a>
                        </div>
                    </div></div>
                
                 </div>
                  </div>


</x-app-layout>
