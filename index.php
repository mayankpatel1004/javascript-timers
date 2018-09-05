<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Javascript Timers</title>
</head>
<body>
<?php
$currenttime = date("Y-m-d h:i:s");
$seconds = strtotime("2015-07-09 16:00:00") - strtotime($currenttime); // second - first
echo '
<script>
var upgradeTime = '.$seconds.';
var seconds = upgradeTime;
function timer() {
    var days        = Math.floor(seconds/24/60/60);
    var hoursLeft   = Math.floor((seconds) - (days*86400));
    var hours       = Math.floor(hoursLeft/3600);
    var minutesLeft = Math.floor((hoursLeft) - (hours*3600));
    var minutes     = Math.floor(minutesLeft/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds; 
    }
    document.getElementById("countdown").innerHTML = hours + ":" + minutes + ":" + remainingSeconds;
    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById("countdown").innerHTML = "Completed";
    } else {
        seconds--;
    }
}
var countdownTimer = setInterval("timer()", 1000);
</script><span id="countdown" class="timer"></span>';
?>
</body>
</html>