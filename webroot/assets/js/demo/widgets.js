(function(c,b,a,d){c(a).ready(function(){if(c.fn.tweet){c("#tweets-widget").tweet({username:"nagaemas_tf",avatar_size:60,template:"{avatar}{user}{time}{join} {text}{reply_action}{retweet_action}"})}if(c.fn.sortable){c(".sortable-list ul").sortable({placeholder:"placeholder",forcePlaceholderSize:true,update:function(e,f){c(f.item).parents(".sortable-list ul").children("li").each(function(h,g){c(".info .order",c(g)).text("Item Order: "+(h+1))})}})}});c(b).load(function(){if(c.fn.gmap){c("#gmap-canvas").gmap({center:f(),zoom:15});if(c.fn.autocomplete){c("#gmap-canvas").gmap("autocomplete",c("#gmap-search-key"),function(g){e(g.item.position)})}c("#gmap-getpos").on("click",function(g){c("#gmap-canvas").gmap("getCurrentPosition",function(h,i){if(i==="OK"){e(h)}else{c.pnotify({title:"Google Maps",text:"We failed to find your location. Please try again.",type:"error"})}});g.preventDefault()});function e(g){c("#gmap-canvas").gmap("option","center",g);c("#gmap-canvas").gmap("clear","markers");c("#gmap-canvas").gmap("addMarker",{bounds:true,position:g,animation:google.maps.Animation.DROP})}function f(){if(google&&google.loader&&google.loader.ClientLocation!=null){return new google.maps.LatLng(google.loader.ClientLocation.latitude,google.loader.ClientLocation.longitude)}return new google.maps.LatLng(-6.175369,106.827106)}}})})(jQuery,window,document);