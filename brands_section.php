<?php include('page.php'); ?>
<?php include('header.php'); ?>

<style>
#brands--pt{
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin: 50px auto;
    width: 90%;
}

#brands__container{
    display: flex;
    flex-direction: flex;
    align-items: center;
    justify-content: center;
    margin:  10px 50px;
    padding: 10px;
}

#brands__container img{
    width: 120px;
}

article {
    margin-left: 50px;
    display: flex;
    flex-direction: column;
}

article h3{
    color: #f84e56;
    text-transform: uppercase;
    font-weight: 800;
}

.moreProducts a{
    display: flex;
    flex-direction: row-reverse;
    align-items: center;
    justify-content: center;
    padding: 10px;
    margin-left: 20px;
    text-align: center;
    text-decoration: none;
    background: #f84e56;
    border-radius: 5px;
    color: white;
}

.moreProducts i{
    
    margin-left: 20px;
}
</style>

<section id="brands--pt">
        <div id="brands__container">
            <img src="img/brands/adidas.png">
            <article>
                <h3>Adidas</h3>
                <p>Las mejores marcas, a los mejores precios, sólo aquí.</p>
                
            </article>
            <div class="moreProducts">
                <a href="https://www.adidas.co/" target="_black">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    <span>Ver Productos</span>
                </a>  
            </div>
        </div>
        
        <div id="brands__container">
            <img src="img/brands/eysom.png">
            <article>
                <h3>Eysom</h3>
                <p>Las mejores marcas, a los mejores precios, sólo aquí.</p>
                
            </article>
            <div class="moreProducts">
                <a href="https://www.eysom.com/" target="_black">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    <span>Ver Productos</span>
                </a>  
            </div>
        </div>

        <div id="brands__container">
            <img src="img/brands/gap.png">
            <article>
                <h3>GAP</h3>
                <p>Las mejores marcas, a los mejores precios, sólo aquí.</p>
                
            </article>
            <div class="moreProducts">
                <a href="http://www.gap.com/" target="_black">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    <span>Ver Productos</span>
                </a>  
            </div>
        </div>

        <div id="brands__container">
            <img src="img/brands/nike.png">
            <article>
                <h3>Nike</h3>
                <p>Las mejores marcas, a los mejores precios, sólo aquí.</p>
                
            </article>
            <div class="moreProducts">
                <a href="https://goo.gl/xsFFAh" target="_black">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    <span>Ver Productos</span>
                </a>  
            </div>
        </div>

        <div id="brands__container">
            <img src="img/brands/puma.png">
            <article>
                <h3>Puma</h3>
                <p>Las mejores marcas, a los mejores precios, sólo aquí.</p>
                
            </article>
            <div class="moreProducts">
                <a href="http://es-us.puma.com/" target="_black">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    <span>Ver Productos</span>
                </a>  
            </div>
        </div>

        <div id="brands__container">
            <img src="img/brands/Reebok.png">
            <article>
                <h3>Reebok</h3>
                <p>Las mejores marcas, a los mejores precios, sólo aquí.</p>
                
            </article>
            <div class="moreProducts">
                <a href="https://www.reebok.co/" target="_black">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    <span>Ver Productos</span>
                </a>  
            </div>
        </div>

        <div id="brands__container">
            <img src="img/brands/rhone.png">
            <article>
                <h3>Rhone</h3>
                <p>Las mejores marcas, a los mejores precios, sólo aquí.</p>
                
            </article>
            <div class="moreProducts">
                <a href="https://www.rhone.com/" target="_black">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    <span>Ver Productos</span>
                </a>  
            </div>
        </div>

        <div id="brands__container">
            <img src="img/brands/tenThousand.png">
            <article>
                <h3>Ten Thousand</h3>
                <p>Las mejores marcas, a los mejores precios, sólo aquí.</p>
                
            </article>
            <div class="moreProducts">
                <a href="https://www.tenthousand.cc/" target="_black">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    <span>Ver Productos</span>
                </a>  
            </div>
        </div>

        <div id="brands__container">
            <img src="img/brands/under_armour.png">
            <article>
                <h3>Under Armour</h3>
                <p>Las mejores marcas, a los mejores precios, sólo aquí.</p>
            </article>
            <div class="moreProducts">
                <a href="https://www.underarmour.com/en-co/" target="_black">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    <span>Ver Productos</span>
                </a>  
            </div>
        </div>  
</section>


<hr>
    <?php include('brands.php')?>
<?php include('footer.php'); ?>