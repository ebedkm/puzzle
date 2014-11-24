<!DOCTYPE HTML>
<html>
  <head>
    <style>
      body {
        margin: 0px;
        padding: 0px;
      }
    </style>
  </head>
  <body>
    <canvas id="myCanvas" width="800" height="800"></canvas>
    <script>
    window.onload = function(){
      var image = new Object;
      image.width = 800;
      image.height = 800;

      var canvas = document.getElementById('myCanvas');
      var context = canvas.getContext('2d');
      var size = 6;
      var div = size/2;
      var Map = new Array;
      for(i = 0; i < size; i++){
        Map[i] = new Array;
        for(j = 0; j < size; j++){
          var box = new Object;
            console.log(i + " " + j)
            box.width = image.width/size;
            box.height = image.height/size;
            box.x = i*box.width*1.05;
            box.y = j*box.height*1.05;

            Map[i][j] = box;
        }
      }
      console.log(Map[0][1].width);
      
          var imageObj = new Image();
          imageObj.onload = function() {
            for(i = 0; i < size; i++){
              for(j = 0; j < size; j++){
                console.log(i + " " + j )
                context.drawImage(imageObj, Map[i][j].x, Map[i][j].y, Map[i][j].width, Map[i][j].height, Map[i][j].x, Map[i][j].y , Map[i][j].width, Map[i][j].height);
              }
            }
          }
          imageObj.src = 'http://localhost/puzzle/gambar.jpg';
      
    }
      
      
    </script>
  </body>
</html>      