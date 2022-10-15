


(function drawCanvas(){
  //gets the mycanvas from the html
  //stores the value of canvas width and height specified in the html
    var canvas=document.getElementById('mycanvas');
    var ctx=canvas.getContext('2d');
    var cWidth=canvas.width;
    var cHeight=canvas.height;
    
    var countTo=100; //specifies the total time 
    var min=Math.floor(countTo/60); //calculating minute
    var sec=countTo-(min*60); //calculating second
    var counter=0;
    var angle=270; //angle starts at 270 and ends at 630
    var inc=360/countTo; //incremenets angle by a certain amount

    
    
    
    function drawScreen() {
      
      
      //----------------------reset canvas
      
      ctx.fillStyle="white";
      ctx.fillRect(0,0,cWidth,cHeight);
      
      //----------------------base arc
      
      ctx.beginPath();
      ctx.strokeStyle="black";
      ctx.lineWidth=4;
      ctx.arc(cWidth/2,cHeight/2,100,(Math.PI/180)*0,(Math.PI/180)*360,false);
      ctx.stroke();
      ctx.closePath();
      
      //-------------------dynamic arc
      
      ctx.beginPath();
      if(min==0 && sec<=10)
      ctx.strokeStyle="red";
      else if((angle-270)>=270)
        ctx.strokeStyle="orange";
      else
        ctx.strokeStyle="aqua";
      ctx.lineWidth=4;
      ctx.arc(cWidth/2,cHeight/2,100,(Math.PI/180)*270,(Math.PI/180)*angle,false);
      ctx.stroke();
      ctx.closePath();
      
      //---------------inner shadow arc
      
      grad=ctx.createRadialGradient(cWidth/2,cHeight/2,80,cWidth/2,cHeight/2,115);
      grad.addColorStop(0.0,'rgba(0,0,0,.4)');
      grad.addColorStop(0.5,'rgba(0,0,0,0)');
      grad.addColorStop(1.0,'rgba(0,0,0,0.4)');
      
      ctx.beginPath();
      ctx.strokeStyle=grad;
      ctx.lineWidth=4;
      ctx.arc(cWidth/2,cHeight/2,100,(Math.PI/180)*0,(Math.PI/180)*360,false);
      ctx.stroke();
      ctx.closePath();

      //------------------Values
      
      var fontFace="helvetica, arial, sans-serif";
      ctx.fillStyle='#6292ae';
      
      ctx.font='50px '+fontFace;
      if (min>9) {
        
        ctx.fillText(min ,cWidth/2-60,cHeight/2+20);      
      }
      else {
        //adds zero in front of minute if single digit
        ctx.fillText('0'+min ,cWidth/2-60,cHeight/2+20);
      }
      
      ctx.font='50px '+fontFace;
      if (sec<10) {
        ctx.fillText('0'+sec,cWidth/2+10,cHeight/2+20);
      } 
      else {
        ctx.fillText(sec,cWidth/2+10,cHeight/2+20);
      }
      
      //----------------update second and minute
      if (sec<=0 && counter<countTo) {
        angle+=inc;
        counter++;
        min--;
        sec=59; 
      } else
        if (counter>=countTo) {
          sec=0;
          min=0;
        } else {
          angle+=inc;
          counter++;
          sec--;
        }


      
    }
    
    //calls function drawScreen every 1 second
    setInterval(drawScreen,1000);
    
  })()