document.addEventListener('DOMContentLoaded', () => { setTimeout(() => { document.querySelector('body').className = 'loaded';}, 1500)}, false);

let width = 10;


const htmlp = document.getElementsByClassName("html")[1].getAttribute('value');
const cssp = document.getElementsByClassName("css")[1].getAttribute('value');
const jsp = document.getElementsByClassName("js")[1].getAttribute('value');
const phpp = document.getElementsByClassName("php")[1].getAttribute('value');
const ajaxp = document.getElementsByClassName("ajax")[1].getAttribute('value');
const uplink = document.getElementById("uplink");
const skillspos = document.getElementById("skills").offsetTop;

const prog = {
	html:htmlp,
	css:cssp,
	js:jsp,
	php:phpp,
	ajax:ajaxp
}


function scrollact(){
	console.log(window.pageYOffset);
	if(window.pageYOffset > skillspos - 100) {
	for(var propt in prog){
		let width = prog[propt];
		setTimeout(move(propt, width), 0);
	}
}
    if(window.pageYOffset>50){
		uplink.style.display = "inline";
		let op = window.pageYOffset/2500;
		if(op < 0.5){
			uplink.style.opacity = op;
		} else {
			uplink.style.opacity = 0.5;
		}
	} else {
		uplink.style.display = "none";
	}
}


function round5(x) {
    return Math.ceil(x/5)*5;
}

const move = (lang, prog) => {
	let skill = document.getElementsByClassName(lang)[0];
	let pvalue = document.getElementsByClassName(lang)[1];
	const id = setInterval(frame, 100);
	function frame() {
		if (width >= prog) {
		  clearInterval(id);
		} else {
		  width++; 
		  skill.style.width = width + '%'; 
		  pvalue.innerHTML = round5(width) + '%';
		}
	}
}

window.onscroll=scrollact

document.addEventListener('wheel',function (event){
  if (event.deltaY > 0) {
    event.preventDefault();
    smoothScroll(document.documentElement,100,100)
  }
})

function smoothScroll (domElement,pixel,delay) {
  const intervalToRepeat = 15;
  const step = (intervalToRepeat * pixel) / delay;
  if ( step < pixel) {
    domElement.scrollTop += step;
    setTimeout(function (){
      smoothScroll(domElement,pixel - step,delay)
    },intervalToRepeat);
  }
}

$(document).ready(function(){
	const scrollOffset = 40;
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top - scrollOffset
      }, 800, function(){

        window.location.hash = hash - scrollOffset;
      });
    }
  });
});