<div>
      <!-- Modal -->
  <div class="modal center-modal fade" id="ajoutermarque" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Formulaire d'ajout d'une marque</h5>
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="form">
                <div class="box-body">
                    {{-- <h4 class="box-title text-info"><i class="ti-user mr-15"></i> Personal Info</h4> --}}
                    <hr class="my-15">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Nom de la marque</label>
                          <input type="text" class="form-control" placeholder="Ex: Nissan">
                        </div>
                      </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-rounded btn-warning btn-outline mr-1">
                      <i class="ti-close"></i> Quitter
                    </button>
                    <button type="submit" class="btn btn-rounded btn-primary btn-outline">
                      <i class="ti-save-alt"></i> Enregistrer
                    </button>
                </div>
            </form>
        {{-- </div>
        <div class="modal-footer modal-footer-uniform">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary float-right">Save changes</button>
        </div> --}}
      </div>
    </div>
  </div>
<!-- /.modal -->
</div>
