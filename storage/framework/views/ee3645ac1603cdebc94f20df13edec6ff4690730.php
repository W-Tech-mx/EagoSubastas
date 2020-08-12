
<!-- Modal -->
<div class="modal fade" id="modal-<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <form method="POST" action="<?php echo e(route('invitaciones.destroy',$item->id)); ?>">

        <?php echo e(csrf_field()); ?>

        <input type="text" name="_method" value="DELETE">

      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Eliminar Enlace  </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Desea eliminar el Registro?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Aceptar</button>
          </div>
        </div>

      </div>
    </form>

</div>
