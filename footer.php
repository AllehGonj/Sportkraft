<link rel="stylesheet" href="css/font-awesome.min.css">

<style>
    #container{
        margin: 0;
        padding: 0;    
        position: relative;
        
    }

    #top-container{
        width: 90%;
        
        display: flex;
        flex-direction: row;
        padding: 10px;
        justify-content: left;
        margin: 50px auto;
        max-width: 100%;
        border-radius: 5px;
        border: 2px solid #f84e56;
    }

    #top-container div{
       margin: 10px 50px;
    }

    #top-container h2{
       margin-bottom: 20px;
       font-size: 1rem;
       color: #f84e56;
    }

    #top-container ul{
      padding: 0;
    }

    #top-container li{
        list-style: none;
        margin-bottom: 10px;
        font-size: .8rem;
    }

    #top-container li a{
        text-decoration: none;
        color: #2e342f ;
    }

    #top-container li a i{
        color: #e84049;
        margin-right:20px;
        font-size: 2.5rem;
    }

    #bottom-container{
        margin: auto;
        margin-bottom: 30px;
        width: 90%;
        max-width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-radius: 5px;
        border: 2px solid #f84e56;
        padding: 10px;
    }

    #bottom-container .payment{
        margin-top: 30px;
        color: #e84049;
    }

    #bottom-container .payment-src{
        margin-top: 20px;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
    }

    #bottom-container .payment-src li{
        list-style: none;
        margin: 0 50px;
    }

    #bottom-container img{
        width: 100px;
        filter: grayscale(100%);
    }

    #bottom-container img:hover{
        filter: grayscale(0%);
    }
</style>
<section id="container">
    <section id="top-container">
        <div>
            <h2>Acerca de SportKraft</h2>
            <ul>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Directorio</a></li>
                <li><a href="#">Novedades</a></li>
            </ul>
        </div>
        <div>
            <h2>Servicio al cliente</h2>
            <ul>
                <li><a href="#">Contactenos</a></li>
                <li><a href="#">Terminos y condiciones<a/></li>
                <li><a href="#">Preguntas</a></li>
            </ul>
        </div>
        <div>
            <h2>Siguenos:</h2>
            <ul>
                <li>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
    </section>
    <section id="bottom-container">
        <h2 class="payment">Modos de pago</h2>
        <ul class="payment-src">
            <li><img src="img/payment/MasterCard.png" alt=""></li>
            <li><img src="img/payment/visa.png" alt=""></li>
            <li><img src="img/payment/american.png" alt=""></li>
            <li><img src="img/payment/diners.png" alt=""></li>
        </ul>
    </section>
</section>
