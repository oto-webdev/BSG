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
    effect: "slide",
    speed: 1250,
  });
});
