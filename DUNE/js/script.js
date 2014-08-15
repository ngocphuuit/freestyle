//window.onload = function(){
var global_position = 0;

window.onkeydown = function(evt) {
    evt = evt || window.event;
    //alert("keydown: " + evt.keyCode);

    var li = document.querySelectorAll(".left_menu");
    for (var i = 0; i < li.length; i++) {
          var str = li[i].className;
          var patt = /forcus/g;
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
            getalert();
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
            getalert();
          } else{
            alert("dang o chanel list");
          };
          break;    
    }

};
               

function getalert(e){
    var e=window.event || e;
  var cl = document.querySelectorAll(".chanel");
  cl[0].className += " forcus";
}



function menu(e,n){
  var li = document.querySelectorAll(".left_menu");
  if (e == "up") {
    li[n].removeAttribute("class","active");
    n = n-1;
    li[n].className += " forcus";
  } else{
    li[n].removeAttribute("class","active");
    n = n+1;
    li[n].className += " forcus";
  };
}


// up down app
function app_updown(e){
  var li_chanel = document.querySelectorAll(".chanel");
  for (var j = 0; j < li_chanel.length; j++) {
        var str = li_chanel[j].className;
        var patt = /forcus/g;
        var res = patt.test(str);
    if(res){
      var m = j;
      break;
    };
  }
  if (e == "up") {
    if (m > 2) {
      li_chanel[m].setAttribute("class","chanel");
      m = m-3;
      li_chanel[m].className += " forcus";
    };
  } else{
    if (m < 9) {
      li_chanel[m].setAttribute("class","chanel");
      m = m+3;
      li_chanel[m].className += " forcus";
    };
  };
}


// left right app
function app_leftright(e){
  var li_chanel = document.querySelectorAll(".chanel");
  for (var j = 0; j < li_chanel.length; j++) {
        var str = li_chanel[j].className;
        var patt = /forcus/g;
        var res = patt.test(str);
    if(res){
      var m = j;
      break;
    };
  }
  if (e == "right") {
    if (m != li_chanel.length-1 ) {
      li_chanel[m].setAttribute("class","chanel");
      m = m+1;
      li_chanel[m].className += " forcus";
    };
  } else{
    if (m == 0) {
      global_position = 0;
    } else{
      li_chanel[m].setAttribute("class","chanel");
      m = m-1;
      li_chanel[m].className += " forcus";
    };
    
  };
}
