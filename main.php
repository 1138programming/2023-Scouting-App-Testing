<!DOCTYPE html>
<html>
<head>
</head>
<body>

<button onclick="setStartTime()">Start</button>

<p id="textDisplay"></p>


<script>
    let startTime = 0;
    function setStartTime() {
        startTime = Date.now();
    }
    let dKeyDownTime = 0;
    let lastKey = 0;
    function keyPressed(e) {
        if (startTime === 0) {
            return;
        }
        if (lastKey === e.keyCode) {
            return;
        }
        console.log(e);
        if (e.keyCode === 80) {
            var paragraph = document.getElementById("textDisplay");

            var thisDate = Date.now()-startTime;

            paragraph.innerHTML += "<br>";

            var text = document.createTextNode("Key P pressed at " + thisDate.toString() + ".");

            paragraph.appendChild(text);

        }
        if (e.keyCode === 79) {
            var paragraph = document.getElementById("textDisplay");

            var thisDate = Date.now()-startTime;

            paragraph.innerHTML += "<br>";

            var text = document.createTextNode("Key O pressed at " + thisDate.toString() + ".");

            paragraph.appendChild(text);
        }
        if (e.keyCode === 68) {
            dKeyDownTime = Date.now()-startTime;
        }
        lastKey = e.keyCode;
        // O key code = 79; P key code = 80; D key code = 68
    }
    document.onkeydown = keyPressed;
    function keyUp(e) {
        if (startTime === 0) {
            return;
        }
        if (e.keyCode === 68) {
            var paragraph = document.getElementById("textDisplay");

            var thisDate = Date.now()-startTime;
            var timePassed = (thisDate-dKeyDownTime);
            
            paragraph.innerHTML += "<br>";

            var text = document.createTextNode("Key D up at " + thisDate.toString() + ", for a total of " + timePassed.toString() + "ms");

            paragraph.appendChild(text);
        }
        lastKey = 0;
    }
    document.onkeyup = keyUp;
</script>

</body>
</html>
