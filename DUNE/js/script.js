// function handleArrowKeys(evt) {
//     evt = (evt) ? evt : ((window.event) ? event : null);
//     if (evt) {
//         var top = getElementStyle("moveableElem", "top", "top");
//         var left = getElementStyle("moveableElem", "left", "left");
//         var elem = document.getElementById("moveableElem");
//         switch (evt.keyCode) {
//             case 37:
//                 elem.style.left = (parseInt(left) - 5) + "px";
//                  alert("trai");
//                 break;    
//             case 38:
//                 elem.style.top = (parseInt(top) - 5) + "px";
//                  alert("phai");
//                 break;    
//             case 39:
//                 elem.style.left = (parseInt(left) + 5) + "px";
//                  alert("left");
//                 break;    
//             case 40:
//                 elem.style.top = (parseInt(top) + 5) + "px";
//                  alert("top");
//                 break;    
//          }
//     }
// }

// function doSomething(e) {
//     var code;
//     if (!e) var e = window.event;
//     if (e.keyCode) code = e.keyCode;
//     else if (e.which) code = e.which;
//     var character = String.fromCharCode(code);
//     alert('Character was ' + character);
// }

document.onKeyDown = function(event) {
     if (!event)
          event = window.event;
     var code = event.keyCode;
     if (event.charCode && code == 0)
          code = event.charCode;
     switch(code) {
          case 37:
              alert("trai");
              break;
          case 38:
              alert("trai");
              // Key up.
              break;
          case 39:
              alert("trai");
              // Key right.
              break;
          case 40:
              alert("trai");
              // Key down.
              break;
     }
     event.preventDefault();
};