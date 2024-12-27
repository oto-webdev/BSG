// Modal Functionality
document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("videoModal");
  const iframe = document.getElementById("videoIframe");
  const openModalBtns = document.querySelectorAll(".openModalBtn");
  const closeModalBtn = document.getElementById("closeModalBtn");

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
  new Swiper(".swiper-container", {
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: false,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    effect: "fade",
    speed: 1250,
  });
});

//scroll to top
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
