<?php include('page.php'); ?>

<?php include('header.php'); ?>
    <?php include('slider.php'); ?>
        <?php include('brands.php')?>

        <hr style="margin-bottom: 70px; ">

        <style>
            .discounts{
                
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-items: center;
                max-width: 90%;
                margin: auto;
                position: relative;
                
            }

            #offers{
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-items: space-around;
                
                margin: auto;
            }

            #offers img{
                margin:  auto 20px;
            }

            #offers-supporting{
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-items: space-around;
                text-align: center;
                margin: 20px auto;
            }

            #offers-supporting p{
                max-width: 25%;
                margin: 20px auto;
                color: #f74855;
                text-transform: uppercase;
                font-weight: bold;
                font-size: .8rem;
            }
        </style>

        <section class="discounts">
            <div id="offers">
                <img src="img/discounts/sale.jpg" alt="" width="180px" style="border-radius: 50%;">
                <img src="img/discounts/discount.jpg" alt="" width="700px" style="border-radius: 5px;">
                <img src="img/discounts/black-friday.png" alt="" width="180px" style="border-radius: 5px;">
            </div>
            <div id="offers-supporting">
                <p>Hasta 40% de descuento en toda la tienda, explora para conocer todos nuestros productos.</p>
                <p>Conoce nuestras ofertas, los mejores descuentos en esta época navideña, comienza el año con tus mejores prendas deportivas.</p>
                <p>En este blackfriday, los mejores precios los encontrarás aquí, SportKraft.</p>
            </div>

        </section>

<?php include('footer.php'); ?>