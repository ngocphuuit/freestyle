window.onload = function(){
  var li = document.querySelectorAll(".left_menu");
  li[2].className += " forcus";
}
//window.onload = function(){
  window.handleArrowKeys = function(e){
  var e=window.event || e;
  var clas = document.querySelectorAll(".forcus");
  var li = document.querySelectorAll(".left_menu");
  var m = document.li[2].querySelectorAll(".forcus");
  for (var i = 0; i < li.length; i++) {
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
                //elem.style.top = (parseInt(top) - 5) + "px";
                 alert(li.length);
                break;    
            case 39: //right
               // elem.style.left = (parseInt(left) + 5) + "px";
                 alert(m.length);
                break;    
            case 40: //down
                //elem.style.top = (parseInt(top) + 5) + "px";
                 alert("top");
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