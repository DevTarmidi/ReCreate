    <style>
        /* Style the tab */
        div.tab {
            float: left;
            border: none;
            background-color: #ddd;
            width: 30%;            
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
            height: 100%;
        }
    </style>

    <div style="width: 98.9%;"  >
		<div class="row text-center" style="background-color:#526373; height:50pt">
            <form class="navbar-form mt-1" style="position: absolute; left: 25%; width:50%;visibility:hidden;">
                <div class="input-group mt-2">
                <input class="form-control" placeholder="Tempel URL panjang disini" name="send" id="send" type="text">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-chevron-right" style="color:#656363;" title="Persingkat!"></i></button>
                </div>
                </div>
            </form>
            <hr>
            <form class="navbar-form mt-1" role="search" style="position: absolute; left: 15%; width:70%;visibility:visible;">
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
		    <div class="tab" style="height:495px; overflow-y: scroll;">
                <button class="tablinks active" onclick="openTab(event, 'new')" id="defaultOpen">Link 1 <br><i style="color:#888;">singkat.in/blabla</i></button>
                <button class="tablinks" onclick="openTab(event, 'yfile')">Link 21 <br><i style="color:#888;">singkat.in/bleble</i></button>
            </div>
            <div id="new" class="tabcontent">
                <div class="container" style="height:495px;";>
                    <div class="row mt-1">
                        <h3>New Project</h3>
                    </div>
                </div>
            </div>
            <div id="yfile" class="tabcontent">
                <div class="container">
                    <div class="row mt-1">
                        <h3>My Files</h3>
                        <hr/>
                    </div>
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
    </script>
