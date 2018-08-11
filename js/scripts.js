document.addEventListener('DOMContentLoaded', () => { setTimeout(() => { document.querySelector('body').className = 'loaded';}, 0)}, false);

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
 
 
  
const body = document.querySelector('body');
const dragDiv = body.querySelector('div#drag-scroll');
const dragUl = dragDiv.querySelector('ul');

const demoSiteInfoDiv = body.querySelector('div#siteinfo');
const demoSiteTitle = demoSiteInfoDiv.querySelector('h1.sitetitle');
const demoSiteLangs = demoSiteInfoDiv.querySelector('p.sitelangs');
const demoSiteDesc = demoSiteInfoDiv.querySelector('p.sitedesc');

function ajax(action, arg) {
  var hr = new XMLHttpRequest();
  var url = "http://demo.stenmark.eu/sites/sitesapi.php";
  if (action == 'allsites') { var vars = "allsites";}
  hr.open("POST", url, true);
  hr.withCredentials = true;
  hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  hr.onreadystatechange = function() {
    if(hr.readyState == 4 && hr.status == 200) {
      var return_data = hr.responseText;
      // Ajax returns
      if (action == 'allsites') {
        display_sites(return_data);
      }
    }
  }
  hr.send(vars);
}

function display_sites(json) {
  sitesObj = JSON.parse(json);
  var sites = '';
  for (var i = 0; i<sitesObj.length; i++) {
    sites += '<li>';
    sites += '<div class="demo-site" id="'+sitesObj[i].dir+'" style="background-image: url('+sitesObj[i].img+')">';
    sites += '<h1 class="a-reveal">'+sitesObj[i].title+'</h1>';
    sites += '<p class="a-reveal">'+sitesObj[i].descs.fi.short+'</p>';
    sites += '<div class="site-info-link">';
    sites += '<a class="a-reveal">info</a>';
    sites += '</div>';
    sites += '</div>';
    sites += '</li>';
  }
  dragUl.innerHTML = sites;
  
  var lis = dragUl.children;
  
  for (let i = 0; i<lis.length; i++) {
    lis[i].addEventListener('click', (e) => {
      if(e.target.tagName == 'H1') {
        window.location.href = sitesObj[i].url;
      } else if (e.target.tagName == 'A') {
        demoSiteTitle.innerHTML = 
          '<a href="'+sitesObj[i].url+'">'+
            sitesObj[i].title;
          +'</a>';
          
        demoSiteLangs.textContent = sitesObj[i].languages.toString();
        demoSiteDesc.textContent = sitesObj[i].descs.fi.long;
        demoSiteInfoDiv.classList.add('display-block');
      }
    });
  }
}

ajax('allsites', null);


dragUl.addEventListener('wheel', (e) => {
  if (e.deltaY < 0) {
    e.preventDefault();
    dragUl.scrollLeft -= 50;
  }
  if (e.deltaY > 0) {
    e.preventDefault();
    dragUl.scrollLeft += 50;
  }
});

let isDown = false;
let startX;
let scrollLeft;

dragUl.addEventListener('mousedown', (e) => {
  e.preventDefault();
  isDown = true;
  dragUl.classList.add('active')
  startX = e.pageX - dragUl.offsetLeft;
  scrollLeft = dragUl.scrollLeft;
});
dragUl.addEventListener('mouseleave', (e) => {
  isDown = false;
  dragUl.classList.remove('active')
});
dragUl.addEventListener('mouseup', (e) => {
  isDown = false;
  dragUl.classList.remove('active')
});
dragUl.addEventListener('mousemove', (e) => {
  if(!isDown) return;
  e.preventDefault();
  const x = e.pageX - dragUl.offsetLeft;
  const walk = (x - startX) * 2;
  dragUl.scrollLeft = scrollLeft - walk;
});
















  

  
  
