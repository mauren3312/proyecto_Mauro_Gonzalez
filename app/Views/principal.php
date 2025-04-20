<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>G&G Optica</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/miestilo.css">
    <style>
        label {
            color: white;
        }

        .margen-bottom7 {
            margin-bottom: 50px;
        }

        .margen-top7 {
            margin-top: 50px;
        }

        .margen7 {
            margin: 50px;
        }

        .card-icon {
            width: 80px;
            height: 80px;
            object-fit: contain;
            margin: 1rem auto 0;
            /* centrado arriba con un pequeño margen */
            display: block;
        }

        .precio-viejo {
            color: #555;
            font-size: 12px;
            opacity: 0.8;
            text-decoration: line-through;
        }
    </style>
</head>

<body> <!--Insertar un estilo interno para un párrafo existente.-->

    <header>
        <!--Llamamos a nuestro navbar que lo tenemos en un archivo separado -->
        <?php include 'navbar.php'; ?>

    </header>


    <!-- Carrousel-->
    <section class="container-fluid mt-3 col-12">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">

            <div class="carousel-inner">
                <!-- Imagenes-->
                 <!-- IMAGEN 1-->
                <div class="carousel-item active">
                    <a href="#"><img src="assets/img/chicolentes.webp" class="d-block w-100"></a>
                </div>
                <!-- IMAGEN 2-->
                <div class="carousel-item">
                    <a href="#"><img src="assets/img/chicalentes.webp" class="d-block w-100"></a>
                </div>
                <!-- IMAGEN 3-->
                <div class="carousel-item">
                    <a href="#"><img src="assets/img/lentes.jpg" class="d-block w-100"></a>
                </div>
                <!-- IMAGEN 4-->
                <div class="carousel-item">
                    <a href="#"><img src="assets/img/promo.webp" class="d-block w-100"></a>
                </div>
            </div>

            <!--botones para cambiar de imagen-->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

            <!-- Indicadores del carousel-->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0"
                    class="active"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="3"></button>
            </div>
        </div>
    </section>

    <!-- PRODUCTOS DESTACADOS -->
    <section class="bg-dark py-5 px-5">
        <br>
        <div class="container">
            <h1>Productos Destacados</h1>
        </div>
        <br>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4 justify-content-center">
            <div class="col">
                <div class="card h-100">
                    <img src="assets/img/anteojo1.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Anteojo 360 Marty Negro</h5>
                        <div>
                            <span class="precio-viejo">$87.800,00</span>
                            <span class="card-text">$72.625,00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="assets/img/anteojo2.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Anteojo Vulk Rolling Stone BURDEN C3 Polarizado</h5>
                        <div>
                            <span class="precio-viejo">$138.000,00</span>
                            <span class="card-text">$128.200,00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="assets/img/anteojo3.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Anteojo Vulk Rolling Stone I SEE C7 Ed. Limitada</h5>
                        <p class="card-text">$190.750,00</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="assets/img/anteojo4.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Anteojo Dacil Berlin Small Negro</h5>
                        <div>
                            <span class="precio-viejo">$50.000,00</span>
                            <span class="card-text">$42.750,00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="assets/img/anteojo5.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Anteojo Dacil Paris Celeste</h5>
                        <div>
                            <span class="precio-viejo">$87.800,00</span>
                            <span class="card-text">$72.625,00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
    </section>



    <!-- METODOS DE PAGO -->
    <section class="bg-dark py-5">
        <br>
        <div>
            <h1>Metodos de Pago y envio</h1>
        </div>
        <br>

        <div class="row row-cols-2 row-cols-md-3 g-4 justify-content-center mx-4">
            <div class="col">
                <div class="card">
                    <img src="assets/img/tarjetaicon.png" class="card-img-top card-icon" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Formas de pago</h5>
                        <p class="card-text">Consultá nuestras formas de pago disponibles y elegí la que mejor se adapte a vos. Aceptamos tarjetas, transferencias y más.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/camionicon.png" class="card-img-top card-icon" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tipo de entregas</h5>
                        <p class="card-text">Conocé los métodos de envío que ofrecemos. Elegí entre retiro en tienda, envíos estándar o entregas express según tu necesidad.</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </section>

    <!-- CONTACTANOS -->

    <section class="bg-dark py-5">
        <br>
        <div class="text-center mb-5 mt-5 mx-5">
            <h1>Contactanos</h1>
            <h3 style="color: white;">Mandanos un mensaje y te respondemos al correo lo antes posible</h3>
        </div>
        <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <form>
                        <div class=" mb-3">
                            <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->
    <section class="text-light bg-dark py-5">
        <div class="container" data-aos="fade-up">

            <div style="text-align: center;">
                <br>
                <h2 style="font-style: italic;">Sobre Nosotros </h2>
                <h3>Descubre más <span>Sobre Nosotros</span></h3>
                <br>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <br>
                    <img src="assets/img/cat2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="100">
                    <h3>¿Quiénes somos?</h3>
                    <p>
                        Somos una óptica comprometida con el cuidado de tu visión. Con años de experiencia en el rubro,
                        nuestro objetivo es brindarte no solo productos de calidad, sino también una atención
                        personalizada, cercana y profesional. Creemos que ver bien es vivir mejor, y trabajamos cada día
                        para ayudarte a lograrlo.
                    </p>

                    <h3>¿Qué hacemos?</h3>
                    <p>
                        Ofrecemos una amplia variedad de anteojos, lentes de sol, lentes de contacto . Trabajamos con
                        marcas reconocidas y tecnología de última generación para asegurarte precisión, estilo y
                        comodidad en cada producto. Además, contamos con asesoramiento personalizado para que elijas el
                        diseño que mejor se adapte a tu rostro y estilo de vida.
                        <br>
                    <h3>¿Por qué elegirnos?</h3>
                    <p>
                        Porque combinamos calidad, experiencia y calidez humana. En nuestra óptica no solo te ayudamos a
                        ver mejor, también te hacemos sentir bien atendido. Nos diferenciamos por nuestra dedicación, la
                        confianza que generamos en cada cliente y la pasión con la que trabajamos. Eleginos y descubrí
                        una nueva forma de cuidar tu mirada.
                    </p>
                    <br>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->




    <?php include 'footer.php'; ?>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>