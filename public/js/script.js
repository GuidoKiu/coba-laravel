$(function ()
{
    $('.tombolTambahData').on('click', function ()
    {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#id').val('');
        $('#nama').val('');
        $('#nim').val('');
        $('#email').val('');
        $('#umur').val('');
        $('#prodi').val('');

    });

    $('.tampilModalUbah').on('click', function ()
    {
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http:///localhost/BELAJAR/phpmvc/public/mahasiswa/ubah');

        const id = $(this).data('id');

        $.ajax
            (
                {
                    url: 'http://localhost/BELAJAR/phpmvc/public/mahasiswa/getubah',
                    data: { id: id },
                    method: 'post',
                    dataType: 'json',
                    success: function (data)
                    {
                        $('#id').val(data.id);
                        $('#nama').val(data.nama);
                        $('#nim').val(data.nim);
                        $('#email').val(data.email);
                        $('#umur').val(data.umur);
                        $('#prodi').val(data.prodi);
                    }

                }
            );
    });


    // const keyword = document.getElementById('keyword');
    // const tombolcari = document.getElementById('tombolCari');
    // const container = document.getElementById('containerGuido');

    // keyword.addEventListener('keyup', function()
    // {
    //     const xhr = new XMLHttpRequest();

    //     xhr.onreadystatechange = function()
    //     {
    //         if(xhr.readyState == 4 && xhr.status == 200)
    //         {
    //             container.innerHTML = xhr.responseText;
    //         }
    //     }

    //     xhr.open('GET', 'ajax/coba.txt?keyword='+keyword.value,true);
    //     xhr.send();

    // })
});