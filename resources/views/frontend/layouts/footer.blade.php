<div class="footer">
      <p>Copyright © 2021 DG Informatic, Developed by Akash upraity & Anuj Sharma All Rights Reserved. 
          <br>Design: <a href="{{url('/home')}}" target="_parent" title="IT Solutions ">DG Informatic</a></p>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{url('frontend/js/isotope.min.js')}}"></script>
    <script src="{{url('frontend/js/owl-carousel.js')}}"></script>
    <script src="{{url('frontend/js/lightbox.js')}}"></script>
    <script src="{{url('frontend/js/tabs.js')}}"></script>
    <script src="{{url('frontend/js/video.js')}}"></script>
    <script src="{{url('frontend/js/slick-slider.js')}}"></script>
    <script src="{{url('frontend/js/custom.js')}}"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</body>
</html>