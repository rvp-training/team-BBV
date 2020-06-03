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




  });

