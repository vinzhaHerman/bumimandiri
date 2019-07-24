<div class="main-wrapper">
<div class="home-main-wrap">
<body>
    <!-- -----------------------------fullscreen blue overlay------------------------------------------------ -->
    <div class="fullscreen-bg-container">
        <div class="fullscreen-overlay"></div>
        <div class="home-middle-text-container">
            <div class="home-middle-text-title">BUMI MANDIRI</div>
            <div class="home-middle-text-subtitle">Leadership - Training - Adventure</div>
            <div>Bumi Mandiri Center (BMC)  adalah pusat pelatihan yang menyatu terpadu dengan kegiatan wisata alam. Terletak di kaki Gunung Gede – Pangrango di kawasan Situgunung, Cisaat-Sukabumi, Jawa Barat, BMC dibangun di suatu area yang bercontour bukit dan lembah dengan 3 (tiga) sungai di dalamnya. Udara yang sejuk karena berada di ketinggian 740 m di atas permukaan laut, gemericik Sungai Cisaranten, Sungai Cigunung dan Sungai Cibaba, serta suasana persawahan dan pedesaan yang alami, juga menjadikan BMC sebagai kawasan untuk rehat sejenak kembali ke alam pedesaan  pegunungan nan asri.
            </div>
        </div>
    </div>
    <!-- ---------------------------END fullscreen blue overlay---------------------------------------------- -->

    <div class="home-content-wrapper">

        <!-- --------------------------box buat artikel/promosi--------------------------------------------- -->


        <div class="middle-title">ARTIKEL</div>
        <div class="box-slider-container">
            <?php
                function word_limit($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
                }
                foreach(array_slice($promosi->result(), 0, 3) as $pro ):
            ?>
            <div class="box-container">
                <img class="box-content box-img" src="<?php echo base_url();?>upload/promosi/<?php echo $pro->gambar_post?>" alt="">
                <div class="box-content box-title"><?php echo $pro->judul_post?></div>
                <div class="box-content box-text"><?php echo word_limit($pro->isi_post, 10);?></div>
            </div>
            <?php endforeach; ?>
            <!-- <div class="box-container">
                <img class="box-content box-img" src="<?php echo base_url();?>assets/img/run.jpg" alt="">
                <div class="box-content box-title">BLOCK TITLE</div>
                <div class="box-content box-text">Lorem ipsum dolor sit amet, consectetur elait. Iusto eveniet fugiat harum quidem quibusdam esse</div>
            </div>
            <div class="box-container">
                <img class="box-content box-img" src="<?php echo base_url();?>assets/img/kids.jpg" alt="">
                <div class="box-content box-title">BLOCK TITLE</div>
                <div class="box-content box-text">Lorem ipsum dolor sit amet, consectetur elait. Iusto eveniet fugiat harum quidem quibusdam esse</div>
            </div> -->
        </div>
        <!-- ------------------------END box buat artikel/promosi------------------------------------------- -->





        <div class="middle-title">DISARANKAN UNTUK ANDA</div>





        <!-- --------------------------box buat artikel/promosi--------------------------------------------- -->        
        <div class="box-slider-container">
            <?php
                foreach(array_slice($artikel->result(), 0, 3) as $art ):
            ?>
            <div class="box-container">
                <img class="box-content box-img" src="<?php echo base_url();?>upload/artikel/<?php echo $art->gambar_post?>" alt="">
                <div class="box-content box-title"><?php echo $art->judul_post?></div>
                <div class="box-content box-text"><?php echo word_limit($art->isi_post, 10);?></div>
            </div>
            <?php endforeach; ?>
            <!-- <div class="box-container">
                <img class="box-content box-img" src="<?php echo base_url();?>assets/img/lake.jpg" alt="">
                <div class="box-content box-title">BLOCK TITLE</div>
                <div class="box-content box-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto eveniet fugiat harum quidem quibusdam esse</div>
            </div>
            <div class="box-container">
                <img class="box-content box-img" src="<?php echo base_url();?>assets/img/people.jpg" alt="">
                <div class="box-content box-title">BLOCK TITLE</div>
                <div class="box-content box-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto eveniet fugiat harum quidem quibusdam esse</div>
            </div> -->
        </div>
        <!-- ------------------------END box buat artikel/promosi------------------------------------------- -->





        <div class="cutomer-reviews-container">
            <section class="center slider">
                <?php
                    foreach(array_slice($testimoni->result(), 0, 3) as $tes ):
                ?>
                <div class="slider-panel">
                    <div class="ball"></div>
                    <div class="customer-slider-name"><?php echo $tes->summary?></div>
                    <div class="slider-text"><?php echo $tes->paragraph?></div>
                </div>
                <?php endforeach; ?>
                <div class="slider-panel">
                    <div class="ball"></div>
                    <div class="customer-slider-name">Reviewer name here</div>
                    <div class="slider-text">Lorem ipsum dolor sit amet, conse adipiscing elitsed do eiusmod Lorem ipsum dolor sit amet, conse adipiscing elitsed do eiusmod</div>
                </div>
                <div class="slider-panel">
                    <div class="ball"></div>
                    <div class="customer-slider-name">Reviewer name here</div>
                    <div class="slider-text">Lorem ipsum dolor sit amet, conse adipiscing elitsed do eiusmod Lorem ipsum dolor sit amet, conse adipiscing elitsed do eiusmod</div>
                </div>
                <div class="slider-panel">
                    <div class="ball"></div>
                    <div class="customer-slider-name">Reviewer name here</div>
                    <div class="slider-text">Lorem ipsum dolor sit amet, conse adipiscing elitsed do eiusmod Lorem ipsum dolor sit amet, conse adipiscing elitsed do eiusmod</div>
                </div>
                <div class="slider-panel">
                    <div class="ball"></div>
                    <div class="customer-slider-name">Reviewer name here</div>
                    <div class="slider-text">Lorem ipsum dolor sit amet, conse adipiscing elitsed do eiusmod Lorem ipsum dolor sit amet, conse adipiscing elitsed do eiusmod</div>
                </div>
                <div class="slider-panel">
                    <div class="ball"></div>
                    <div class="customer-slider-name">Reviewer name here</div>
                    <div class="slider-text">Lorem ipsum dolor sit amet, conse adipiscing elitsed do eiusmod Lorem ipsum dolor sit amet, conse adipiscing elitsed do eiusmod</div>
                </div>
            </section>
        </div>





        
    </div>
</div>
</div>