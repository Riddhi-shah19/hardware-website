const track = document.querySelector(".carousel-track");
const slides = Array.from(track.children);
const nextButton = document.querySelector(".carousel-btn--right");
const prevButton = document.querySelector(".carousel-btn--left");
const dotsNav = document.querySelector(".carousel-nav");
const dots = Array.from(dotsNav.children);
const slideWidth = slides[0].getBoundingClientRect().width;

//arrange slides next to one another
const setSlidePosition = (slide, index) => {
  slide.style.left = slideWidth * index + "px";
};

slides.forEach(setSlidePosition);

const moveToSlide = (track, currentSlide, targetSlide) => {
  track.style.transform = "translateX(-" + targetSlide.style.left + ")";
  currentSlide.classList.remove("current-slide");
  targetSlide.classList.add("current-slide");
};

const updateDots = (currentDot, targetDot) => {
  currentDot.classList.remove("current-slide");
  targetDot.classList.add("current-slide");
};

const hideshowArrows = (slides, prevButton, nextButton, targetIndex) => {
  if (targetIndex === 0) {
    prevButton.classList.add("is--hidden");
    nextButton.classList.remove("is--hidden");
  } else if (targetIndex === slides.length - 1) {
    prevButton.classList.remove("is--hidden");
    nextButton.classList.add("is--hidden");
  } else {
    prevButton.classList.remove("is--hidden");
    nextButton.classList.remove("is--hidden");
  }
};

prevButton.addEventListener("click", (e) => {
  const currentSlide = track.querySelector(".current-slide");
  const prevSlide = currentSlide.previousElementSibling;
  const currentDot = dotsNav.querySelector(".current-slide");
  const prevDot = currentDot.previousElementSibling;
  const prevIndex = slides.findIndex((slide) => slide === prevSlide);
  moveToSlide(track, currentSlide, prevSlide);
  updateDots(currentDot, prevDot);
  hideshowArrows(slides, prevButton, nextButton, prevIndex);
});

nextButton.addEventListener("click", (e) => {
  const currentSlide = track.querySelector(".current-slide");
  const nextSlide = currentSlide.nextElementSibling;
  const currentDot = dotsNav.querySelector(".current-slide");
  const nextDot = currentDot.nextElementSibling;
  const nextIndex = slides.findIndex((slide) => slide === nextSlide);
  moveToSlide(track, currentSlide, nextSlide);
  updateDots(currentDot, nextDot);
  hideshowArrows(slides, prevButton, nextButton, nextIndex);
});

//move to indicator slide

dotsNav.addEventListener("click", (e) => {
  //what indicator was clicked on
  const targetDot = e.target.closest("button");
  if (!targetDot) return;
  const currentSlide = track.querySelector(".current-slide");
  const currentDot = dotsNav.querySelector(".current-slide");
  const targetIndex = dots.findIndex((dot) => dot === targetDot);
  const targetSlide = slides[targetIndex];
  moveToSlide(track, currentSlide, targetSlide);
  updateDots(currentDot, targetDot);
  hideshowArrows(slides, prevButton, nextButton, targetIndex);
});

//sticky nav
const sectionHero=document.querySelector(".slideshow-container");
const obs=new IntersectionObserver(
  function(entries){
    const ent=entries[0];
    if(ent.isIntersecting===false)document.body.classList.add("sticky");
    if (ent.isIntersecting)document.body.classList.remove("sticky");
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