$(document).ready(function(){
	var v3=document.getElementById("f3");
    var v1=document.getElementById("f1");
var v2=document.getElementById("f2");
v2.hidden=true;
v3.hidden=true;
	$(" .next").click(function(){

        v1.hidden=true;
        v2.hidden=false;
	});
    $(" .Next").click(function(){

        v2.hidden=true;
        v3.hidden=false;
	});

	$(" .previous").click(function(){
        v1.hidden=false;
        v2.hidden=true;

	});
	$(" .Previous").click(function(){
        v2.hidden=false;
        v3.hidden=true;
	});


});

