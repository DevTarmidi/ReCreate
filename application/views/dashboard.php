    <style>
        /* Style the tab */
        div.tab {
            float: left;
            border: none;
            background-color: #ddd;
            width: 30%; 
            height: 78vh;           
        }

        
        /* Style the buttons inside the tab */
        div.tab button {
            display: block;
            background-color: inherit;
            color: black;
            padding: 11px 16px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        div.tab button:hover {
            background-color: #aaa;
        }

        /* Create an active/current "tab button" class */
        div.tab button.active {
            background-color: #fff;
        }

        /* Style the tab content */
        .tabcontent {
            float: left;
            padding: 0px 12px;
            background-color: #fff;
            width: 70%;
            border-left: none;
            height: 78vh;
            padding: 20px 10px 10px 30px;
        }
        h3{
            margin-bottom : 0px;
        }
        .btn-warning{
            height:14pt;
            font-size : 9pt;
            padding : 0px;
        }
        .btn-danger{
            height:14pt;
            font-size : 9pt;
            padding : 0px;
        }
        .htitle{
            text-align : left;
            margin-bottom : 0px;
        }
        .dateb{
            font-size:10pt;
            color : #444;
            margin-bottom : 10px;
        }
        .linkb{
            font-size:11pt;
            color : #777;
            font-style : italic;
        }
        .links{
            font-size:14pt;
            color : orange;
        }
    </style>

    <div style="width: 98.9%;"  >
		<div class="row text-center" style="background-color:#526373; height:50pt">
            <form class="navbar-form mt-1" style="position: absolute; left: 25%; width:50%;visibility:<?php if($status){echo "hidden";}else{echo "visible";} ?>;">
                <div class="input-group mt-2">
                <input class="form-control" placeholder="Tempel URL panjang disini" name="send" id="send" type="text">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-chevron-right" style="color:#656363;" title="Persingkat!"></i></button>
                </div>
                </div>
            </form>
            <hr>
            <form class="navbar-form mt-1" role="search" style="position: absolute; left: 15%; width:70%;visibility:<?php if($status){echo "visible";}else{echo "hidden";} ?>;">
                <div class="input-group mt-2">
                    <h4 style="color:#8d9dad;padding-top: 5px;margin-bottom: 0px;">Costumize : </h4>
                    <label for="title" style="color:#fff;padding-top: 8px; padding-left: 20px; padding-right: 10px; margin-bottom: 0px;">Judul</label>
                    <input class="form-control" placeholder="Judul" name="title" id="title" type="text">
                    <label for="send" style="color:#fff;padding-top: 8px; padding-left: 40px; margin-bottom: 0px;">singkat.in/</label>
                    <input class="form-control" placeholder="Kode singkat.in" name="send" id="send" type="text">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-chevron-right" style="color:#656363;" title="Persingkat!"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div style="width: 98.9%;height:20%;">
        <div class="row" style="background-color:#eee;">
		  <div class="text-center" style=" width:100%; ">
		    <div class="tab" style="overflow-y: scroll;">
                <button class="tablinks active" onclick="openTab(event, 'new')" id="defaultOpen">Link 1 <br><i style="color:#888;">singkat.in/blabla</i></button>
                <button class="tablinks" onclick="openTab(event, 'yfile')">Link 21 <br><i style="color:#888;">singkat.in/bleble</i></button>
            </div>
            <div id="new" class="tabcontent">
                <div class="htitle">
                    <h3>Link 1</h3>
                    <p class="dateb">13 Desember 2017</p>
                    <a class="linkb" href="https://google.com" target=blank>https://google.com</a><br>
                    <a id="blabla" class="links" href="singkat.in/blabla" target=blank>singkat.in/blabla</a>
                    <button class="btn btn-warning" onclick="copyt('#blabla')">copy</button>
                    <a href="dashboard/update"><button class="btn btn-danger">edit</button></a>
                </div>
            </div>
            <div id="yfile" class="tabcontent">
                <div class="htitle">
                    <h3>My Files</h3> 
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("defaultOpen").click();
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        function copyt(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            alert("\"" + $(element).text() + "\" Copied");
            $temp.remove();
          }
    </script>
