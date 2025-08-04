<section id="contact" class="contact section light-background">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h3>Contáctanos | ON HAND Tech Solutions</h3>
        <p>
            ¿Buscas una consultoría confiable en SAP Business One en México? Estás en el lugar correcto.
            En ON HAND Tech Solutions, ayudamos a pequeñas y medianas empresas a implementar, optimizar y mantener SAP Business One de forma eficiente y segura.
            Ya sea que estés evaluando cambiar tu ERP, mejorar tu sistema actual o simplemente resolver dudas sobre SAP, estamos listos para escucharte.
        </p>
    </div><!-- End Section Title -->
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d702.3127741606457!2d-99.20702475919578!3d19.447768114471867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d20213a60e9b1b%3A0xf8bc3f90c98d2e64!2sCalz%20Legaria%20549%2C%2010%20de%20Abril%2C%20Miguel%20Hidalgo%2C%2011250%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses!2smx!4v1754286168396!5m2!1ses!2smx" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- End Google Maps -->
        <div class="row gy-4">
            <div class="col-lg-4">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                        <h3>Dirección</h3>
                        <p>Calz. Legaria 549 Col. 10 de Abril, Piso 4, Del. Miguel Hidalgo, 11250 Ciudad de México, CDMX</p>
                    </div>
                </div><!-- End Info Item -->
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3>Teléfono</h3>
                        <p>+1 5589 55488 55</p>
                    </div>
                </div><!-- End Info Item -->
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                        <h3>Correo electrónico</h3>
                        <p>
                            <script type="text/javascript">
                                document.write(hideEmailAddress("info", "example.com.mx"));
                            </script>
                        </p>
                    </div>
                </div><!-- End Info Item -->
            </div>
            <div class="col-lg-8">
                <form id="formContact" action="forms/contact.php" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre Completo" required="" maxlength="250" autocomplete="off">
                        </div>
                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Correo electrónico" required="" maxlength="180" autocomplete="off">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Asunto" required="" maxlength="180" autocomplete="off">
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" name="comentarios" rows="6" placeholder="comentarios" required="" autocomplete="off"></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message fadeout"></div>
                            <div class="sent-message fadeout">Tu información ha sido enviada, nos comunicaremos contigo a la brevedad posible. Gracias!</div>
                            <button type="submit" class="btnEnviar"><i class="bi bi-send"></i> Enviar Información</button>
                        </div>
                    </div>
                </form>
            </div><!-- End Contact Form -->
        </div>
    </div>
</section>

<!-- Validate Js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.14.0/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/localization/messages_es.min.js"></script>
<script type="text/javascript">
     $(function(event){
        event.preventDefault;

        $("#formContact").validate({
            debug: false,
            rules:{
                nombre     :{required:true},
                email      :{required:true,email:true},
                asunto      :{required:true},
                comentarios:{required:true}
            },
            submitHandler: function (form) {
                $.ajax({
                    type: "POST",
                    url: $("#formContact").attr("action"),
                    data: $("#formContact").serialize(),
                    beforeSend: function(){
                        $(".btnEnviar").attr("disabled",true);
                        $(".btnEnviar").html("Enviando.....");
                    },
                    success: function (data) {
                        $(".btnEnviar").attr("disabled",false);
                        $(".btnEnviar").html('<i class="bi bi-send"></i> Enviar Información');

                        console.log(data);

                        if(data.estatus == true){
                            $("#formContact")[0].reset();
                            $(".sent-message").show();      
                        }else if(data.estatus == false){
                            $("#formContact")[0].reset();
                            $(".error-message").show(); ;
                            $(".error-message").html(data.error);
                        }//end if

                        setTimeout(function(){
                            $(".fadeout").fadeOut(1000);
                        },8000)                        
                        return false;
                    },
                });
                return false; // required to block normal submit ajax used
            }
        });

        return false;
     });
</script>