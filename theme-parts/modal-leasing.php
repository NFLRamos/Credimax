<div class="modal fade tema-modal-leasing" id="exampleModal1-<?php the_ID() ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button style="color:black; font-size:40px; text-align: right;padding-right: 30px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            <div class="modal-body" style="padding:50px;">
                <div class="row">
                    <div class="col-12 col-md-6" style="align-self:center">
                        <img src="<?php echo $imagem['url']; ?>">
                        <h2 class="mt-5" style="color:black;"><?php echo the_title(); ?></h2>
                        <p class="mt-2" style="color:black;"><?php echo $info; ?></p>
                    </div>
                    <div class="col-12 col-md-6">
                        <?php gravity_form(15, false, false); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>