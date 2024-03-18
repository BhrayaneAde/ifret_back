
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
                        <span class="text-muted fw-light">Camion /</span> Détail camion
                        <a href="{{ route('camions.en_attent')}}" class="btn btn-primary float-end">< Retour</a>
                     </h4>


                       <style>
                         body {
                           font-family: Arial, sans-serif;
                           margin: 0;
                           padding: 0;
                         }
                         .container {
                           display: grid;
                           grid-template-columns: repeat(2, 1fr);
                           gap: 20px;
                           padding: 20px;
                         }
                         .row {
                           position: relative; /* Position relative pour le positionnement absolu des iframes à l'intérieur */
                           width: 210mm; /* Largeur d'une feuille A4 en millimètres */
                           height: 297mm; /* Hauteur d'une feuille A4 en millimètres */
                         }
                         .pdf-iframe {
                           position: absolute; /* Position absolue pour superposer les iframes */
                           top: 0;
                           left: 0;
                           width: 100%;
                           height: 100%;
                           border: none;
                         }
                       </style>
                       <div class="container">
                         <div class="row">
                           <h2>PDF 1 et PDF 2</h2>
                           <div class="pdf-iframe">
                             <iframe class="pdf-iframe" src="document1.pdf"></iframe>
                           </div>
                           <div class="pdf-iframe">
                             <iframe class="pdf-iframe" src="document2.pdf"></iframe>
                           </div>
                         </div>
                         <div class="row">
                           <h2>PDF 3 et PDF 4</h2>
                           <div class="pdf-iframe">
                             <iframe class="pdf-iframe" src="document3.pdf"></iframe>
                           </div>
                           <div class="pdf-iframe">
                             <iframe class="pdf-iframe" src="document4.pdf"></iframe>
                           </div>
                         </div>
                         <!-- Ajoutez d'autres rangées avec des PDF au besoin -->
                       </div>
                     
                     
                     

                  </div>
                  <!-- / Content -->
                  <!-- Footer -->
                  @include('supper_admin.partials.footer')
                  <!-- / Footer -->

<!-- beautify ignore:end -->