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
                    <a href="<?=BASE_URL?>/animelist/add" class="btn btn-primary mb-3">Add Anime</a>
                    <div class='card shadow mb-4'>
                        <div class='card-header py-3'>
                            <h6 class='m-0 font-weight-bold text-primary'>Data</h6>
                        </div>
                        <div class='card-body'>
                            <div class='table-responsive'>
                                <table class='table table-bordered' id='dataTable' cellspacing='0'>
                                    <thead>
                                        <tr class="text-center">
                                            <th class="text-nowrap">Id Anime</th>
                                            <th class="text-nowrap">Title</th>
                                            <th class="text-nowrap">Alternative Title</th>
                                            <th class="text-nowrap">Episodes</th>
                                            <th class="text-nowrap">Description</th>
                                            <th class="text-nowrap">Date Release</th>
                                            <th class="text-nowrap">Finish Airing</th>
                                            <th class="text-nowrap">Author</th>
                                            <th class="text-nowrap">Status</th>
                                            <th class="text-nowrap">Credits</th>
                                            <th class="text-nowrap">Type Videos</th>
                                            <th class="text-nowrap">Resolution</th>
                                            <th class="text-nowrap">Added Date</th>
                                            <th class="text-nowrap">Added By</th>
                                            <th class="text-nowrap">Updated Date</th>
                                            <th class="text-nowrap">Updated By</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr class="text-center">
                                            <th class="text-nowrap">Id Anime</th>
                                            <th class="text-nowrap">Title</th>
                                            <th class="text-nowrap">Alternative Title</th>
                                            <th class="text-nowrap">Episodes</th>
                                            <th class="text-nowrap">Description</th>
                                            <th class="text-nowrap">Date Release</th>
                                            <th class="text-nowrap">Finish Airing</th>
                                            <th class="text-nowrap">Author</th>
                                            <th class="text-nowrap">Status</th>
                                            <th class="text-nowrap">Credits</th>
                                            <th class="text-nowrap">Type Videos</th>
                                            <th class="text-nowrap">Resolution</th>
                                            <th class="text-nowrap">Added Date</th>
                                            <th class="text-nowrap">Added By</th>
                                            <th class="text-nowrap">Updated Date</th>
                                            <th class="text-nowrap">Updated By</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php foreach($data["animelist"] as $row):?>
                                        <tr>
                                            <td class="text-nowrap"><?=$row['id_anime']?></td>
                                            <td class="text-nowrap"><?=$row['title_anime']?></td>
                                            <td class="text-nowrap"><?=$row['alternative_title_anime']?></td>
                                            <td class="text-nowrap"><?=$row['episodes_anime']?></td>
                                            <td class="text-nowrap"><?=$row['description_anime']?></td>
                                            <td class="text-nowrap"><?=$row['date_release_anime']?></td>
                                            <td class="text-nowrap"><?=$row['date_finished_anime']?></td>
                                            <td class="text-nowrap"><?=$row['author_anime']?></td>
                                            <td class="text-nowrap"><?=$row['status_anime']?></td>
                                            <td class="text-nowrap"><?=$row['credits_anime']?></td>
                                            <td class="text-nowrap"><?=$row['type_video_anime']?></td>
                                            <td class="text-nowrap"><?=$row['resolution_anime']?></td>
                                            <td class="text-nowrap"><?=$row['added_date']?></td>
                                            <td class="text-nowrap"><?=$row['added_by']?></td>
                                            <td class="text-nowrap"><?=$row['updated_date']?></td>
                                            <td class="text-nowrap"><?=$row['updated_by']?></td>
                                            <td class="text-nowrap">
                                                <div class="d-flex justify-content-center rounded">
                                                    <a href="" class="text-dark"><i class="cursor-pointer fas fa-info bg-success p-2 w-fit"></i></a>
                                                    <a href="<?=BASE_URL?>/animelist/update/<?=$row['id_anime']?>" class="text-dark"><i class="cursor-pointer fas fa-edit bg-warning p-2 w-fit"></i></a>
                                                    <a href="<?=BASE_URL?>/animelist/delete/<?=$row['id_anime']?>" class="text-dark"><i class="cursor-pointer fas fa-trash-alt bg-danger p-2 w-fit"></i></a>
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