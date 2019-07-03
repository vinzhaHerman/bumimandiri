<?php foreach ($res->result() as $post): ?>

<img src="<?php echo base_url() ?>upload/bukti/<? echo $post->bukti ?>" alt=""style="max-width: 300px; height: auto; margin: auto;">

 <?php endforeach; ?>