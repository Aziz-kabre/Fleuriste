     <?php require 'partials/tete.php'; ?>


       <!-- Progress List -->
                  <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                <!-- .breadcrumb -->
                <!-- floating action -->
                <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> <!-- /floating action -->
                <!-- title and toolbar -->
                <div class="d-md-flex align-items-md-start">
                  <h1 class="page-title mr-sm-auto"> Liste des Commandes en Cour</h1>
                </div><!-- /title and toolbar -->
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .card -->
                <section class="card card-fluid">
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form-group -->
                    <div class="form-group">
                      <!-- .input-group -->
                      <div class="input-group input-group-alt">
                        <!-- .input-group-prepend -->
                        <!-- .input-group -->
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                          </div><input type="text" class="form-control" placeholder="Search record">
                        </div><!-- /.input-group -->
                      </div><!-- /.input-group -->
                    </div><!-- /.form-group -->
                    <!-- .table-responsive -->
                    <div class="table-responsive">
                      <!-- .table -->
                      <table class="table">
                        <!-- thead -->
                        <thead>
                          <tr>
                            <th colspan="2" style="min-width:320px">
                              Photo
                            </th>
                            <th> Nom </th>
                            <th> Prix </th>
                            <th> Quantité </th>
                            <th> Etat </th>
                            <th style="width:100px; min-width:100px;"> &nbsp; </th>
                          </tr>
                        </thead><!-- /thead -->
                        <!-- tbody -->
                        <tbody>
                            <?php if(!empty($sol)){ foreach ($sol as $key => $value) {
                    ?>
                  
                          <!-- tr -->
                          <tr>
                            <td class="align-middle col-checker">
                              <div class="custom-control custom-control-nolabel custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="selectedRow[]" id="p3"> <label class="custom-control-label" for="p3"></label>
                              </div>
                            </td>
                            <td>
                              <a href="#!" class="tile tile-img mr-1"><img class="img-fluid" src="http://localhost/application/photo/personnel/<?php echo $value['photo']; ?>" alt="Card image cap"></a>
                            </td>
                            <td class="align-middle"> <?php echo $value['email']; ?> </td>
                            <td class="align-middle"> <?php echo $value['nom']; ?> </td>
                            <td class="align-middle"> <?php echo $value['prenom']; ?> </td>
                            <td class="align-middle"> <?php echo $value['role']; ?> </td>
                            <td class="align-middle text-right">
                              <a href="#!" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#!" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                            </td>
                          </tr><!-- /tr -->
                          <!-- tr -->
                         <?php } }  ?>
                        </tbody><!-- /tbody -->
                      </table><!-- /.table -->
                    </div><!-- /.table-responsive -->
                    <!-- .pagination -->
                    
                  </div><!-- /.card-body -->
                </section><!-- /.card -->

  <?php require 'partials/pied.php'; ?>              