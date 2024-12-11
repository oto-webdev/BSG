(() => {
  const openNavMenu = document.querySelector(".open-nav-menu"),
    closeNavMenu = document.querySelector(".close-nav-menu"),
    navMenu = document.querySelector(".nav-menu"),
    menuOverlay = document.querySelector(".menu-overlay"),
    mediaSize = 1920;

  openNavMenu.addEventListener("click", toggleNav);
  closeNavMenu.addEventListener("click", toggleNav);
  menuOverlay.addEventListener("click", toggleNav);

  function toggleNav() {
    navMenu.classList.toggle("open");
    menuOverlay.classList.toggle("active");
    document.body.classList.toggle("hidden-scrolling");
  }
  navMenu.addEventListener("click", (event) => {
    if (
      event.target.hasAttribute("data-toggle") &&
      window.innerWidth <= mediaSize
    ) {
      event.preventDefault();
      const menuItemHasChildren = event.target.parentElement;
      if (menuItemHasChildren.classList.contains("active")) {
        collapseSubMenu();
      } else {
        if (navMenu.querySelector(".menu-item-has-children.active")) {
          collapseSubMenu();
        }
        menuItemHasChildren.classList.add("active");
        const subMenu = menuItemHasChildren.querySelector(".sub-menu");
        subMenu.style.maxHeight = subMenu.scrollHeight + "px";
      }
    }
  });
  function collapseSubMenu() {
    navMenu
      .querySelector(".menu-item-has-children.active .sub-menu")
      .removeAttribute("style");
    navMenu
      .querySelector(".menu-item-has-children.active")
      .classList.remove("active");
  }
  function resizeFix() {
    if (navMenu.classList.contains("open")) {
      toggleNav();
    }
    if (navMenu.querySelector(".menu-item-has-children.active")) {
      collapseSubMenu();
    }
  }

  window.addEventListener("resize", function () {
    if (this.innerWidth > mediaSize) {
      resizeFix();
    }
  });
})();

const openNavMenu = document.querySelector('.open-nav-menu'); 

window.addEventListener('scroll', () => {
  if (window.scrollY > 320) {
    openNavMenu.style.backgroundColor = "#000300"; 
  } else {
    openNavMenu.style.backgroundColor = "";
  }
});

// swiper
document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper(".swiper-container", {
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    effect: "slide",
    speed: 900,
  });
});

/* modal */
const modal = document.getElementById('videoModal');
const iframe = document.getElementById('videoIframe');
const openModalBtns = document.querySelectorAll('.openModalBtn'); 
const closeModalBtn = document.getElementById('closeModalBtn');

openModalBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    const videoSrc = btn.getAttribute('data-video'); 
    modal.style.display = 'flex';
    iframe.src = videoSrc; 
  });
});

closeModalBtn.addEventListener('click', () => {
  modal.style.display = 'none';
  iframe.src = '';
});

window.addEventListener('click', (event) => {
  if (event.target === modal) {
    modal.style.display = 'none';
    iframe.src = ''; 
  }
});

//scroll to top btn
const scrollToTopBtn = document.getElementById("scrollToTopBtn");

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    scrollToTopBtn.classList.add("show");
  } else {
    scrollToTopBtn.classList.remove("show");
  }
}

window.onscroll = scrollFunction;

scrollToTopBtn.addEventListener("click", function () {
  window.scrollTo({ top: 0, behavior: "smooth" });
});
