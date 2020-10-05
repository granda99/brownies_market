<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tienda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>

    <div class="site-wrap">
        <?php include ("base/header.php");
        include ("base/header_movil.php");
  ?>
        <div class="site-section border-bottom" data-aos="fade">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="block-16">
                            <br>
                            <br>
                            <figure>
                                <img src="img/personas/blog.jpg" alt="Image placeholder">

                            </figure>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5">


                        <div class="site-section-heading pt-3 mb-4">
                            <h2 class="text-black">Como iniciamos</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius repellat, dicta at laboriosam,
                            nemo exercitationem itaque eveniet architecto cumque, deleniti commodi molestias repellendus
                            quos sequi hic fugiat asperiores illum. Atque, in, fuga excepturi corrupti error corporis
                            aliquam unde nostrum quas.</p>
                        <p>Accusantium dolor ratione maiores est deleniti nihil? Dignissimos est, sunt nulla illum autem
                            in, quibusdam cumque recusandae, laudantium minima repellendus.</p>

                    </div>
                </div>
            </div>
        </div>

        <div class="site-section border-bottom" data-aos="fade">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 site-section-heading text-center pt-4">
                        <h2>The Team</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">

                        <div class="block-38 text-center">
                            <div class="block-38-img">
                                <div class="block-38-header">
                                    <img src="img/personas/persona4.jpg" alt="Image placeholder" class="mb-4">
                                    <h3 class="block-38-heading h4">Elizabeth Graham</h3>
                                    <p class="block-38-subheading">CEO/Co-Fundadora</p>
                                </div>
                                <div class="block-38-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil
                                        sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="block-38 text-center">
                            <div class="block-38-img">
                                <div class="block-38-header">
                                    <img src="img/personas/persona2.jpg" alt="Image placeholder" class="mb-4">
                                    <h3 class="block-38-heading h4">Andres Greive</h3>
                                    <p class="block-38-subheading">Co-Fundador</p>
                                </div>
                                <div class="block-38-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil
                                        sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="block-38 text-center">
                            <div class="block-38-img">
                                <div class="block-38-header">
                                    <img src="img/personas/persona3.jpg" alt="Image placeholder" class="mb-4">
                                    <h3 class="block-38-heading h4">Patricia Marx</h3>
                                    <p class="block-38-subheading">Marketing</p>
                                </div>
                                <div class="block-38-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil
                                        sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="block-38 text-center">
                            <div class="block-38-img">
                                <div class="block-38-header">
                                    <img src="img/personas/persona1.jpg" alt="Image placeholder" class="mb-4">
                                    <h3 class="block-38-heading h4">Mike Coolbert</h3>
                                    <p class="block-38-subheading">Gerente de ventas</p>
                                </div>
                                <div class="block-38-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil
                                        sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ps-site-features">

            <div class="container">

                <div class="ps-block--site-features ps-block--site-features-2">

                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-rocket"></i></div>
                        <div class="ps-block__right">
                            <h4>Envio Gratis</h4>
                            <p>Todo compra apatir de 30</p>
                        </div>
                    </div>

                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-sync"></i></div>
                        <div class="ps-block__right">
                            <h4>24 horas de retorno</h4>
                            <p>Si tienes algún problema</p>
                        </div>
                    </div>

                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-credit-card"></i></div>
                        <div class="ps-block__right">
                            <h4>Pago seguro</h4>
                            <p>Pago 100% seguro</p>
                        </div>
                    </div>

                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-bubbles"></i></div>
                        <div class="ps-block__right">
                            <h4>Soporte 24/7</h4>
                            <p>Soporte dedicado</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <?php include("base/footer.php"); ?>
    </div>


</body>

</html>