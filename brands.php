
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<style>
.slick-slide {
    margin: 0 30px;
    margin-bottom: 1000px;
}

.slick-slide img {
    width: 100%;
    justify-content: center;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 120px;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}
.container-logo{
    margin: 10px 50px;
    height: 270px;
    

}
.container-logo h2{
    margin-bottom: 80px;
    font-size: 2.3rem;
    text-align: center;
    color: #f84e56;
}

.customer-logos slider{
    
}
</style>

<div class="container-logo">
    <h2>Marcas</h2>
    <section class="customer-logos slider">
        <div class="slide"><img src="img/brands/adidas.png"></div>
        <div class="slide"><img src="img/brands/eysom.png"></div>
        <div class="slide"><img src="img/brands/gap.png"></div>
        <div class="slide"><img src="img/brands/nike.png"></div>
        <div class="slide"><img src="img/brands/puma.png"></div>
        <div class="slide"><img src="img/brands/Reebok.png"></div>
        <div class="slide"><img src="img/brands/rhone.png"></div>
        <div class="slide"><img src="img/brands/tenThousand.png"></div>
        <div class="slide"><img src="img/brands/under_armour.png"></div>
    </section>
</div>

<script>
    $(document).ready(function(){
        $('.customer-logos').slick({
          slidesToShow: 7,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 500,
          arrows: false,
          dots: false,
          pauseOnHover: false,
          responsive: [{
            breakpoint: 768,
            settings: {
              slidesToShow: 4
            }
          }, {
            breakpoint: 520,
            settings: {
              slidesToShow: 3
            }
          }]
        });
      });
</script>

