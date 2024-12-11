<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <img src="../images/2.jpg" alt="Slide 1" />
      <div class="slide-content">
        <a href="javascript:void(0);" class="openModalBtn" data-video="https://www.youtube.com/embed/-o0SYzWpwb4">
          <i class="fa-solid fa-circle-play"></i>
        </a>
      </div>
    </div>
    <div class="swiper-slide">
      <img src="../images/3.jpg" alt="Slide 2" />
      <div class="slide-content">
        <a href="javascript:void(0);" class="openModalBtn" data-video="https://www.youtube.com/embed/adhaMoxl5L8">
          <i class="fa-solid fa-circle-play"></i>
        </a>
      </div>
    </div>
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>

<div id="videoModal" class="modal">
  <div class="modal-content">
    <span id="closeModalBtn" class="close"></span>
    <iframe id="videoIframe" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>
