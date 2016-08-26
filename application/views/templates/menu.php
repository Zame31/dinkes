<header id="header">
    <div id="stuck_container">
        <div class="container">
            <div class="row">
              <div class="grid_12">
                  <div class="brand put-left">
                      <h1>
                          <a href="<?php echo site_url('page/beranda'); ?>">
                              <img src="<?php echo base_url() ?>assets/images/logo.png" alt="Logo"/>
                          </a>
                          <span>dinas kesehatan kota bandung</span>
                      </h1>
                  </div>
                  <nav class="nav put-right">
                      <ul class="sf-menu">

                          <li class="<?php if($this->uri->uri_string() == 'page/beranda') { echo 'current'; } ?>"><a href="<?php echo site_url('page/beranda'); ?>">Beranda</a></li>

                          <li class="<?php if($this->uri->uri_string() == ('page/visi') ||
                                                          uri_string() == ('page/sejarah') ||
                                                          uri_string() == ('page/struktur') ||
                                                          uri_string() == ('page/tugas') ) { echo 'current'; } ?>">
                              <a href="#">Tentang Kami</a>
                              <ul>
                                <li class="<?php if($this->uri->uri_string() == 'page/visi') { echo 'current'; } ?>">
                                  <a href="<?php echo site_url('page/visi'); ?>">Visi dan Misi</a>
                                </li>
                                <li class="<?php if($this->uri->uri_string() == 'page/sejarah') { echo 'current'; } ?>">
                                  <a href="<?php echo site_url('page/sejarah'); ?>">Sejarah Dinas Kesehatan Kota Bandung</a>
                                </li>
                                <li class="<?php if($this->uri->uri_string() == 'page/struktur') { echo 'current'; } ?>">
                                  <a href="<?php echo site_url('page/struktur'); ?>">Struktur Organisasi</a>
                                </li>
                                <li class="<?php if($this->uri->uri_string() == 'page/tugas') { echo 'current'; } ?>">
                                  <a href="<?php echo site_url('page/tugas'); ?>">Tugas pokok dan fungsi</a>
                                </li>
                              </ul>
                          </li>
                          <li><a href="#">Informasi Publik</a></li>
                          <li class="<?php if($this->uri->uri_string() == ('page/undang') ||
                                                          uri_string() == ('page/permenkes') ||
                                                          uri_string() == ('page/perda') ||
                                                          uri_string() == ('page/perwali') ) { echo 'current'; } ?>"><a href="#">Regulasi</a>
                              <ul>
                                <li class="<?php if($this->uri->uri_string() == 'page/undang') { echo 'current'; } ?>"><a href="<?php echo site_url('page/undang'); ?>">Undang undang</a></li>
                                <li class="<?php if($this->uri->uri_string() == 'page/permenkes') { echo 'current'; } ?>"><a href="<?php echo site_url('page/permenkes'); ?>">Permenkes</a>
                                <li class="<?php if($this->uri->uri_string() == 'page/perda') { echo 'current'; } ?>"><a href="<?php echo site_url('page/perda'); ?>">Perda</a>
                                <li class="<?php if($this->uri->uri_string() == 'page/perwali') { echo 'current'; } ?>"><a href="<?php echo site_url('page/perwali'); ?>">Perwali</a>
                                </li>
                            </ul>
                          </li>
                          <li><a href="contacts.html">UPT Dinas</a>
                              <ul>
                                <li><a href="#">laboratorium kesehatan</a></li>
                                <li class="<?php if($this->uri->uri_string() == 'page/puskesmas') { echo 'current'; } ?>"><a href="<?php echo site_url('page/puskesmas'); ?>">Puskesmas</a>
                                <li><a href="#">yankes mobilitas</a>

                                </li>
                            </ul>
                          </li>
                          <li class="<?php if($this->uri->uri_string() == 'page/hubungi') { echo 'current'; } ?>"><a href="<?php echo site_url('page/hubungi'); ?>">Hubungi Kami</a></li>
                      </ul>
                  </nav>
              </div>
            </div>
        </div>
    </div>
</header>
