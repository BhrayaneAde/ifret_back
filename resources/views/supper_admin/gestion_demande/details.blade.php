
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
                        <span class="text-muted fw-light">Gestion des demandes /</span> Details
                        <a href="{{ route('gestion_demande')}}" class="btn btn-primary float-end">< Retour</a>
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
                                                        <th>Véhicule</th>
                                                        <th>Fret</th>
                                                        <th>Lieu de depart</th>
                                                        <th>Lieu d'arrivée</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                      <td>001</td>
                                                      <td>Fourgonnette 0 - 10 Tonnes</td>
                                                      <td> 15 sacs de maïs </td>
                                                      <td>Abomey-Calavi</td>
                                                      <td>Bohicon</td>
                                                      <td>
                                                        <button type="button" class="btn btn-xs btn-primary" data-bs-toggle="modal" data-bs-target="#plusModal">
                                                          Voir <span class="tf-icon bx bx-plus bx-xs me-1"></span>
                                                        </button>
                                                      </td>
                                                    </tr>
  
                                                    <tr>
                                                        <td>OO2</td>
                                                        <td>Camion 20 - 30 Tonnes</td>
                                                        <td>200 sacs de charbon</td>
                                                        <td>Djougou</td>
                                                        <td>Cotonou</td>
                                                      <td>
                                                        <button type="button" class="btn btn-xs btn-primary" data-bs-toggle="modal" data-bs-target="#plusModal">
                                                            Voir <span class="tf-icon bx bx-plus bx-xs me-1"></span>
                                                        </button>
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

  
                    <!-- Le modal Voir Plus -->
                    <div class="modal fixed-right fade" id="plusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-slideout">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Historique de la demande</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
  
                            <!-- Section Camion -->
                            <div class="mb-3">
                              <h6>Camion:</h6>
                              <div class="mb-3">
                                <label for="truckBrand">Marque:</label>
                                <span id="truckBrand">[Marque du camion]</span>
                              </div>
                              <div class="mb-3">
                                <label for="truckModel">Modèle:</label>
                                <span id="truckModel">[Modèle du camion]</span>
                              </div>
                              <div class="mb-3">
                                <label for="truckPlateNumber">Numéro de plaque:</label>
                                <span id="truckPlateNumber">[Numéro de plaque du camion]</span>
                              </div>
                            </div>
  
                            <!-- Section Chauffeur -->
                            <div>
                              <h6>Chauffeur:</h6>
                              <div class="mb-3">
                                <label for="driverName">Nom:</label>
                                <span id="driverName">[Nom du chauffeur]</span>
                              </div>
                              <div class="mb-3">
                                <label for="driverLicense">Permis de conduire:</label>
                                <span id="driverLicense">[Numéro du permis du chauffeur]</span>
                              </div>
                              <div class="mb-3">
                                <label for="driverContact">Contact:</label>
                                <span id="driverContact">[Contact du chauffeur]</span>
                              </div>
                            </div>
  
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>


                  </div>
                  <!-- / Content -->
                  <!-- Footer -->
                  @include('supper_admin.partials.footer')
                  <!-- / Footer -->

<!-- beautify ignore:end -->