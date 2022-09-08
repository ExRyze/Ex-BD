<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->view("template/navbar", $data);?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid col-lg-12">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Animelist</h1>
                    <p class="mb-4">This is game lists data that is used to manage game datas that is shown to the user. For editing the database click this link <a target="_blank"
                            href="../../../phpmyadmin">Database Structure</a>.</p>

                    <!-- DataTales Example -->
                    <button class="btn btn-primary mb-3 modalAddAnime" data-toggle="modal" data-target="#addAnime">Add Game</button>
                    <div class='card shadow mb-4'>
                        <div class='card-header py-3'>
                            <h6 class='m-0 font-weight-bold text-primary'>Data</h6>
                        </div>
                        <div class='card-body'>
                            <div class='table-responsive scrollbar-none'>
                                <table class='table table-bordered' id='dataTable' cellspacing='0'>
                                    <thead>
                                        <tr class="text-center">
                                            <th>Title</th>
                                            <th>Alternative Title</th>
                                            <th>Episodes</th>
                                            <th>Description</th>
                                            <th>Start Airing</th>
                                            <th>Finish Airing</th>
                                            <th>Author</th>
                                            <th>Credits</th>
                                            <th>Type Videos</th>
                                            <th>Resolution</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr class="text-center">
                                            <th>Title</th>
                                            <th>Alternative Title</th>
                                            <th>Episodes</th>
                                            <th>Description</th>
                                            <th>Start Airing</th>
                                            <th>Finish Airing</th>
                                            <th>Author</th>
                                            <th>Credits</th>
                                            <th>Type Videos</th>
                                            <th>Resolution</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <!-- <?php foreach($data["game-db"] as $row):?>
                                        <tr>
                                    
                                        </tr>
                                    <?php endforeach;?> -->
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->view("template/copyright"); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="addAnime" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true" style="margin-top:50px;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
        <input type="hidden" id="email" name="email"> 
        <div class="form-group">
            <label for="anime-title">Anime Title</label>
            <input type="text" class="form-control" id="anime-title" name="anime-title">
        </div>

        <div class="form-group">
            <label for="anime-alternative">Alternative Title</label>
            <input type="text" class="form-control" id="anime-alternative" name="anime-alternative">
        </div>

        <div class="form-group">
            <label for="anime-author">Author</label>
            <input type="text" class="form-control" id="anime-author" name="anime-author">
        </div>

        <div class="form-group">
            <label for="anime-episodes">Episodes</label>
            <input type="number" class="form-control" id="anime-episodes" name="anime-episodes" min="0">
        </div>
        
        <div class="form-group">
            <label for="anime-started">Started Airing</label>
            <input type="date" class="form-control" id="anime-started" name="anime-started">
        </div>
        
        <div class="form-group">
            <label for="anime-finished">Finished Airing</label>
            <input type="date" class="form-control" id="anime-finished" name="anime-finished">
        </div>
        
        <div class="form-group">
            <label for="anime-description">Description</label>
            <textarea name="anime-description" id="anime-description" rows="5" class="w-100"></textarea>
        </div>

        <div class="border-bottom-primary mb-3">
            <h5 class="h5">Additional</h5>
        </div>

        <div class="form-group">
            <label for="anime-credits">Credits</label>
            <input type="text" class="form-control" id="anime-credits" name="anime-credits">
        </div>

        <div class="form-group">
            <label for="anime-type">Type Videos</label>
            <input type="text" class="form-control" id="anime-type" name="anime-type">
        </div>

        <div class="form-group">
            <label for="anime-resolution">Resolution</label>
            <input type="text" class="form-control" id="anime-resolution" name="anime-resolution">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"></button>
        </form>
      </div>
    </div>
  </div>
</div>
