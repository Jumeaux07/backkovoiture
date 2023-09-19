
            <form class="form" wire:submit="{{$isSave?"storeMarque" : "updateMarque" }}">
            {{-- <form class="form" action="{{route('location.marque.store')}}"> --}}
                <div class="box-body">
                    {{-- <h4 class="box-title text-info"><i class="ti-user mr-15"></i> Personal Info</h4> --}}
                    <hr class="my-15">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>{{$isSave ? "Nom de la marque ":"Modification de la marque $libelle"}}</label>
                          <input type="text" wire:model="libelle" class="form-control" placeholder="Ex: Nissan">
                          <input type="number" wire:model="idMarque" class="form-control" placeholder="Ex: Nissan" hidden>
                          <div style="color: red" >@error('libelle') {{ $message }} @enderror</div>
                          {{-- <input type="text" name="libelle" class="form-control" placeholder="Ex: Nissan"> --}}
                        </div>
                      </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="reset" data-dismiss="modal" class="btn btn-rounded btn-warning btn-outline mr-1">
                      <i class="ti-close"></i> Supprimer
                    </button>
                    <button type="submit" class="btn btn-rounded btn-primary btn-outline">
                      <i class="ti-save-alt"></i> {{$isSave ? "Enregistrer" : "Modifier"}}
                    </button>
                </div>
            </form>
