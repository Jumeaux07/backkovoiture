<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">

        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Tableau de bord</li>
                    <li class="treeview">
                        <a href="">
                          <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
                          <span>Tableau de bord</span>
                          <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="{{route('dashboard')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Statistique</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="">
                          <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
                          <span>Location</span>
                          <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="{{route('location.marque')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Liste des marques</a></li>
                          <li><a href="{{route('location.marque.create')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ajouter une marque</a></li>
                          <li><a href="{{route('location.voiture')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Liste des voitures</a></li>
                          <li><a href="{{route('location.voiture.create')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ajouter une voiture</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

    </section>
    <div class="sidebar-footer">
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title=""
            data-original-title="Settings" aria-describedby="tooltip92529"><span class="icon-Settings-2"></span></a>
        <a href="mailbox.html" class="link" data-toggle="tooltip" title=""
            data-original-title="Email"><span class="icon-Mail"></span></a>
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title=""
            data-original-title="Logout"><span class="icon-Lock-overturning"><span class="path1"></span><span
                    class="path2"></span></span></a>
    </div>
</aside>
