<?php 
$ip = $_SERVER['REMOTE_ADDR']; //Ip – клиента 
$result = (array)json_decode(file_get_contents("http://ipinfo.io/{$ip}/json")); 
?>
    var city = document.getElementById('user-city');
    var citycode = <?php echo $result[city]; ?>;
    city.innerHTML = citycode;