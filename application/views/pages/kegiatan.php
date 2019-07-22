<div class="main-wrapper">
<div class="main-content-wrapper">

    <div class="filler"></div>
    <div class="section-title">ARTIKEL</div>
    <div class="list-container">




        
        <div class="list-featured">
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
        </div>





        <div class="list-row">
        <?php
            function word_limit($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
            }
            foreach(array_slice($list->result(), 0, 3) as $l ):
        ?>
        <div class="list-box-container">
            <div class="list-box-content list-box-img"></div>
            <div class="list-box-content list-box-text">
                <div class="list-box-title"><?php echo $l->judul_post?></div>
                <div class="list-box-desc"><?php echo word_limit($l->isi_post, 10);?></div>
                <div class="content-atr">By <span style="color: #3b5998;">Admin</span> | 0 comments</div>
            </div>
        </div>
        <?php endforeach; ?>
        <div class="list-box-container">
            <div class="list-box-content list-box-img"></div>
            <div class="list-box-content list-box-text">
                <div class="list-box-title">Insert Your Title Here...</div>
                <div class="list-box-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit..</div>
                <div class="content-atr">By <span style="color: #3b5998;">Admin</span> | 0 comments</div>
            </div>
        </div>
        <div class="list-box-container">
            <div class="list-box-content list-box-img"></div>
            <div class="list-box-content list-box-text">
                <div class="list-box-title">Insert Your Title Here...</div>
                <div class="list-box-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit..</div>
                <div class="content-atr">By <span style="color: #3b5998;">Admin</span> | 0 comments</div>
            </div>
        </div>
        <div class="list-box-container">
            <div class="list-box-content list-box-img"></div>
            <div class="list-box-content list-box-text">
                <div class="list-box-title">Insert Your Title Here...</div>
                <div class="list-box-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit..</div>
                <div class="content-atr">By <span style="color: #3b5998;">Admin</span> | 0 comments</div>
            </div>
        </div>
        <div class="list-box-container">
            <div class="list-box-content list-box-img"></div>
            <div class="list-box-content list-box-text">
                <div class="list-box-title">Insert Your Title Here...</div>
                <div class="list-box-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit..</div>
                <div class="content-atr">By <span style="color: #3b5998;">Admin</span> | 0 comments</div>
            </div>
        </div>
        <div class="list-box-container">
            <div class="list-box-content list-box-img"></div>
            <div class="list-box-content list-box-text">
                <div class="list-box-title">Insert Your Title Here...</div>
                <div class="list-box-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit..</div>
                <div class="content-atr">By <span style="color: #3b5998;">Admin</span> | 0 comments</div>
            </div>
        </div>
        <div class="list-box-container">
            <div class="list-box-content list-box-img"></div>
            <div class="list-box-content list-box-text">
                <div class="list-box-title">Insert Your Title Here...</div>
                <div class="list-box-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit..</div>
                <div class="content-atr">By <span style="color: #3b5998;">Admin</span> | 0 comments</div>
            </div>
        </div>
        <div class="list-box-container">
            <div class="list-box-content list-box-img"></div>
            <div class="list-box-content list-box-text">
                <div class="list-box-title">Insert Your Title Here...</div>
                <div class="list-box-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit..</div>
                <div class="content-atr">By <span style="color: #3b5998;">Admin</span> | 0 comments</div>
            </div>
        </div>
        <div class="list-box-container">
            <div class="list-box-content list-box-img"></div>
            <div class="list-box-content list-box-text">
                <div class="list-box-title">Insert Your Title Here...</div>
                <div class="list-box-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit..</div>
                <div class="content-atr">By <span style="color: #3b5998;">Admin</span> | 0 comments</div>
            </div>
        </div>
        <div class="list-box-container">
            <div class="list-box-content list-box-img"></div>
            <div class="list-box-content list-box-text">
                <div class="list-box-title">Insert Your Title Here...</div>
                <div class="list-box-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit..</div>
                <div class="content-atr">By <span style="color: #3b5998;">Admin</span> | 0 comments</div>
            </div>
        </div>
        </div>
    </div>
</div>
</div>