$(document).ready(function(){
    //real time halaman dashboard.php
    setInterval(function() {
        $('.load-data-log').load('loadDataLog.php');
    }, 100);
});