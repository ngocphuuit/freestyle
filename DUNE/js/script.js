//window.onload = function(){
  window.handleArrowKeys = function(e){
  var e=window.event || e;
  var clas = document.querySelectorAll(".forcus");
  var li = document.querySelectorAll(".left_menu");
  var m = li[2].querySelectorAll(".forcus");
  for (var i = 0; i < li.length; i++) {
        var str = li[i].className;
        var patt = /forcus/g;
        var res = patt.test(str);
    if(res){
      var n = i;
      break;
    }
  }    //var top = getElementStyle("moveableElem", "top", "top");
        //var left = getElementStyle("moveableElem", "left", "left");
        //var elem = document.getElementById("moveableElem");
        switch (e.keyCode) {
            case 37: //left
                //elem.style.left = (parseInt(left) - 5) + "px";
                 //alert("trai");
                 alert(clas);
                break;    
            case 38: //up
                if (n == 0) {
                  alert(n);
                  break;
                } else{
                  //alert("sao vay");
                  li[n].setAttribute("class","left_menu");
                  n = n-1;
                  li[n].className += " forcus";
                };
                //elem.style.top = (parseInt(top) - 5) + "px";
                 //alert(li.length);
                break;    
            case 39: //right
               // elem.style.left = (parseInt(left) + 5) + "px";
                 alert(n);
                break;    
            case 40: //down
                //elem.style.top = (parseInt(top) + 5) + "px";
                 //alert(li[2].className);
                 if (n == li.length-1) {
                  alert(n);
                  break;
                } else{
                  //alert("sao vay");
                  li[n].setAttribute("class","left_menu");
                  n = n+1;
                  li[n].className += " forcus";
                };
                break;
          }
    }
//}
//setAttribute

// function doSomething(e) {
//     var code;
//     if (!e) var e = window.event;
//     if (e.keyCode) code = e.keyCode;
//     else if (e.which) code = e.which;
//     var character = String.fromCharCode(code);
//     alert('Character was ' + character);
// }

// document.onKeyDown = function(event) {
//      if (!event)
//           event = window.event;
//      var code = event.keyCode;
//      if (event.charCode && code == 0)
//           code = event.charCode;
//      switch(code) {
//           case 37:
//               alert("trai");
//               break;
//           case 38:
//               alert("trai");
//               // Key up.
//               break;
//           case 39:
//               alert("trai");
//               // Key right.
//               break;
//           case 40:
//               alert("trai");
//               // Key down.
//               break;
//      }
//      event.preventDefault();
// };