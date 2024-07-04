<div class="modal fade tema-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #131413;background-image: linear-gradient(90deg,#131413 50%,#cd98331c)">
            <button style="color:white; font-size:40px; text-align: right;padding-right: 30px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            <div class="modal-body" style="margin-bottom: -20px;">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="row">
                            <div style="padding:50px; margin-left: 15px;">
                                <h2 style="float:left; color:white; text-align:left;"><?php _e('Seja membro e obtenha benefícios')?><br><?php _e('incríveis')?></h2>
                                <a href="<?php bloginfo('url'); ?>/simuladores/" style="float:right; font-size: 22px; border-color: #cd9833 !important; font-weight:400 !important;" class="btn btn-light ml-5 col-bye-bye"><?php _e('Ver Simuladores')?></a>
                            </div>
                        </div>

                        <div class="row "> 
                            <div class="col-bye-bye" style="margin-left:30px;">
                                <div class="card" style="width: auto; background-color:white; margin-bottom:48px; height:auto; border-radius: 5px;">
                                    <div class="card-body" style="height:240px; width: 260px;">
                                        <i class="card-icon-modal fas fa-check-circle"></i>
                                        <h3 class="titulo-modal"><?php _e('Gestão Financeira Familiar')?></h3>
                                        <div class="texto-modal">
                                            <p><?php _e('Folhas para gerir despesas')?><br><?php _e('familiares e listas de tarefas')?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-bye-bye" style=" margin-left:30px;">
                                <div class="card" style="width: auto; background-color:white; margin-bottom:48px; height:auto; border-radius: 5px;">
                                    <div class="card-body" style="height:240px; width: 260px;">
                                        <i class="card-icon-modal fas fa-check-circle"></i>
                                        <h3 class="titulo-modal"><?php _e('Calendário Financeiro')?></h3>
                                        <div class="texto-modal">
                                            <p><?php _e('Agende compromissos financeiros')?><br><?php _e('e mantenha-se atualizado')?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-bye-bye" style=" margin-left:30px;">
                                <div class="card" style="width: auto; background-color:white; margin-bottom:48px; height:auto; border-radius: 5px;">
                                    <div class="card-body" style="height:240px; width: 260px;">
                                        <i class="card-icon-modal fas fa-check-circle"></i>
                                        <h3 class="titulo-modal"><?php _e('Serviços Digitais')?></h3>
                                        <div class="texto-modal">
                                            <p><?php _e('Aceda a todos os serviços digitais')?><br></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="col-bye-bye" style=" margin-left:30px;">
                                <div class="card" style="width: auto; background-color:white; margin-bottom:40px; height:auto; border-radius: 5px;">
                                    <div class="card-body" style="height:240px; width: 260px;">
                                        <i class="card-icon-modal fas fa-check-circle"></i>
                                        <h3 class="titulo-modal"><?php _e('Gestão Financeira Negócio')?></h3>
                                        <div class="texto-modal">
                                            <p><?php _e('Folhas de cálculo de apoio para')?><br><?php _e('gestão da sua empresa')?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-bye-bye" style=" margin-left:30px;">
                                <div class="card" style="width: auto; background-color:white; margin-bottom:40px; height:auto; border-radius: 5px;">
                                    <div class="card-body" style=" height:240px; width: 260px;">
                                        <i class="card-icon-modal fas fa-check-circle"></i>
                                        <h3 class="titulo-modal"><?php _e('Check Up Gratuito')?></h3>
                                        <div class="texto-modal">
                                            <p><?php _e('Avaliação gratuita e confidencial')?><br></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-bye-bye" style=" margin-left:30px;">
                                <div class="card" style="width: auto; background-color:white; margin-bottom:40px; height:auto; border-radius: 5px;">
                                    <div class="card-body" style=" height:240px; width: 260px;">
                                        <i class="card-icon-modal fas fa-check-circle"></i>
                                        <h3 class="titulo-modal"><?php _e('Suporte e Comunicação')?></h3>
                                        <div class="texto-modal">
                                            <p><?php _e('Acesso ilimitado aos nossos')?><br><?php _e('suportes de comunicação')?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            </div>



                    </div>






                    <div class="col-12 col-lg-4 coluna-login">

                        <!-- Inicio -->

                        <div class="login">
                            <img style="height:150px; width:auto;" src="<?php echo get_template_directory_uri() . "/assets/crop-white.svg"  ?>">
                            <p><?php _e('Esta é uma página exclusiva para clientes')?> <br> <span class="font-weight-bold"><?php _e('Credimax')?></span> <?php _e('que possuem registo.')?></p>
                            <button type="button" id="cliente" onclick="myFunction1()" class="btn btn-primary"><?php _e('Cliente Registado')?> <img style="height: 17px; width: auto;" src="<?php echo get_template_directory_uri() ?>/assets/right.png"></button>
                            <p style="margin-top: 20px;">Não tem registro? <span onclick="myFunction3()" style="cursor: pointer;" ><?php _e('Registre-se aqui')?></span></p>
                        </div>


                        <!-- Login -->

                        <div class="formulario">
                            <span style="display:block; cursor: pointer" onclick="myFunction2()"><i class="seta-left fas fa-long-arrow-alt-left"></i><?php _e('Voltar')?> </span>
                            <img style="height:150px; width:auto;" src="<?php echo get_template_directory_uri() . "/assets/crop-white.svg"  ?>">

                            <?php gravity_form(9, false, false); ?>
                        </div>

                        <!-- Form registo -->

                        <div class="registo">
                            <span style="display:block; cursor: pointer" onclick="myFunction2() "><i class="seta-left fas fa-long-arrow-alt-left"></i><?php _e('Voltar')?> </span>
                            <img style="height:150px; width:auto;" src="<?php echo get_template_directory_uri() . "/assets/crop-white.svg"  ?>">                           
                            <?php gravity_form(6, false, false); ?>
                        </div>

                    </div>






                </div>


            </div>


        </div>
    </div>
</div>

<script>
    const formList = document.querySelector('.formulario');
    const loginInicial = document.querySelector('.login');
    const registoCliente = document.querySelector('.registo');

    registoCliente.style.display = 'none';

    formList.style.display = 'none';
    

    function myFunction1() {
        if (formList.style.display === 'none') {
            formList.style.display = 'block';
            loginInicial.style.display = 'none';
            
        }
    }

    function myFunction2() {
        if (loginInicial.style.display === 'none') {
            loginInicial.style.display = 'block';
            formList.style.display = 'none';
            registoCliente.style.display = 'none';
        }
    }

    function myFunction3() {
        if (registoCliente.style.display === 'none') {
            registoCliente.style.display = 'block';
            formList.style.display = 'none';
            loginInicial.style.display = 'none';
        }
    }
</script>