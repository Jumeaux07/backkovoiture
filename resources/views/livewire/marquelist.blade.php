<div>
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Liste des marques</h4>
                <div class="box-controls pull-right">
                    <div class="lookup lookup-circle lookup-right">
                        {{-- <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#ajoutermarque">
                            Ajouter une marque
                          </button> --}}
                        <input type="text" wire:model='mot'>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                @include('flashmessage')
                <livewire:createmarque/>
                <div class="table-responsive">

                    <table class="table table-hover">
                        <tr>
                            <th>Libelle</th>
                            <th>Création</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($marques as $marque)
                            <tr wire:key={{$marque->id}}>
                                <td>{{$marque->libelle}}</td>
                                <td>{{date('d-m-Y à H:i',strtotime($marque->created_at))}}</td>
                                <td>
                                    <div class="btn-group mb-5">
                                        <button type="button" class="waves-effect waves-light btn btn-dark dropdown-toggle" data-toggle="dropdown">Actions</button>
                                        <div class="dropdown-menu">
                                          <a class="dropdown-item" wire:click='edit({{$marque->id}})'>Modifier</a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" wire:click='deleteMarque({{$marque->id}})'>Supprimer</a>

                                        </div>
                                      </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="ml-10">
                {{$marques->links()}}
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>


