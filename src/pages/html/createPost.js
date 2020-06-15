$(function() {


    $('.input-0').on('change', function (e) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(".img-0").attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
    });

    $('.input-1').on('change', function (e) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(".img-1").attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
    });

    $('.input-2').on('change', function (e) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(".img-2").attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
    });

    $('.input-3').on('change', function (e) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(".img-3").attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
    });

    $('.input-4').on('change', function (e) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(".img-4").attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
    });

    $('.input-5').on('change', function (e) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(".img-5").attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
    });

    $('.input-6').on('change', function (e) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(".img-6").attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
    });

    $('.input-7').on('change', function (e) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(".img-7").attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
    });

    $('.input-8').on('change', function (e) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(".img-8").attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
    });

    $('.input-9').on('change', function (e) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(".img-9").attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
    });


    $('.delete-0').on('click', function () {
        $('.input-0').val('');
        $('.img-0').attr('src', '');
    });

    $('.delete-1').on('click', function () {
        $('.input-1').val('');
        $('.img-1').attr('src', '');
    });

    $('.delete-2').on('click', function () {
        $('.input-2').val('');
        $('.img-2').attr('src', '');
    });

    $('.delete-3').on('click', function () {
        $('.input-3').val('');
        $('.img-3').attr('src', '');
    });

    $('.delete-4').on('click', function () {
        $('.input-4').val('');
        $('.img-4').attr('src', '');
    });

    $('.delete-5').on('click', function () {
        $('.input-5').val('');
        $('.img-5').attr('src', '');
    });

    $('.delete-6').on('click', function () {
        $('.input-6').val('');
        $('.img-6').attr('src', '');
    });

    $('.delete-7').on('click', function () {
        $('.input-7').val('');
        $('.img-7').attr('src', '');
    });

    $('.delete-8').on('click', function () {
        $('.input-8').val('');
        $('.img-8').attr('src', '');
    });

    $('.delete-9').on('click', function () {
        $('.input-9').val('');
        $('.img-9').attr('src', '');
    });

});

