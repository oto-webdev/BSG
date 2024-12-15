(() => {
  // Cache DOM elements
  const openNavMenu = document.querySelector(".open-nav-menu");
  const closeNavMenu = document.querySelector(".close-nav-menu");
  const navMenu = document.querySelector(".nav-menu");
  const menuOverlay = document.querySelector(".menu-overlay");
  const header = document.querySelector(".header");
  const scrollToTopBtn = document.getElementById("scrollToTopBtn");
  const modal = document.getElementById("videoModal");
  const iframe = document.getElementById("videoIframe");
  const openModalBtns = document.querySelectorAll(".openModalBtn");
  const closeModalBtn = document.getElementById("closeModalBtn");

  const mediaSize = 1296;
  let isScrolling;

  // Navigation Menu Toggle
  const toggleNav = () => {
    navMenu.classList.toggle("open");
    menuOverlay.classList.toggle("active");
    document.body.classList.toggle("hidden-scrolling");
  };

  openNavMenu.addEventListener("click", toggleNav);
  closeNavMenu.addEventListener("click", toggleNav);
  menuOverlay.addEventListener("click", toggleNav);

  navMenu.addEventListener("click", (event) => {
    if (
      event.target.hasAttribute("data-toggle") &&
      window.innerWidth <= mediaSize
    ) {
      event.preventDefault();
      const menuItemHasChildren = event.target.parentElement;

      // Collapse other active submenus
      if (menuItemHasChildren.classList.contains("active")) {
        collapseSubMenu();
      } else {
        if (navMenu.querySelector(".menu-item-has-children.active")) {
          collapseSubMenu();
        }
        menuItemHasChildren.classList.add("active");
        menuItemHasChildren.querySelector(".sub-menu").style.maxHeight =
          menuItemHasChildren.querySelector(".sub-menu").scrollHeight + "px";
      }
    }
  });

  const collapseSubMenu = () => {
    const activeItem = navMenu.querySelector(".menu-item-has-children.active");
    if (activeItem) {
      activeItem.querySelector(".sub-menu").style.maxHeight = null;
      activeItem.classList.remove("active");
    }
  };

  const resizeFix = () => {
    if (window.innerWidth > mediaSize) {
      if (navMenu.classList.contains("open")) toggleNav();
      collapseSubMenu();
    }
  };

  window.addEventListener("resize", resizeFix);

  // Header Sticky and Scroll Events
  const stickyOffset = header.offsetTop;

  const onScroll = () => {
    const scrollY = window.scrollY;

    // Sticky header
    if (window.innerWidth >= mediaSize) {
      if (scrollY > stickyOffset) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    } else {
      header.classList.remove("sticky");
    }

    // Scroll to top button visibility
    if (scrollY > 50) {
      scrollToTopBtn.classList.add("show");
    } else {
      scrollToTopBtn.classList.remove("show");
    }
  };

  window.addEventListener("scroll", () => {
    clearTimeout(isScrolling);
    isScrolling = setTimeout(onScroll, 100); // Debounce
  });

  scrollToTopBtn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });

  // Modal Functionality
  openModalBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      iframe.src = btn.getAttribute("data-video");
      modal.style.display = "flex";
    });
  });

  const closeModal = () => {
    modal.style.display = "none";
    iframe.src = "";
  };

  closeModalBtn.addEventListener("click", closeModal);
  window.addEventListener("click", (event) => {
    if (event.target === modal) closeModal();
  });

  // Swiper Initialization
  document.addEventListener("DOMContentLoaded", () => {
    new Swiper(".swiper-container", {
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
        delay: 10000,
        disableOnInteraction: false,
      },
      effect: "slide",
      speed: 500,
    });
  });
})();