
            <!-- Menu -->
            @include('supper_admin.partials.sidebar');
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
               <!-- Navbar -->
               @include("supper_admin.partials.header")
               <!-- Content wrapper -->
               <div class="content-wrapper">
                  <!-- Content -->
                  <div class="container-xxl flex-grow-1 container-p-y">
                    
                     <h4 class="py-3 mb-4">
                        <span class="text-muted fw-light">Camions /</span> En attent
                     </h4>

                     <!-- Fixed Header -->
                    <div class="content mt-3">
                        <div class="animated fadeIn">
                            <div class="row">
            
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Liste des demandes</strong>                                   
                                        </div>
                                        <div class="card-body">
                                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Numéro d'immatriculation</th>
                                                        <th>Photo du camion</th>
                                                        <th>Carte Grise</th>
                                                        <th>Visite Technique</th>
                                                        <th>Assurance</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                      <td>1</td>
                                                      <td>immatriculation</td>
                                                      <td> Photo </td>
                                                      <td>Carte Grise</td>
                                                      <td>Visite</td>
                                                      <td>Assurance</td>
                                                      <td>
                                                         <a href="{{ route('details_val_camion')}}" class="btn btn-primary">Voir <span class="tf-icon bx bx-plus bx-xs me-1"></span></a>
                                                       </td>
                                                    </tr>
  
                                                    <tr>
                                                      <td>2</td>
                                                      <td>immatriculation</td>
                                                      <td>Photo</td>
                                                      <td>Carte Grise</td>
                                                      <td>Visite</td>
                                                      <td>Assurance</td>
                                                      <td>
                                                         <a href="{{ route('details_val_camion')}}" class="btn btn-primary">Voir <span class="tf-icon bx bx-plus bx-xs me-1"></span></a>
                                                      </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
            
                            </div>
                        </div><!-- .animated -->
                    </div><!-- .content -->
                    <!--/ Fixed Header -->


                  </div>
                  <!-- / Content -->
                  <!-- Footer -->
                  @include('supper_admin.partials.footer')
                  <!-- / Footer -->

<!-- beautify ignore:end -->