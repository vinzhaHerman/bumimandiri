<div class="evhero">
    <img src="<?php echo base_url(); ?>assets/img/chairs_res.jpg" alt="" class="plx-bg">
    <div class="overlay"></div>
</div>
<div class="evhero-intro">
    <h2>Gallery</h2>
    <h4>Page: Gallery</h4>
</div>

<div class="mycontainer">
	<h1 class="heading" style="text-align: center;">SEE OUR JOURNEY</h1>
	<div class="mid-selector">
		<a id="tb_1" class="bt-selector active" onClick="rudrSwitchTab('tb_1', 'content_1');">ALL</a>
		<a id="tb_2" class="bt-selector" onClick="rudrSwitchTab('tb_2', 'content_2');">EXAMPLE 1</a>
		<a id="tb_3" class="bt-selector" onClick="rudrSwitchTab('tb_3', 'content_3');">MORE EXAMPLE</a>
	</div>

	<div class="gallery-grid tabcontent" id="content_1">
		<div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?people,trip" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?people,adventure" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?people,mountain" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?people,running" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?people,vacation" alt=""></div>
        </div>
		<div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?people,trip" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?people,adventure" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?people,mountain" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?people,running" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?people,vacation" alt=""></div>
        </div>
    </div>
    <div class="gallery-grid tabcontent" id="content_2">
		<div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?people,trip" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?people,adventure" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?people,mountain" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?people,vacation" alt=""></div>
        </div>
		<div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?people,trip" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?people,mountain" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?people,running" alt=""></div>
        </div>
    </div>
    <div class="gallery-grid tabcontent" id="content_3">
		<div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?people,trip" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?people,adventure" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?people,mountain" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?people,mountain" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?people,running" alt=""></div>
        </div>
	</div>
</div>

<script>
function rudrSwitchTab(rudr_tab_id, rudr_tab_content) {
	var x = document.getElementsByClassName("tabcontent");
	var i;
	for (i = 0; i < x.length; i++) {
		x[i].style.display = 'none';
	}
	document.getElementById(rudr_tab_content).style.display = 'grid';
 
	var y = document.getElementsByClassName("bt-selector");
	var i;
	for (i = 0; i < y.length; i++) {
		y[i].className = 'bt-selector'; 
	}
	document.getElementById(rudr_tab_id).className = 'bt-selector active';
}
</script>