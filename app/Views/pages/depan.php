<!-- mengambil template -->
<?= $this->extend('layout/template'); ?>
<!-- menghubungkan template dengan file -->
<?= $this->section('content'); ?>


<div class="wrapper">
    <!-- untuk home -->
    <section id="home">
        <img src="https://image.freepik.com/free-vector/tiny-cute-children-learning-coding_74855-14175.jpg" />

        <div class="kolom">
            <p class="deskripsi">Belajar Coding #dirumahaja</p>
            <h2>Tetap Sehat, Tetap Semangat</h2>
            <p>Kami Siap Melayani Anda</p>
            <p><a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
        </div>


    </section>

    <!-- untuk courses -->
    <section id="courses">
        <div class="kolom">
            <p class="deskripsi">You Will Need This</p>
            <h2>Online Courses</h2>
            <p>Dimasa pandemi sekarang jangan membuat kamu menjadi tidak produktif. Coding School hadir untuk kamu yang khawatir untuk bepergian tapi ingin tetap belajar</p>
            <p>Diluar dari jam belajar para tutor kami juga akan siap 24 jam membantu kamu jika ada pertanyaan atau kesulitan</p>
            <p><a href="" class="tbl-biru">Pelajari Lebih Lanjut</a></p>
        </div>
        <img src="https://img.freepik.com/free-vector/teaching-students-online-internet-learning-computer-programming-online-it-courses-best-online-it-training-online-certification-courses-concept_335657-194.jpg?size=626&ext=jpg" />
    </section>

    <!-- untuk tutors -->
    <section id="tutors">
        <div class="tengah">
            <div class="kolom">
                <p class="deskripsi">Our Top Tutors</p>
                <h2>Tutors</h2>
                <p>Kami memiliki tutor yang handal di dunia technology, yang siap membantu kamu belajar</p>
            </div>

            <div class="tutor-list">
                <div class="kartu-tutor">
                    <img src="img/misbah.jpeg" class="rounded-circle">
                    <p>Moh Misbah</p>
                </div>
                <div class="kartu-tutor">
                    <img src="img/dinda.jpeg" class="rounded-circle">
                    <p>Adinda N L</p>
                </div>
                <div class="kartu-tutor">
                    <img src="img/nur.jpeg" class="rounded-circle">
                    <p>Nur Hasanah</p>
                </div>
                <div class="kartu-tutor">
                    <img src="img/rival.jpeg" class="rounded-circle">
                    <p>Mohamad Rival</p>
                </div>

            </div>
        </div>
    </section>

    <!-- partners -->
    <section id="partners">
        <div class="tengah">
            <div class="kolom">
                <p class="deskripsi">Out Top Partners</p>
                <h2>Partners</h2>
                <p>Universitas yang telah bekerjasama dengan kami</p>
            </div>

            <div class="partner-list">
                <div class="kartu-partner">
                    <img src="/img/ubsi.png" />
                </div>
                <div class="kartu-partner">
                    <img src="https://www.academicindonesia.com/wp-content/uploads/2016/10/Logo-University-of-Oxford.jpg" />
                </div>
                <div class="kartu-partner">
                    <img src="/img/columbia.png" alt="">
                </div>
                <div class="kartu-partner">
                    <img src="https://upload.wikimedia.org/wikipedia/id/6/65/CardSeal-1.gif" />
                </div>
                <div class="kartu-partner">
                    <img src="http://2.bp.blogspot.com/-6EyxssEVFHo/UdNrbfCKtJI/AAAAAAAAAFo/BXDB-I84Ruc/s225/harvard.jpeg" />
                </div>

            </div>
        </div>
    </section>
</div>

<div id="contact">
    <div class="wrapper">
        <div class="footer">
            <div class="footer-section">
                <h3>Coding School</h3>
                <p>Coding School adalah sekolah informal technology secara online yang telah mencetak talenta digital selama lebih dari 5 tahun</p>
            </div>
            <div class="footer-section">
                <h3>About</h3>
                <p>Bergabunglah dengan newsletter kami untuk mendapatkan informasi dan penawaran menarik lainnya</p>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <p>Jl. Kapuk Raya No 35 15610</p>
                <br>021-4524343 (Telepon)</br>
                <br>081368321293 (Whatsapp)</br>
            </div>
            <div class="footer-section">
                <h3>Media Social</h3>
                <p><img src="/img/youtube.svg" alt="youtube">Coding_School Channel</p>
                <p><img src="/img/instagram.svg" alt="instagram">@Codingschool</p>
                <p><img src="/img/facebook.svg" alt="facebook">Coding Schooll</p>
                <p><img src="/img/twitter.svg" alt="twitter">@Codingschool</p>


            </div>
        </div>
    </div>
</div>

<div id="copyright">
    <div class="wrapper">
        &copy; 2021. <b>Coding School.</b> All Right Reserved.
    </div>
</div>
<?= $this->endsection(); ?>