function iFrameOn(){
	richTextField.document.designMode = 'On';
}
function iBold(){
	richTextField.document.execCommand('bold',false,null); 
}
function iUnderline(){
	richTextField.document.execCommand('underline',false,null);
}
function iStrike(){
	richTextField.document.execCommand('strikeThrough',false,null); 
}
function iClearFormat(){
	richTextField.document.execCommand('removeFormat',false,null);
}
function iSubscript(){
	richTextField.document.execCommand('subscript',false,null);
}
function iSuperscript(){
	richTextField.document.execCommand('superscript',false,null);
}
function iSelectAll(){
	richTextField.document.execCommand('selectAll',false,null);
}

function iincreaseFontSize(){
	richTextField.document.execCommand('increaseFontSize',false,null);
}

function idecreaseFontSize(){
	richTextField.document.execCommand('decreaseFontSize',false,null);
}

function iItalic(){
	richTextField.document.execCommand('italic',false,null); 
}
function ijustifyLeft(){
	richTextField.document.execCommand('justifyLeft',false,null); 
}
function ijustifyCenter(){
	richTextField.document.execCommand('justifyCenter',false,null); 
}
function ijustifyRight(){
	richTextField.document.execCommand('justifyRight',false,null); 
}
function ijustifyFull(){
	richTextField.document.execCommand('justifyFull',false,null); 
}

function iRedo(){
	richTextField.document.execCommand('redo',false,null); 
}
function iUndo(){
	richTextField.document.execCommand('undo',false,null); 
}
function iIndent(){
	richTextField.document.execCommand('indent',false,null); 
}
function iOutdent(){
	richTextField.document.execCommand('outdent',false,null); 
}
function iHeadings(size){
	richTextField.document.execCommand('heading',false,size);
}
function iFontSize(size){
	richTextField.document.execCommand('FontSize',false,size);
}
function iHorizontalRule(){
	richTextField.document.execCommand('inserthorizontalrule',false,null);
}
function iUnorderedList(){
	richTextField.document.execCommand("InsertOrderedList", false,"newOL");
}
function iOrderedList(){
	richTextField.document.execCommand("InsertUnorderedList", false,"newUL");
}
function iForeColor(color){
	richTextField.document.execCommand('ForeColor',false,color);
}
function ibgColor(color){
	richTextField.document.execCommand('backColor',false,color);
}

function iLink(){
	var linkURL = prompt("Enter the URL for this link:", "http://"); 
	richTextField.document.execCommand("CreateLink", false, linkURL);
}
function iUnLink(){
	richTextField.document.execCommand("Unlink", false, null);
}
function iImage(){
	var imgSrc = prompt('Enter image location', '');
    if(imgSrc != null){
        richTextField.document.execCommand('insertimage', false, imgSrc); 
    }
}

function iHTMLEdit(){
	document.getElementById('myTextArea').innerHTML=window.frames['richTextField'].document.body.innerHTML;
	document.getElementById('html').style.display='block';
	
}

function iPreview(){
	document.getElementById('myTextAreaView').innerHTML=window.frames['richTextField'].document.body.innerHTML;
	document.getElementById('preview').style.display='block';
	
}

function submit_form(){
	var theForm = document.getElementById("form2");
	theForm.elements["myTextArea"].value = window.frames['richTextField'].document.body.innerHTML;
	theForm.submit();
}

function iPrintElem(elem)

    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        mywindow.document.write('<html><head><title>my div</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="../main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(window.frames['richTextField'].document.body.innerHTML);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();

        return true;
    }