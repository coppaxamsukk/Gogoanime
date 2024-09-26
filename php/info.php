<?php 
$base_url = "//{$_SERVER['SERVER_NAME']}";
$website_name = "GogoAnime";
$apiLink = "https://consumet-api-goep.onrender.com/anime/gogoanime/"; // add the api here with the '/' at the end!
$consumet = "https://consumet-api-goep.onrender.com/anime/gogoanime/"; // host ur own consumet api from here `https://github.com/consumet/api.consumet.org`
if (date("d") > 15){
    $apiLink = "https://consumet-api-goep.onrender.com/anime/gogoanime/"; // same goes for here
}
?>
