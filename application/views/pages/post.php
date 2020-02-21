<?php 
  $post=$post->row_array();
?>

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
    <h2><?php echo $post['judul_post']; ?></h2>
    <h4>Page: Artikel</h4>
</div>

<div class="mycontainer">

    <div class="eight-four">

    <div class="post-content">
        <h4 class="art-title" style="font-size: 24pt;"><?php echo $post['judul_post'];?></h4>
        <div class="content-atr">By <span style="color: #3b5998;">Admin</span> | </div>
        <p class="art-desc" style="margin: 32px 0;"><?php echo $post['isi_post'];?></p>
    </div>

    <div class="list-container">
        <h5 class="art-title">Newest Posts:</h5>
        <div class="side-list-row">
            <?php
                foreach(array_slice($list->result(), 0, 3) as $l ):
            ?>
            <div class="list-box-container post-l-compact">
                <div class="art-content">
                    <a href="<?php  echo base_url("web/read_post/").$l->id;?>"><img src="https://source.unsplash.com/random/?people,trip" alt="" class="thumbnails"></a>
                </div>
                <div class="list-box-content post-t-compact">
                    <a href="<?php  echo base_url("web/read_post/").$l->id;?>"><h4 class="art-title mn-tt"><?php echo $l->judul_post?></h4></a>
                    <!-- <p class="art-desc mn-pp low-opa"><?php //echo strip_tags(word_limit($l->isi_post, 15));?></p> -->
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>

    </div>

</div>