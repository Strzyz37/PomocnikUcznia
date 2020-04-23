<script>

$( document ).ready(function() {
$('body').css('background-image', 'url("img/indeks.jpg")');

var myVar = setInterval(function(){
$('body').css('background-image', 'url("img/indeks2.jpg")');

setTimeout(function(){
$('body').css('background-image', 'url("img/indeks3.jpg")');

}, 3000);
setTimeout(function(){
$('body').css('background-image', 'url("img/indeks.jpg")');
}, 6000);
}, 9000);
});

</script>
//&#9733
