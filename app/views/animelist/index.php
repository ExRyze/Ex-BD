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
                                            <th>Id Anime</th>
                                            <th>Title</th>
                                            <th>Alternative Title</th>
                                            <th>Episodes</th>
                                            <th>Description</th>
                                            <th>Date Release</th>
                                            <th>Finish Airing</th>
                                            <th>Author</th>
                                            <th>Status</th>
                                            <th>Credits</th>
                                            <th>Type Videos</th>
                                            <th>Resolution</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr class="text-center">
                                            <th>Id Anime</th>
                                            <th>Title</th>
                                            <th>Alternative Title</th>
                                            <th>Episodes</th>
                                            <th>Description</th>
                                            <th>Date Release</th>
                                            <th>Finish Airing</th>
                                            <th>Author</th>
                                            <th>Status</th>
                                            <th>Credits</th>
                                            <th>Type Videos</th>
                                            <th>Resolution</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php foreach($data["animelist"] as $row):?>
                                        <tr>
                                            <td><?=$row['id_anime']?></td>
                                            <td><?=$row['title_anime']?></td>
                                            <td><?=$row['alternative_title_anime']?></td>
                                            <td><?=$row['episodes_anime']?></td>
                                            <td><?=$row['description_anime']?></td>
                                            <td><?=$row['date_release_anime']?></td>
                                            <td><?=$row['date_finished_anime']?></td>
                                            <td><?=$row['author_anime']?></td>
                                            <td><?=$row['status_anime']?></td>
                                            <td><?=$row['credits_anime']?></td>
                                            <td><?=$row['type_video_anime']?></td>
                                            <td><?=$row['resolution_anime']?></td>
                                            <td>
                                                <div class="d-flex justify-content-center rounded text-dark">
                                                    <i class="cursor-pointer fas fa-info bg-success p-2 w-fit"></i>
                                                    <i class="cursor-pointer fas fa-edit bg-warning p-2 w-fit"></i>
                                                    <i class="cursor-pointer fas fa-trash-alt bg-danger p-2 w-fit"></i>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
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
        <div class="form-group">
            <label for="animetitle">Anime Title</label>
            <input type="text" class="form-control" id="animetitle" name="animetitle" required>
        </div>

        <div class="form-group">
            <label for="animealternative">Alternative Title</label>
            <input type="text" class="form-control" id="animealternative" name="animealternative">
        </div>

        <div class="form-group">
            <label for="animeauthor">Author</label>
            <input type="text" class="form-control" id="animeauthor" name="animeauthor">
        </div>
        
        <div class="form-group">
            <label for="animeepisodes">Episodes</label>
            <input type="number" class="form-control" id="animeepisodes" name="animeepisodes" min="0">
        </div>
        
        <div class="form-group">
            <label for="animestatus">Status</label>
            <input type="text" class="form-control" id="animestatus" name="animestatus">
        </div>
        
        <div class="form-group">
            <label for="animestarted">Started Airing</label>
            <input type="date" class="form-control" id="animestarted" name="animestarted">
        </div>
        
        <div class="form-group">
            <label for="animefinished">Finished Airing</label>
            <input type="date" class="form-control" id="animefinished" name="animefinished">
        </div>
        
        <div class="form-group">
            <label for="animedescription">Description</label>
            <textarea name="animedescription" id="animedescription" rows="5" class="w-100"></textarea>
        </div>

        <div class="border-bottom-primary mb-3">
            <h5 class="h5">Additional</h5>
        </div>

        <div class="form-group">
            <label for="animecredits">Credits</label>
            <input type="text" class="form-control" id="animecredits" name="animecredits">
        </div>

        <div class="form-group">
            <label for="animetype">Type Videos</label>
            <input type="text" class="form-control" id="animetype" name="animetype">
        </div>

        <div class="form-group">
            <label for="animeresolution">Resolution</label>
            <input type="text" class="form-control" id="animeresolution" name="animeresolution">
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
