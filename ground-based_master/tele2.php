
<!DOCTYPE HTML>
<html>
    <head>
    <style>
        *{
            box-sizing: border-box;
        } body {
            margin: 0px;
            padding: 0px;
            font-family: monospace;
        } .row {
            display: inline-flex;
            clear: both;
        } .columnLateral {
            float: left;
            width: 15%;
            min-width: 300px;
        } .columnCetral {
            float: left;
            width: 70%;
            min-width: 300px;
        } #joy2Div {
            width:200px;
            height:200px;
            margin:50px
        } #joystick {
            border: 1px solid #FF0000;
        } #joystick2 {
            border: 1px solid #0000FF;
        } .slidecontainer {
            width: 100%; /* Width of the outside container */
        }
    </style>
    <script src="../src/jquery-3.6.0.min.js"></script>
    <script src="../src/joy.js"></script>
    </head>
    <body> 
        <div class="row">
            <div class="columnLateral">
                <div style="width:200px;margin:50px;margin-bottom:5px;">
                    <img id="rgbnavcamImg" style='width:200px' />
                </div>
                <div id="joy1Div" style="width:200px;height:200px;margin:50px;margin-top:5px;margin-bottom:5px;"></div>
                <div style="width:200px;margin:50px;margin-top:5px;">
                    X :<input id="joy_x" type="text" /><br/>
                    Y :<input id="joy_y" type="text" /><br/>
                    DIR :<input id="joy_dir" type="text" />
                    VEL :<input type="range" min="1" max="100" value="100" class="slider" id="vel" /><br/>
                    FIX :<input type="checkbox" id="fix" />
            </div></div>
            <script type="text/javascript">
                function returnJoyStick(name, nfixed) {
                    $('#'+name).empty();
                    return new JoyStick(name, { "autoReturnToCenter": nfixed, "internalFillColor": "#0581ff", "externalStrokeColor": "#00356B", "internalStrokeColor": "#00356B" }, function(stickData) {
                        var vel = document.getElementById("vel").value;
                        $.get("tele2_service.php?x=" + Math.round(stickData.x*vel/100) + 
                                               "&y=" + Math.round(stickData.y*vel/100),
                              function(response) {}
                             );
                        document.getElementById("joy_x").value = Math.round(stickData.x*vel/100);
                        document.getElementById("joy_y").value = Math.round(stickData.y*vel/100);
                        document.getElementById("joy_dir").value = stickData.cardinalDirection;
                    });
                };
                var Joy1 = returnJoyStick('joy1Div', true);

		        var RGBNavCam1 = setInterval(function() { $.get("rgbnavcam.php", function(response) { 
                    if (response=='..') { 
                        document.getElementById('rgbnavcamImg').src = 'files/' + response;
                    } else { 
                        document.getElementById('rgbnavcamImg').src = '/src/empty.png';
                    }
                });}, 500);
                $('#fix').click(function() {
                    if ($(this).is(':checked')) {
                        Joy1 = returnJoyStick('joy1Div', false);
                    } else {
                        location.reload(true);
                    }
                });
            </script>
        </div>
    </body>
</html>