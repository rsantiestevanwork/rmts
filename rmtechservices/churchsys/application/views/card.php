<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
			#card_front{     
				margin: 0px;	
				overflow: auto;	
				clear:both;
				
				padding:0px;
				text-align:left;
				
				width:1016px;
				height:632px;
				
				background-image:url(http://www.theidc.org.uk/theidc-members/assetsforms/bcn-card/Front_Side_Card.png);
				background-repeat:no-repeat;
				background-size:cover !important;
			}
			#card_back{
				margin: 0px;	
				overflow: auto;	
				clear:both;
				
				padding:0px;
				text-align:left;
				
				width:1016px;
				height:632px;
				
				background-image:url(http://www.theidc.org.uk/theidc-members/assetsforms/bcn-card/background_back_side.png);
				background-repeat:no-repeat;
				background-size:cover !important;

				position: relative;
			}
			.rTable{
				width: 100%;
				display: table;
				position:relative;
				clear:both;
			}
			.rTableRow{
				display: table-row;
			}
			.rTableCell{
					display: table-cell;
					text-align: left;
					vertical-align:top;
			}

				span.cls01{font-family:Arial,serif;font-size:35.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
				span.cls02{font-family:Arial,serif;font-size:35.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
				
				span.cls03{font-family:Arial,serif;font-size:25.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
				span.cls04{font-family:Arial,serif;font-size:25.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}

				span.cls05{font-family:Arial,serif;font-size:32.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
				span.cls06{font-family:Arial,serif;font-size:32.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}

				span.cls07{font-family:Arial,serif;font-size:30.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
				span.cls08{font-family:Arial,serif;font-size:30.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
			
		</style>
	</head>
<body>
<?php
	//inicialize 
?>
<form name="fcard_front" id="fcard_front">
	<!-- front -->
	<div id="card_front">
		<div class="rTable">
			<div class="rTableRow">
				<div class="rTableCell">
					<div style="padding:100px;">
						<br/>
					</div>
				</div>
				<div class="rTableCell">
					<div style="padding:100px;">
						<br/>
					</div>
				</div>
			</div>
			<div class="rTableRow">
				<div class="rTableCell" style="width:30%;padding:20px;">
					<div id="userimage" align="center" style="">
                                                <img src="<?php 
                                                    if($images[0]->picture!=null){
                                                        echo("data:image/jpeg;base64,".base64_encode($images[0]->picture));
                                                    }else{
                                                        echo($images[0]->url);
                                                    }?>" width="240px" height="310px"/>
					</div>
				</div>
				<div class="rTableCell" style="padding:20px;">
					<div id="textfront" style="width:100%;">
						<p><br/>
						<span class="cls01"><?=$userdata['title'].' '.$userdata['firstname'].' '.$userdata['surname']?></span><br/><br/>
						<span class="cls02">
						<?php 
						$line ='';
						$date = new DateTime($userdata['dateofbirth']);
                      	
						$line = $date->format('d M Y');
						$line=$line.' - '.$userdata['nationality'];
						if($userdata['height']!=''){
							$line=$line.' - '.$userdata['height'];
						}
						echo $line;
						?>
						</span><br/><br/>
						<span class="cls01"><?=$userdata['address1']?></span><br/><br/>
						<span class="cls01"><?=$userdata['address2']?></span><br/><br/>
						<span class="cls01">RESIDENCE: </span><span class="cls02"><?=$userdata['residence']?></span>
						</p>
					</div>					
				</div>
			</div>
		</div>
	</div>
	<!-- back -->
	<div id="card_back">
		<div class="rTable">
			<div class="rTableRow">
				<div class="rTableCell">
					<div style="padding-top:20px;padding-left:20px;padding-right:20px;">
						<p>
						<span class="cls06">ASSIGNED: PROTECTORATE IDENTITY COMMISSION</span><br/>
						<span class="cls06">Tel: +44 (0) 844 344 4061&nbsp;&nbsp;&nbsp;Fax: +44 (0) 844 344 4062</span><br/><br/>
						<span class="cls05">Person On The Card Be Accorded Rights And Priviledges Of</span><br/>
						<span class="cls05">Treaty Legislation Of UDHR 1948.</span><br/>
						<span class="cls05">Magna Carta Law Is forceable And Violation A Crime.</span><br/><br/>
						<span class="cls08">ACCORD HOLDERLIST DESIRED RECOGNITION</span><br/>
						<span class="cls08">Card Misplaced And Found, Return To:</span><br/><br/>
						<span class="cls08">Po.Box 66798, London, WC1A 9LN, United Kingdom</span><br/>
						</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="rTable">
			<div class="rTableRow">
				<div class="rTableCell">
					<div style="padding:20px;">
					</div>
				</div>
			</div>
		</div>

		<div align="right" style="position: absolute;left:798px;top:230px;width: 200px;">
			<img src="http://www.theidc.org.uk/theidc-members/assetsforms/bcn-card/United_Nations.png" width="200px" height="200px"/>
		</div>
		<!--
				<div class="rTableCell">
					<div align="right" style="padding:20px;">
						<img src="http://www.theidc.org.uk/theidc-members/assetsforms/bcn-card/United_Nations.png" width="200px" height="200px"/>
					</div>
				</div>
			</div>
		</div>
		-->
		<div class="rTable">
			<div class="rTableRow">
				<div class="rTableCell">
					<div style="padding:20px;">
						<img src="<?=$barcode?>" width="286px" height="124px"/>
						
					</div>
				</div>
				<div class="rTableCell" align="center">
					<div align="center"style="padding:20px;">
						<img src="<?php 
                                                    if($images[1]->picture!=null){
                                                        echo("data:image/jpeg;base64,".base64_encode($images[0]->picture));
                                                    }else{
                                                        echo($images[1]->url);
                                                    }?>" width="200px" height="100px"/><br/>
						<span class="cls03">HOLDER SIGNATURA</span>
					</div>
				</div>
				<div class="rTableCell" align="right">
					<div align="right" style="padding:20px;">
						<img src="<?php 
                                                    if($images[0]->picture!=null){
                                                        echo("data:image/jpeg;base64,".base64_encode($images[0]->picture));
                                                    }else{
                                                        echo($images[0]->url);
                                                    }?>" width="100px" height="100px"/><br/>
						<span class="cls04">
						EXPIRES: 
						<?php
						$date = new DateTime($userdata['expirydate']);
                      	
						echo $date->format('m/Y');
						?>
						</span>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
</form>
</body>
</html>