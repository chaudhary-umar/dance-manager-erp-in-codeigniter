// JavaScript Document
/*
function changeElement(id) {
  var el = document.getElementById(id);
  el.style.color = "red";
  el.style.fontSize = "15px";
  el.style.backgroundColor = "#FFFFFF";
}
*/

function surroundSelection() {

  var span = document.createElement("span");
  //span.style.fontWeight = "bold";

    if (window.getSelection) {
        var sel = window.getSelection();
        if (sel.rangeCount) {
            var range = sel.getRangeAt(0).cloneRange();
            range.surroundContents(span);
            sel.removeAllRanges();
            sel.addRange(range);
        }
    }
	

			span.style.cssFloat='left';	
	}
	
/*
    var span = document.createElement("span");
	if(seEle=="B"){
    span.style.fontWeight = "bold";
	}
	if(seEle=="I"){
    span.style.fontStyle='italic';
	}
	if(seEle=="U"){
    span.style.textDecoration='underline';
	}
    
    if (window.getSelection) {
        var sel = window.getSelection();
        if (sel.rangeCount) {
            var range = sel.getRangeAt(0).cloneRange();
            range.surroundContents(exElements+span);
            //sel.removeAllRanges();
            sel.addRange(range);
        }
    }
*/	




