<?php 
    function word_limit($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }
?>

<div class="evhero">
    <img src="<?php echo base_url(); ?>assets/img/chairs_res.jpg" alt="" class="plx-bg">
    <div class="overlay"></div>
</div>
<div class="evhero-intro">
    <h2>Artikel</h2>
    <h4>Page: Artikel</h4>
</div>

<div class="mycontainer">

    <div class="list-container">




        
        <!-- <div class="list-featured">
            <div class="list-subtitle">Featured</div>
            <div class="featured-row">
                <div class="featured-box">
                    <div class="featured-img"></div>
                    <div class="featured-title">Insert Your title here...</div>
                </div>
                <div class="featured-box">
                    <div class="featured-img"></div>
                    <div class="featured-title">Insert Your title here...</div>
                </div>
                <div class="featured-box">
                    <div class="featured-img"></div>
                    <div class="featured-title">Insert Your title here...</div>
                </div>
            </div>
        </div> -->





        <div class="list-row">
            <?php
                // foreach(array_slice($data->result(), 0, 3) as $l ):
                    foreach ($data->result() as $l) :
            ?>
            <div class="list-box-container">
                <div class="art-content">
                    <a href="<?php  echo base_url("web/read_post/").$l->id;?>"><img src="https://source.unsplash.com/random/?people,trip" alt="" class="thumbnails"></a>
                </div>
                <div class="list-box-content">
                    <a href="<?php  echo base_url("web/read_post/").$l->id;?>"><h4 class="art-title"><?php echo $l->judul_post?></h4></a>
                    <p class="art-desc"><?php echo word_limit($l->isi_post, 10);?></p>
                    <div class="content-atr">By <span style="color: #3b5998;">Admin</span> | </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
    <?php echo $pagination; ?>
</div>