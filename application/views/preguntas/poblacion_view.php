<section id="poblacion">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-lg-offset-2">
                <form name="poblacionForm" id="poblacionForm">
                    <div class="form-group col-xs-12">
                        <label>DNI</label>
                        <input type="text" class="form-control" id="name" placeholder="DNI">
                    </div>
                    <div class="form-group col-xs-12">
                        <label>Apellido y Nombre</label>
                        <input type="text" class="form-control" id="email" placeholder="Nombre">
                    </div>
                    <div class="form-group col-xs-12">
                        <label>Fecha Nacimiento</label>
                        <input type="text" class="form-control" id="message" placeholder="Fecha Nacimiento">
                    </div>
                    <div class="form-group col-xs-12">
                        <label>Escuela</label>
                        <input type="text" class="form-control" id="message" placeholder="¿A que escuela asiste?">
                    </div>
                    <div class="form-group col-xs-12">
                        <label>Grado que esta cursando</label>
                        <input type="text" class="form-control" id="message" placeholder="¿Que grado esta cursando?">
                    </div>
                    <br>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <div id='toolbar' style="padding: 40px 15px;">
                                <div class='wrapper text-center'>
                                    <div class="btn-group btn-group-lg">
                                        <input type="submit" class="btn btn-default" style="padding: 20px 40px; width: 300px; color: #0E6E8C;" value="GUARDAR Y CONTINUAR">
                                        <a href="preguntas" class="btn btn-default" style="padding: 20px 40px; width: 300px; color: #0E6E8C;">VOLVER</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <hr />
            </div>
        </div>
    </div>
</section>
<script>
    $( document ).ready(function() {
        $( "#poblacionForm" ).submit(function( event ) {
            event.preventDefault();
            $.ajax({url: "cuestionario/poblacion/guardar", success: function(result){
                $("#box-preguntas").html(result);
            }});
        });
    });
</script>