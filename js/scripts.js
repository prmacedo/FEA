
function toggleNavBackground() {
  const navbar = document.querySelector('.navbar');
  
  navbar.classList.toggle('bg-transparent');
  navbar.classList.toggle('bg-dark');
}

function scrolledDownNavBackground() {
  const navbar = document.querySelector('.navbar');

  changeNavLogo("down");

  navbar.classList.remove('bg-transparent');
  navbar.classList.remove('navbar-dark');
  navbar.classList.add('bg-light');
  navbar.classList.add('navbar-light');
}

function scrolledUpNavBackground() {
  const navbar = document.querySelector('.navbar');
  
  changeNavLogo("up");
  
  navbar.classList.add('bg-transparent');
  navbar.classList.add('navbar-dark');
  navbar.classList.remove('bg-light');
  navbar.classList.remove('navbar-light');
}

function changeNavLogo(type) {
  const imgs = document.querySelectorAll('.navbar-brand img');

  if(type === "down") {
    imgs[0].classList.add("d-none")
    imgs[1].classList.remove("d-none")
  } else {
    if(type === "up") {
      imgs[0].classList.remove("d-none")
      imgs[1].classList.add("d-none")
    }
  }
  
}

function changeNavState() {
  const scrollY = window.scrollY;
  if(scrollY > 80) {
    scrolledDownNavBackground()
  } else {
    scrolledUpNavBackground()
  }
}

window.addEventListener('load', () => {
  changeNavState()
});

window.addEventListener('scroll', () => {
  changeNavState()
});