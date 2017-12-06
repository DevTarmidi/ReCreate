    <style>
        /* Style the tab */
        div.tab {
            float: left;
            border: 1px solid #fff;
            background-color: #ddd;
            width: 10%;
            height: 550px;
        }

        
        /* Style the buttons inside the tab */
        div.tab button {
            display: block;
            background-color: inherit;
            color: black;
            padding: 22px 16px;
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
            width: 90%;
            border-left: none;
            height: 100%;
        }
    </style>
    <div style="width:100%;height:80%;" >
		<div class="row" style="width:100%;">
		  <div class="text-center" style="background-color: inherit; width:100%;">
		    <div class="tab">
                <button class="tablinks active" onclick="openTab(event, 'new')" id="defaultOpen">New</button>
                <button class="tablinks" onclick="openTab(event, 'yfile')">My Files</button>
            </div>
            <div id="new" class="tabcontent">
                <div class="container">
                    <div class="row mt-1">
                        <h3>New Project</h3><hr/>
                        <div id="layout" class="text-left" style="width:90%;" align="center">
                            <a href="main.html">
                                <div id="400p" class="col-lg-3 text-center" style="width:100px; height:75px; background-color:#ccc; margin:2px;">
                                    400x300
                                </div>
                            </a>
                            <a href="main.html?w=800&h=450">
                                <div id="800p" class="col-lg-3 text-center" style="width:200px; height:112px; background-color:#ccc; margin:2px;">
                                    800x450
                                </div>
                            </a>
                        </div>
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
