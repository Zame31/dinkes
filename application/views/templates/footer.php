<div id="footer" class="bg row">
  <div class="container">
    <div class="grid_4">
      <div class="title">
        pengumuman
      </div>
      <div class="content">
        <a href="#">LELANG UMUM PASCAKUALIFIKASI PERALATAN MEUBELAIR KANTOR</a>
        <a href="#">PENGUMUMAN SAYEMBARA PEMBUATAN LOGO DEN</a>
        <a href="#">LELANG UMUM PASCAKUALIFIKASI PERALATAN MEUBELAIR KANTOR</a>
        <a href="#">PENGUMUMAN SAYEMBARA PEMBUATAN LOGO DEN</a>
      </div>
    </div>
    <div class="grid_4">
      <div class="title">
        album foto kegiatan
      </div>
      <div class="galeri">
        <a href="<?php echo site_url('page/album'); ?>" class="gambar">
          <img src="<?php echo base_url() ?>assets/images/gam1.jpg" alt="" />
        </a>
        <a href="<?php echo site_url('page/album'); ?>" class="gambar">
          <img src="<?php echo base_url() ?>assets/images/gam2.jpg" alt="" />
        </a>
        <a href="<?php echo site_url('page/album'); ?>" class="gambar">
          <img src="<?php echo base_url() ?>assets/images/gam3.jpg" alt="" />
        </a>
        <a href="<?php echo site_url('page/album'); ?>" class="gambar">
          <img src="<?php echo base_url() ?>assets/images/gam1.jpg" alt="" />
        </a>

      </div>
    </div>
    <div class="grid_3">
      <div class="title">
        kontak
      </div>
      <div class="kontak">
        <h3>dinas kesehatan kota bandung</h3>
        <h4>Jl Supratman No 73 Citarum Bandung,</h4>
        <h5>Tel : 022-7202210 · (022) 4203752</h5>
      </div>
      <div class="medsos">
        <a href="https://twitter.com/bandung_dinkes" class="fa fa-twitter"></a>
        <a href="https://www.facebook.com/pages/Dinas-Kesehatan-Kota-Bandung/211697378979990?fref=ts" class="fa fa-facebook"></a>
        <a href="mailto:dinkes_kotabandung@yahoo.co.id" class="fa fa-envelope"></a>
      </div>
    </div>
  </div>

</div>

<!--========================================================
                          FOOTER
=========================================================-->

<footer id="footer" class="bg2">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <p class="info text_4 color_4">
                    © <span id="copyright-year"></span> | <a href="#">Dinas Kesehatan Kota Bandung</a>
                </p>
            </div>
        </div>
    </div>
</footer>

  <script src="<?php echo base_url() ?>assets/js/jquery.cookie.js"></script>
  <script src="<?php echo base_url() ?>assets/js/device.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/tmstickup.js"></script>
  <script type="text/javascript">
    $(window).load(function () {
        if ($('html').hasClass('desktop')) {
            $('#stuck_container').TMStickUp({
            })
        }
    });
  </script>
  <script src="<?php echo base_url() ?>assets/js/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.ui.totop.js"></script>
  <script type="text/javascript">
    $(function () {
        $().UItoTop({ easingType: 'easeOutQuart' });
    });
  </script>
  <script src="<?php echo base_url() ?>assets/js/mousewheel.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.simplr.smoothscroll.min.js"></script>
  <script type="text/javascript">
  $(function () {
      if ($('html').hasClass('desktop')) {
          $.srSmoothscroll({
              step: 150,
              speed: 100
          });
      }
  });
  </script>
  <script src="<?php echo base_url() ?>assets/js/superfish.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.mobilemenu.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.unveil.js"></script>
  <script src="<?php echo base_url() ?>assets/js/script.js"></script>


</body>
</html>
