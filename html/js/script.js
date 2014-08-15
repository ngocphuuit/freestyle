

	
/*	for(var i=0;i<app.length;i++)
	{
		app[i].addEventListener('keypress',move);
	}*/


  var container = document.getElementById('wrap-container');
  var menuman = document.getElementById('menu');
  var slide = document.getElementById('slide-content');
  var app = document.getElementsByClassName('application');
  var left = container.style.left;

  var whereAt = 0; 
  function move(){
    whereAt = 1;
    function moveloop()
    {
      left=left-15;
      container.style.left = left + "px";
      if(left <= -522)
      {
        slide.style.visibility = "visible";
        menuman.style.visibility = "hidden";
        clearInterval(id);
      }
    }
    var id = setInterval(moveloop,1);
  }

  function moveback(){
    whereAt = 0;
    function moveloop()
    {
      left+=15;
      console.log(left);
      container.style.left = left + "px";
      if(left >= 0)
      {
        slide.style.visibility = "hidden";
        menuman.style.visibility = "visible";
        clearInterval(id);
      }
    }
    var id = setInterval(moveloop,1);
  }
	

//window.onload = function(){
var global_position = 0;

window.onkeydown = function(evt) {
    evt = evt || window.event;
    //alert("keydown: " + evt.keyCode);

    var li = document.querySelectorAll(".left_menu");
    for (var i = 0; i < li.length; i++) {
          var str = li[i].className;
          var patt = /active/g;
          var res = patt.test(str);
      if(res){
        var n = i;
        break;
      }
    }

  switch (evt.keyCode) {
      case 37://left
          if (global_position == 0) {
            break;
          } else{
            app_leftright("left");
          };    
          break;

      case 38: //up
          if (global_position == 0) {
            if (n != 0) {
              menu("up",n);
            };
          } else{
              app_updown("up");
          };
          break;   

      case 39://right
          if (global_position == 0) {
            global_position = 1;
            get_focus();
            break;
          } else{
            app_leftright("right");
          }; 
          break;
      case 40: //down
          if (global_position == 0) {
            if (n != li.length-1) {
              menu("down",n);
            } 
          } else {
              app_updown("down");
          };
          break;

      case 13: //enter
          if (global_position == 0) {
              global_position = 1;
              get_focus();
          } else{
            if (whereAt == 0) {
              move();
            }
          };
          break;

      case 27:
        if(whereAt == 1){
          moveback();
        }
        break;

      default:
      console.log(evt.keyCode);
      break;    
    }

};
               

function get_focus(e){
  var e=window.event || e;
  var cl = document.getElementsByClassName("application");
  cl[0].className += " focus";
}



function menu(e,n){
  var li = document.getElementsByClassName("left_menu");
  if (e == "up") {
    li[n].classList.remove('active');
    n = n-1;
    li[n].className += " active";
  } else{
    li[n].classList.remove('active');
    n = n+1;
    li[n].className += " active";
  };
}


// up down app
function app_updown(e){
  var li_chanel = document.getElementsByClassName("application");
  for (var j = 0; j < li_chanel.length; j++) {
        var str = li_chanel[j].className;
        var patt = /focus/g;
        var res = patt.test(str);
    if(res){
      var m = j;
      break;
    };
  }
  if (e == "up") {
    if (m > 2) {
      li_chanel[m].classList.remove('focus');
      m = m-3;
      li_chanel[m].className += " focus";
    };
  } else{
    if (m < 9) {
      li_chanel[m].classList.remove('focus');
      m = m+3;
      li_chanel[m].className += " focus";
    };
  };
}


// left right app
function app_leftright(e){
  var li_chanel = document.getElementsByClassName("application");
  for (var j = 0; j < li_chanel.length; j++) {
        var str = li_chanel[j].className;
        var patt = /focus/g;
        var res = patt.test(str);
    if(res){
      var m = j;
      break;
    };
  }
  if (e == "right") {
    if (m != li_chanel.length-1 ) {
      li_chanel[m].classList.remove('focus');
      m = m+1;
      li_chanel[m].className += " focus";
    };
  } else{
    if (m == 0) {
      global_position = 0;
      li_chanel[m].classList.remove('focus');
    } else{
      li_chanel[m].classList.remove('focus');
      m = m-1;
      li_chanel[m].className += " focus";
    };
    
  };
}
