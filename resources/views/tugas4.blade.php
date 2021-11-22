<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#start").click(function(){
    $("#panel").slideDown(3000);
    $("#text").animate({fontSize: '3em'}, 2000);
  });
  $("#stop").click(function(){
    $("#panel").stop();
  });
  $("#stop2").click(function(){
    $("div").stop(true,true);
  });
});
</script>

<style>
#flip {
  padding: 5px;
  font-size: 18px;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  text-align: center;
  background-color: #CC7351;
  color: #fbffc3;
  border: solid 1px rgb(161, 56, 56);
  border-radius: 3px;
}

#panel {
  padding: 5px;
  font-size: 18px;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  text-align: center;
  background-color: #9DAB86;
  color: white;
  border: solid 1px #666;
  border-radius: 3px;
}

#panel {
  padding: 100px;
  display: none;
}

#text {}


</style>
</head>
<body>
<button id="start">Start</button>
<button id="stop">Stop sliding</button>
<button id="stop2">Stop but finish</button>

<div id="flip">Get to know me!</div>
<div id="panel">
    <img src="https://i.ibb.co/VC3wWKv/132501.jpg">
    <center><div id="text" style="background:#CC7351;height:100px;width:200px; text-align: center;text">안영!</div></center>
    <p>Hello everyone! My name is Aina Divany. I'm 19th years old, and <br> I'm a second year undergraduate student in Institute Technology Sepuluh Nopember.</p>
</div>

</body>
</html>
