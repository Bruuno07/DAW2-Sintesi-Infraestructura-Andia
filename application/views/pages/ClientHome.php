<head>
    <title>Mis reparaciones</title>
</head>
<style>
    @media (max-width: 576px) {
        .xs {
            color: red;
            font-weight: bold;
        }
    }

    /* Small devices (landscape phones, 576px and up) */
    @media (min-width: 576px) and (max-width:768px) {
        .sm {
            color: red;
            font-weight: bold;
        }
    }

    /* Medium devices (tablets, 768px and up) The navbar toggle appears at this breakpoint */
    @media (min-width: 768px) and (max-width:992px) {
        .md {
            color: red;
            font-weight: bold;
        }
    }

    /* Large devices (desktops, 992px and up) */
    @media (min-width: 992px) and (max-width:1200px) {
        .lg {
            color: red;
            font-weight: bold;
        }
    }

    /* Extra large devices (large desktops, 1200px and up) */
    @media (min-width: 1200px) {
        .xl {
            color: red;
            font-weight: bold;
        }
    }

    .margetop {
        margin-top: 100px;
    }
</style>


<section>

    <div class="container-fluid margetop">
        <div class="row d-flex justify-content-center">
            <?php foreach ($incidencies as $incidencies_item) : ?>
                <div class="card text-center">
                    <div class="card-header">Descripcion :<?php echo $incidencies_item['desc_averia'] ?></div>
                    <div class="card-body">
                        <!-- <h5 class="card-title"><?php echo $incidencies_item[''] ?></h5> -->
                        <p class="card-text">
                            <?php echo $incidencies_item['Diagnostico_prev'] ?>
                        </p>



                        <hr>
                        <?php if ($incidencies_item['id_Estado'] == '') { ?>
                            <span><img src="<?php echo base_url("assets/img/Notstarted.png") ?>" /> No asignado</span>
                        <?php } ?>

                        <?php if ($incidencies_item['id_Estado'] == 1) { ?>
                            <span><img src="<?php echo base_url("assets/img/Notstarted.png") ?>" /> No empezado</span>
                        <?php } ?>

                        <?php if ($incidencies_item['id_Estado'] == 2) { ?>
                            <span><img src="<?php echo base_url("assets/img/Working.png") ?>" /> En curso</span>
                        <?php } ?>

                        <?php if ($incidencies_item['id_Estado'] == 3) { ?>
                            <span><img src="<?php echo base_url("assets/img/Completado.png") ?>" /> Completado</span>
                        <?php } ?>

                        <?php if ($incidencies_item['id_Estado'] == 4) { ?>
                            <span><img src="<?php echo base_url("assets/img/Enviado.png") ?>" /> Entregado</span>
                        <?php } ?>


                        <br>
                        <hr>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $incidencies_item['id_incidencia'] ?>">
                            Detalles
                        </button>

                    </div>
                    <div class="card-footer text-muted">Fecha de entrada: <?php echo $incidencies_item['Fecha_entrada'] ?></div>
                </div>
                &nbsp;


                <div class="modal fade" id="exampleModal<?php echo $incidencies_item['id_incidencia'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $incidencies_item['Diagnostico_prev'] ?></h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="card-text">
                                    UUID: <?php echo $incidencies_item['uuid'] ?>
                                </p>

                                <p class="card-text">
                                    MARCA: <?php echo $incidencies_item['Marca'] ?>
                                </p>

                                <p class="card-text">
                                    MODELO: <?php echo $incidencies_item['Modelo'] ?>
                                </p>

                                <p class="card-text">
                                    NUMERO DE SERIE: <?php echo $incidencies_item['Numero_serie'] ?>
                                </p>

                            </div>
                            <div class="modal-footer">                          
                                <a type="button"  data-dismiss="modal"  href="<?php echo site_url('') ?>"><img src="<?php echo base_url("assets/img/pdf.png") ?>" /></a>
                                <button type="button" class="btn btn-danger" data-dismiss="modal" >Cerrar</button>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Modal -->