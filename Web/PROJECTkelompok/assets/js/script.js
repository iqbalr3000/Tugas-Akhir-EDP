$(document).ready(function(){
    //real time halaman dashboard.php
    setInterval(function() {
        $('.load-data').load('loadDataDashboard.php');
    }, 100);
});