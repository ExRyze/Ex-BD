    <!-- Bootstrap core JavaScript-->
    <script src="<?=BASE_URL;?>/public/vendor/jquery/jquery.min.js"></script>
    <script src="<?=BASE_URL;?>/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=BASE_URL;?>/public/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=BASE_URL;?>/public/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?=BASE_URL;?>/public/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=BASE_URL;?>/public/js/demo/chart-area-demo.js"></script>
    <script src="<?=BASE_URL;?>/public/js/demo/chart-pie-demo.js"></script>


    <script src="<?=BASE_URL;?>/public/js/game-box.js"></script>
    <script src="<?=BASE_URL;?>/public/js/review-box.js"></script>
    <script src="<?=BASE_URL;?>/public/js/jquery-3.6.0.min.js"></script>
    <?php if(isset($data['anime'])) { ?>
        <script>
        $('.form').attr("action", "<?=BASE_URL?>/animelist/updateConfig/"+anime.id_anime);
        $('#animetitle').val(anime.title_anime);
        $('#animealternative').val(anime.alternative_title_anime);
        $('#animeepisodes').val(anime.episodes_anime);
        $('#animedescription').val(anime.description_anime);
        $('#animeauthor').val(anime.author_anime);
        $('#animestatus').val(anime.status_anime);
        $('#animestarted').val(anime.date_release_anime);
        $('#animefinished').val(anime.date_finished_anime);
        $('#animecredits').val(anime.credits_anime);
        $('#animetype').val(anime.type_video_anime);
        $('#animeresolution').val(anime.resolution_anime);
        </script>
    <?php } ?>
</body>
</html>