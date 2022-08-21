
function f(){  v= document.getElementsByClassName('blankc');
v.item(0).hidden=true;
p=  document.getElementById('prog');
p.style.width='150px';
b= document.getElementsByClassName('balle');
b.item(1).style.backgroundColor='rgba(0, 101, 101, 100)';
document.getElementsByClassName('img').item(0).src='img/fb.png';
document.getElementById("dip").hidden=false;

document.getElementsByClassName('into').item(0).innerHTML="  "+" Formations";

}

function x(){
e();}

function x2(){
    com();}

  function e(){

    v= document.getElementsByClassName('blankc');
    v.item(0).hidden=true;
    p=document.getElementById('prog');
    p.style.width='300px';
    b= document.getElementsByClassName('balle');
b.item(2).style.backgroundColor='rgba(0, 101, 101, 100)';
document.getElementById('img3').src='img/f.png';
document.getElementById("dip").hidden=true;
document.getElementById("ex").hidden=false;
document.getElementsByClassName('into').item(0).innerHTML=" Experience";

}

function com(){

    v= document.getElementsByClassName('blankc');
    v.item(0).hidden=true;
    p=document.getElementById('prog');
    p.style.width='400px';
    b= document.getElementsByClassName('balle');
b.item(3).style.backgroundColor='rgba(0, 101, 101, 100)';
document.getElementById('img4').src='img/ex.png';
document.getElementById("ex").hidden=true;
document.getElementById("comp").hidden=false;
document.getElementsByClassName('into').item(0).innerHTML=" Compitence";

}
function fin(){



}
function changer(){

       document.getElementById('theme-style').href[8]++;
        document.getElementById('theme-style').href=(" assets/css/pillar-"+document.getElementById('theme-style').href[8]+".css");


}
