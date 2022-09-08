$(function(){

    $BASEURL = "/portofolio/Ex-BD";
 
    $('.tampilModalUbahUser').on('click', function(){
        $('#formModalLabel').html("Edit User Datas");
        $('.modal-footer button[type=submit]').html("Edit Datas");
        $('.modal-body form').attr('action', $BASEURL+'/userlists/ubah');
    
        const id = $(this).data('id');
        $.ajax({
            url: $BASEURL+'/userlists/getUbah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $("#id").val(data.id);
                $('#username').val(data.Username);
                $('#email').val(data.email);
                $('#password').val(data.Password);
                $('#role').val(data.role);
                console.log(data);
            }
        });
    
       }); 

       $('.modalAddAnime').on('click', function(){
        $('.modal-body form').attr('action', $BASEURL+'/animelist/add');
        $('#formModalLabel').html("Add Anime Data");
        $('.modal-footer button[type=submit]').html("Add Anime");
        $('#animetitle').val("");
        $('#animealternative').val("");
        $('#animeauthor').val("");
        $('#animestatus').val("");
        $('#animeepisodes').val("");
        $('#animestarted').val("");
        $('#animefinished').val("");
        $('#animedescription').val("");
        // Additional
        $('#animecredits').val("");
        $('#animetype').val("");
        $('#animeresolution').val("");
    }); 

    $('.tampilModalTambahUser').on('click', function(){
        $('.modal-body form').attr('action', $BASEURL+'/userlists/tambah');
        $('#formModalLabel').html("Add Game Data");
        $('.modal-footer button[type=submit]').html("Add User");
        $('#id_user').val("");
        $('#username').val("");
        $('#email').val("");
        $('#password').val("");
        $('#role').val("");
    }); 
 
 });