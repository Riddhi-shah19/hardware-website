//sticky nav
const sectionHero=document.querySelector(".slideshow-container");
const obs=new IntersectionObserver(
  function(entries){
    const ent=entries[0];
    document.body.classList.add("sticky");
   // if (ent.isIntersecting)document.body.classList.remove("sticky");
  },
  {
    root:null,
    threshold:0,
    rootMargin:"-80px",
  }
);
obs.observe(sectionHero);


//make mobile navigation work
const btnNav = document.querySelector(".btn-mobile-nav");
const header = document.querySelector(".header");
btnNav.addEventListener("click", function () {
  header.classList.toggle("nav-open");
});

//set current year

const yearEl = document.querySelector(".year");
const currentYear = new Date().getFullYear();
yearEl.textContent = currentYear;

//slideshow

function first() {
  document.getElementById("slideimage").src = "img/repair1.jpg";
}
function second() {
  document.getElementById("slideimage").src = "img/repair2.jpg";
}
function third() {
  document.getElementById("slideimage").src = "img/repair3.jpg";
}

setInterval(first, 2000);
setInterval(second, 4000);
setInterval(third, 6000);

//smooth scrolling

const allLinks = document.querySelectorAll("a:link");

allLinks.forEach(function (link) {
  link.addEventListener("click", function (e) {
    e.preventDefault();
    const href = link.getAttribute("href");
    //scroll back to top
    if (href == "#")
     
     window.scroll({
      top: 0, 
      left: 0, 
      behavior: 'smooth'
    });
    //scroll to other links
    if (href !== "#" && href.startsWith("#")) {
      const sectionEl = document.querySelector(href);
      sectionEl.scrollIntoView({ behavior:"smooth"});
    }

    if(href!=="#" && !href.startsWith("#")){
      window.open(link);
    }
  });
});

//read more
const readMore=document.getElementsByClassName('read-more');
const onClick=(event)=>{
  const button=event.target;
  const dataTarget=button.getAttribute('data-target');
  const extracontent=document.getElementById(dataTarget);
button.innerHTML=button.innerHTML==='show less'?'show more':'show less';
extracontent.classList.toggle('show');
}
const attachingEvent=e=>e.addEventListener('click',onClick);
Array.prototype.forEach.call(readMore,attachingEvent);