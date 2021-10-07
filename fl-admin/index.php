<?php require 'partials/tete.php'; ?>

	<h1 class=""> Tableau de Bord </h1>

    <hr class="my-5">
              <div class="page-inner">
              <!-- .page-section -->
              <div class="page-section">
                <!-- .section-block -->
                <div class="section-block">
                  <!-- metric row -->
                  <div class="metric-row">
                    <!-- metric column -->
                    <div class="col-12 col-sm-9 col-lg-5">
                      <!-- .metric -->
                      <div class="card-metric">
                        <div class="metric">
                        	<a href="liste_utilisateur.php">
                          <p class="">
                            <sub><h2><i class="oi oi-people"></i></h2></sub> <span class="value">12</span>
                          </p>
                          <h2 class=""> Utilisateur </h2>
                          </a>
                        </div>
                      </div><!-- /.metric -->
                    </div><!-- /metric column -->
                    <!-- metric column -->
                    <div class="col-12 col-sm-9 col-lg-5">                      <!-- .metric -->
                      <div class="card-metric">
                        <div class="metric">
                        	<a href="liste_produit.php">
                          <p class="">
                            <sub><h2><i class="oi oi-cart"></i></h2></sub> <span class="value">47</span>
                          </p>
                          <h2> Produits </h2>
                      </a>
                        </div>
                      </div><!-- /.metric -->
                    </div><!-- /metric column -->
                    <!-- metric column -->
                    <div class="col-12 col-sm-9 col-lg-5">
                      <!-- .metric -->
                      <div class="card-metric">
                        <div class="metric">
                        	<a href="liste_panier.php">
                          <p class="">
                            <sub><h2><i class="fa fa-tasks"></i></h2></sub> <span class="value">64</span>
                          </p>
                          <h2 class=""> Commande En Cour </h2>
                      </a>
                        </div>
                      </div><!-- /.metric -->
                    </div><!-- /metric column -->
                    <!-- metric column -->
                    <div class="col-12 col-sm-9 col-lg-5">
                      <!-- .metric -->
                      <div class="card-metric">
                        <div class="metric">
                        	<a href="liste_commande.php">
                          <p class="">
                            <sub><h2><i class="oi oi-thumb-up ml-1"></i></h2></sub> <span class="value">8</span>
                          </p>
                          <h2 class=""> Commandes Terminer </h2>
                      </a>
                        </div>
                      </div><!-- /.metric -->
                    </div><!-- /metric column -->
                  </div><!-- /metric row -->


                  <section id="base-style" class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form -->
                    <form method="POST" enctype="multipart/form-data">
                      <!-- .fieldset -->
                      <fieldset>
                        <legend><h2>Ajouter Un Produit</h2></legend> <!-- .form-group -->
                        <div class="form-group">
                          <label for="tf1">Email address</label> <input type="email" class="form-control" id="tf1" aria-describedby="tf1Help" placeholder=""> <small id="tf1Help" class="form-text text-muted"></small>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="tf2">Number input</label> <input type="number" class="form-control" id="tf2" placeholder="Amount (to the nearest dollar)">
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="tf3">File input</label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="tf3" multiple> <label class="custom-file-label" for="tf3">Choose file</label>
                          </div>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="tf4">Clearable</label>
                          <div class="has-clearable">
                            <button type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button> <input type="text" class="form-control" id="tf4" placeholder="Type something..." value="Moonlight">
                          </div>
                        </div><!-- /.form-group -->
                        <!-- .form-group -->
                        <button class="btn btn-primary btn-lg btn-block"><i class="oi oi-cart"></i>  Ajouter Produit</button>
                      </fieldset><!-- /.fieldset -->
                    </form><!-- /.form -->
                  </div><!-- /.card-body -->
                  <!-- .card-body -->
                  <div class="card-body border-top">
                    <!-- .form -->
                    <form>
   



<?php require 'partials/pied.php'; ?>