<style>
#slide__container {
    width: 100%;
}

.price_slider {
    -webkit-appearance: none;
    width: 100%;
    height: 10px;
    border-radius: 5px;
    background: #d3d3d3;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
}

.price_slider:hover {
    opacity: 1;
}

.price_slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 23px;
    height: 24px;
    border: 0;
    background: url('img/contrasticon.png');
    cursor: pointer;
}

.price_slider::-moz-range-thumb {
    width: 23px;
    height: 24px;
    border: 0;
    background: url('img/contrasticon.png');
    cursor: pointer;
}

#clothescontainer{
   
    width: 90%;
    padding: 20px;
    margin: 30px auto;
    display: flex;
    flex-direction: row;
    justify-content: center;
}

#filters{
    display: flex;
    flex-direction: column;
    margin-top: 50px;
    
}

#clothes {
    display: flex;
    flex-direction: column;
    align-items: left;
    justify-content: center;
    margin-left: 100px;
    flex-wrap: wrap;
    width: 70%;
}

#clothes > .top-clothes__section{
    margin-left: 40px;
    color: #2e342f;
}

#clothes > .bottom-clothes__section{
    display: flex;
    flex-direction: row;
    justify-content: center;
    flex-wrap: wrap;
    width: 100%;
}

#clothes__element{
   margin: 20px;
   text-align: center;
   width: 25%;
   background: #4c4f51;
}

#clothes img{
    width: 100%;
    height: 240px;
}

#clothes p{
    width: 100%;
    color: white;
    padding-bottom: 10px;
    border-bottom: 1px solid rgba(255,255,255,0.4);
}

#clothes h3{
    width: 100%;
    color: white;
}
</style>

<section id="clothescontainer">
    <div id="filters">
        <div id="slide__container">
            <input type="range" min="20000" max="500000" value="500000" class="price_slider" id="myRange">
            <p>Precio: $<span id="demo"></span></p>
        </div>
        <div>
            <?php
                //$array = array(0, 1, 2, 3, 4, 5, 6, 7, 8);               

                for ($i = 1; $i <= 8; $i++): ?>
                    <p>
                        <input class="w3-check" type="checkbox" checked="checked">
                        <label>Checkbox <?php echo $i ?></label>
                    </p>            
            <?php endfor; ?>
        </div>
    </div>
    <div id="clothes">
        <div class="top-clothes__section"><h2><?=$section_title?></h2></div>
        <div class="bottom-clothes__section">
            <?php
                $array = array(1,2,3,4,5,6,7,8,9,10,11,12);               

                for ($i = 1; $i <= 12; $i++): ?>
                    <div id="clothes__element">
                        <img src="<?=$image?>" alt="">
                        <p>Camiseta estampada</p>
                        <!--<h3>$189.900</h3>-->
                        <h3>$ <?php echo(rand(20000,500000))?></h3>
                    </div>         
            <?php endfor; ?>
        </div>
    </div>
</section>

<script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function() {
        output.innerHTML = this.value;
    }
</script>