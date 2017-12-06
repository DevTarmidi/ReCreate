    <div style="width:100%;height:80%;" >
		<div class="row" style="width:100%;">
		  <div class="text-center" style="background-color: inherit; width:30%;">
		    <div class="tab">
		  <button class="tablinks active" onclick="openCity(event, 'elemen')" id="defaultOpen">Elemen</button>
		  <button class="tablinks" onclick="openCity(event, 'teks')">Teks</button>
		  <button class="tablinks" onclick="openCity(event, 'layer')">Layer</button>
		</div>
		<div id="elemen" class="tabcontent">
		  <form class="navbar-form mt-1" role="search">
			<div class="input-group">
			  <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
			  <div class="input-group-btn">
				<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
			  </div>
			</div>
		  </form>
		  <div id="dvSource" class="mt-1" style="height:90%; width:100%; overflow : auto; background-color:white;">
				<img id="Chrysanthemum" src="images/Chrysanthemum.jpg" />
				<img id="Desert" src="images/Desert.jpg" />
				<img id="Hydrangeas" src="images/Hydrangeas.jpg" />
				<img id="Jellyfish" src="images/Jellyfish.jpg" />
				<img id="Koala" src="images/Koala.jpg" />
				<img id="Lighthouse" src="images/Lighthouse.jpg" />
				<img id="Penguins" src="images/Penguins.jpg" />
				<img id="Tulips" src="images/Tulips.jpg" />
				<img id="Chrysanthemum" src="images/Chrysanthemum.jpg" />
				<img id="Desert" src="images/Desert.jpg" />
				<img id="Hydrangeas" src="images/Hydrangeas.jpg" />
				<img id="Jellyfish" src="images/Jellyfish.jpg" />
				<img id="Koala" src="images/Koala.jpg" />
				<img id="Lighthouse" src="images/Lighthouse.jpg" />
				<img id="Penguins" src="images/Penguins.jpg" />
				<img id="Tulips" src="images/Tulips.jpg" />
		  </div>
		</div>
		<div id="teks" class="tabcontent">
			<div class="mt-2">
				<select class="form-control" id="ffamily" onchange="changeFont()">
					<option value="AR Bonnie Medium" style="font-family:'AR Bonnie Medium';">AR Bonnie Medium</option>
					<option value="Arial" selected style="font-family:'Arial';">Arial</option>
					<option value="Century Gothic" style="font-family:'Century Gothic';">Century Gothic</option>
					<option value="Engravers Gothic BT" style="font-family:'Engravers Gothic BT';">Engravers Gothic BT</option>
				</select>
			</div>
			<div class="navbar-form mt-2">
				<div class="input-group">
					<input type="number" min=1 id="fsize" class="form-control" style="width:	30%;" value=20 onchange="changeSize()" oninput="validity.valid||(value='');">
					<input type="color" id="fcolorp" class="form-control" style="width:20%; height:40px" value="#000000" onchange="clickColor()">
					<input type="number" min=0 id="osize" class="form-control" style="width:	30%;" value=0 onchange="clickColorO()" oninput="validity.valid||(value='');">
					<input type="color" id="ocolorp" class="form-control" style="width:20%; height:40px" value="#000000" onchange="clickColorO()">
				</div>
			</div>
			<div id="textID" class="text-center mt-2" contenteditable="true" style="border:1px; height:'40px'; font-size:20px; font-family:'Arial'; color:#000000;-webkit-text-stroke:0px #000000;">
				Your Text Here
			</div>
		</div>
		<div id="layer" class="tabcontent">
		  <ul id="sortable" class="list-group mt-2">
				<li class="list-group-item"><span class="glyphicon glyphicon-sort"></span>Layer 1</li>
				<li class="list-group-item"><span class="glyphicon glyphicon-sort"></span>Layer 2</li>
				<li class="list-group-item"><span class="glyphicon glyphicon-sort"></span>Layer 3</li>
				<li class="list-group-item"><span class="glyphicon glyphicon-sort"></span>Layer 4</li>
				<li class="list-group-item"><span class="glyphicon glyphicon-sort"></span>Layer 5</li>
			</ul>
	</div>
	
          </div>
		  <div id="canvas" class="text-center" style="width:70%;">
			<div id="dvDest" style="width:400px; height:300px; background-color:white; overflow : none; position: absolute; top: 25%; left: 50%; z-index:-1">
				
			</div>
		  </div>
		</div>
    </div>
    <script>
		document.getElementById("defaultOpen").click();
		$(function () {
				
							$("#dvSource img").draggable({
									revert: "invalid",
									drag: function (event, ui) {
											ui.helper.addClass("draggable");
									}
							}),
							$("#dvDest").droppable({
									drop: function (event, ui) {
										if ($("#dvDest img").length == 0) {
												$("#dvDest").html("");
										}
										ui.draggable.addClass("dropped");
										ui.draggable.addClass("resizable");
										ui.draggable.removeClass("draggable");
										$(ui.draggable).clone().appendTo($(this));
									}	
							}),
							$( "#dvDest img" ).resize();
							$( "#sortable" ).sortable();
							$( "#sortable" ).disableSelection();
					});
		function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
		}
		var hh = 0;
		function changeFont() {
			typef = document.getElementById("ffamily").value;
			document.getElementById("textID").style.fontFamily = typef;
		}
		function changeSize() {
			size = document.getElementById("fsize").value;
			document.getElementById("textID").style.fontSize = size.toString()+"px";
		}
			function clickColor() {
				var c;
				c = document.getElementById("fcolorp").value;
				cObj = w3color(c);
    		colorhex = cObj.toHexString();
				document.getElementById("textID").style.color = cObj.toHexString();
			}
			function clickColorO() {
				var c;
				c = document.getElementById("ocolorp").value;
				d = document.getElementById("osize").value;
				cObj = w3color(c);
    		colorhex = cObj.toHexString();
				document.getElementById("textID").style.webkitTextStroke = d.toString()+"px "+cObj.toHexString();
			}
		</script>