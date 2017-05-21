<script src = "gallery.js"></script>
 <html>
    <head>
	
		      <title> Gallery </title>
<link href="gallery.css" rel="stylesheet" type="text/css"/>
  </head>
    
   <body>
   

   
	<center>
	
	
        <img src = "1.jpg" width = "640" height = "480"  id = "img" > </img> <br />
		        
        <img src = "button2.png"   onClick = "javascript: left_arrow()" /> 
	    <img src = "button1.png"  onClick = "javascript: right_arrow()" />
    </center>
	      
	   
	   
    </body>
 </html>
 
 <!DOCTYPE HTML>
<html>

<head>
  <style>
    #train {
      position: relative;
      cursor: pointer;
    }
	  #train2 {
      position: relative;
      cursor: pointer;
    }
	  #train3 {
      position: relative;
      cursor: pointer;
    }
	  #train4 {
      position: relative;
      cursor: pointer;
    }
	  #train5 {
      position: relative;
      cursor: pointer;
    }
	
  </style>
</head>

<body>

  <img id="train"  width = "90" height = "90" src="1(2).jpg  ">
 <img id="train2"  width = "90" height = "90" src="2(2).jpg">
 <img id="train3"  width = "90" height = "90" src="3(2).jpg">
  <img id="train4"  width = "90" height = "90" src="4(2).jpg">
   <img id="train5"  width = "90" height = "90" src="5(2).jpg">
  <script>
    train.onclick = function() {
      var start = Date.now(); // сохранить время начала

      var timer = setInterval(function() {
        // вычислить сколько времени прошло из opts.duration
        var timePassed = Date.now() - start;

        train.style.left = timePassed / 5 + 'px';

        if (timePassed > 2000) clearInterval(timer);

      }, 20);
    }
	train2.onclick = function() {
      var start = Date.now(); // сохранить время начала

      var timer = setInterval(function() {
        // вычислить сколько времени прошло из opts.duration
        var timePassed = Date.now() - start;

        train2.style.left = timePassed / 5 + 'px';

        if (timePassed > 2000) clearInterval(timer);

      }, 20);
    }
	train3.onclick = function() {
      var start = Date.now(); // сохранить время начала

      var timer = setInterval(function() {
        // вычислить сколько времени прошло из opts.duration
        var timePassed = Date.now() - start;

        train3.style.left = timePassed / 5 + 'px';

        if (timePassed > 2000) clearInterval(timer);

      }, 20);
    }
	train4.onclick = function() {
      var start = Date.now(); // сохранить время начала

      var timer = setInterval(function() {
        // вычислить сколько времени прошло из opts.duration
        var timePassed = Date.now() - start;

        train4.style.left = timePassed / 5 + 'px';

        if (timePassed > 2000) clearInterval(timer);

      }, 20);
    }
	train5.onclick = function() {
      var start = Date.now(); // сохранить время начала

      var timer = setInterval(function() {
        // вычислить сколько времени прошло из opts.duration
        var timePassed = Date.now() - start;

        train5.style.left = timePassed / 5 + 'px';

        if (timePassed > 2000) clearInterval(timer);

      }, 20);
    }
  </script>


</body>

</html>