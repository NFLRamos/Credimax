<div class="modal fade tema-modal-team" id="exampleModal2-<?php the_ID() ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color:#1d1d1b; background-image: linear-gradient(90deg,#212529 50%,#cd983324)">


            <div class="modal-body" style="padding:50px;">
                <div class="row">
                    <div class="div-bye-bye" style="align-self:center">
                        <img style="height: 737px; object-fit: none; width: 630px; border-radius: 5px;" src="<?php echo get_template_directory_uri() ?>/assets/modal-img.png">
                    </div>
                    <div style="color: white; margin-left: 47px;">
                        <button style="color:white; font-size:40px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                        <?php

                                gravity_form(18, false, false);

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>