         <!-- ======= Pricing Section ======= -->
         <section id="membership" class="pricing">
             <div class="container" data-aos="fade-up">

                 <div class="section-title">
                     <h2>Keanggotaan</h2>
                     <p>Bergabunglah Dengan Keanggotaan Kami Untuk Membuka Fitur</p>
                 </div>

                 <div class="row">
                     <?php if (!isset($user['email'])) : ?>
                         <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                             <div class="box">
                                 <h3>Free Member</h3>
                                 <h4><sup>Rp</sup>0<span>per bulan</span><br><span>Keuntungan</span></h4>
                                 <ul>
                                     <li><i class="bx bx-check"></i> Konten Bisnis</li>
                                     <li><i class="bx bx-check"></i> Data Pembeli Dari Seluruh Dunia</li>
                                     <li><i class="bx bx-check"></i> Data Inquiry</li>
                                     <li><i class="bx bx-check"></i> Komunitas Forum</li>
                                     <li><i class="bx bx-check"></i> Informasi Export Dan Import</li>
                                     <!-- <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                                <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li> -->
                                 </ul>
                                 <a href="<?= base_url('auth/register') ?>" class="buy-btn">Bergabung</a>
                             </div>
                         </div>
                     <?php elseif (isset($user['email']) && $user['is_member'] == 0) : ?>
                     <?php endif; ?>

                     <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                         <div class="box">
                             <h3>Keanggotaan Premium </h3>
                             <h4><sup>Rp</sup>150.000<span>per Bulan</span><br><span>Keuntungan</span></h4>
                             <ul>
                                 <li><i class="bx bx-check"></i> Konten Bisnis</li>
                                 <li><i class="bx bx-check"></i> <strong>Detail</strong> Data Buyers Dari Seluruh Dunia</li>
                                 <li><i class="bx bx-check"></i> <strong>Detail</strong> Informasi Data Inquiry</li>
                                 <li><i class="bx bx-check"></i> <strong>Hanya Member</strong> Komunitas Forum</li>
                                 <li><i class="bx bx-check"></i> Informasi Export dan Import</li>
                                 <li><i class="bx bx-check"></i> Pelatihan Ekspor Impor Eksklusif</li>
                             </ul>
                             <?php if (isset($user['email']) && $user['is_member'] == 0) : ?>
                                 <a href="<?= base_url('frontend/membership') ?>" class="buy-btn">Bergabung</a>
                                 <a href="<?= base_url('home') ?>" class="buy-btn">Lain Kali</a>
                             <?php else : ?>
                                 <a href="<?= base_url('auth/register') ?>" class="buy-btn">Bergabung</a>
                             <?php endif; ?>
                         </div>
                     </div>

                     <!-- <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="box">
                            <h3>Gold Member</h3>
                            <h4><sup>Rp</sup>150000<span>per month</span><br><span>benefits</span></h4>
                            <ul>
                                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                            </ul>
                            <a href="#" class="buy-btn">Get Started</a>
                        </div>
                    </div> -->

                 </div>

             </div>
         </section><!-- End Pricing Section -->