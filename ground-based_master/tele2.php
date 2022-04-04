
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
        }
    </style>
    <script src="../src/jquery-3.6.0.min.js"></script>
    <script src="../src/joy.js"></script>
    </head>
    <body>
        <!-- Example of two JoyStick integrated in the page structure -->
        <div class="row">
            <div class="columnLateral">
		<div id="joy1Div" style="width:200px;height:200px;margin:50px">

                    X :<input id="joy_x" type="text" /><br/>
                    Y :<input id="joy_y" type="text" /><br/>
                    DIR :<input id="joy_dir" type="text" />
            </div></div>
            <script type="text/javascript">
                var Joy1 = new JoyStick('joy1Div', {}, function(stickData) {
                    $.get("tele2_service.php?x=" + stickData.x + 
                                           "&y=" + stickData.y,
                          function(response) {}
			 );
                    document.getElementById("joy_x").value = stickData.x;
                    document.getElementById("joy_y").value = stickData.y;
                    document.getElementById("joy_dir").value = stickData.cardinalDirection;
		});
            </script>
        </div>
    </body>
</html>
