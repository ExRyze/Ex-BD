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

                    <div class="col-md-10 mx-auto">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="h5 pb-3 mb-4 border-bottom border-edge header">Add Anime</h5>
                          <form action="<?=BASE_URL?>/animelist/addConfig" method="post" class="w-100 d-flex flex-wrap form">
                            <div class="form-group col-sm-6">
                              <label for="animetitle">Anime Title</label>
                              <input type="text" class="form-control" id="animetitle" name="animetitle" required>
                            </div>

                            <div class="form-group col-sm-6">
                              <label for="animealternative">Alternative Title</label>
                              <input type="text" class="form-control" id="animealternative" name="animealternative">
                            </div>

                            <div class="form-group col-sm-6">
                              <label for="animeauthor">Author</label>
                              <input type="text" class="form-control" id="animeauthor" name="animeauthor">
                            </div>
                            
                            <div class="form-group col-sm-6">
                              <label for="animeepisodes">Episodes</label>
                              <input type="number" class="form-control" id="animeepisodes" name="animeepisodes" min="0">
                            </div>
                            
                            <div class="form-group col-sm-6">
                              <label for="animestatus">Status</label>
                              <input type="text" class="form-control" id="animestatus" name="animestatus">
                            </div>
                            
                            <div class="form-group col-sm-6">
                              <label for="animestarted">Started Airing</label>
                              <input type="date" class="form-control" id="animestarted" name="animestarted">
                            </div>
                            
                            <div class="form-group col-sm-6">
                              <label for="animefinished">Finished Airing</label>
                              <input type="date" class="form-control" id="animefinished" name="animefinished">
                            </div>
                            
                            <div class="form-group col-sm-12">
                              <label for="animedescription">Description</label>
                              <textarea name="animedescription" id="animedescription" rows="5" class="w-100"></textarea>
                            </div>

                            <div class="border-bottom border-edge mb-3 w-100">
                                <h5 class="h5">Additional</h5>
                            </div>

                            <div class="form-group col-sm-6">
                              <label for="animecredits">Credits</label>
                              <input type="text" class="form-control" id="animecredits" name="animecredits">
                            </div>

                            <div class="form-group col-sm-6">
                              <label for="animetype">Type Videos</label>
                              <input type="text" class="form-control" id="animetype" name="animetype">
                            </div>

                            <div class="form-group col-sm-6">
                              <label for="animeresolution">Resolution</label>
                              <input type="text" class="form-control" id="animeresolution" name="animeresolution">
                            </div>

                            <div class="modal-footer col-sm-12">
                              <a href="<?=BASE_URL?>/animelist" class="btn btn-danger">Close</a>
                              <button type="submit" class="btn btn-success form-update-anime">Add Anime</button>
                            </div>
                          </form>
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

    <?php if(isset($data['anime'])) { ?>
      <script>let anime = <?php echo json_encode($data['anime']) ?>;</script>
    <?php } ?>