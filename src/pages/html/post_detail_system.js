$(function(){

    //カウントするフィールドを監視
    $('#comment textarea').keyup(function(){
 
        //現在入力されている文字
        var text = $('#comment textarea').val();
 
        //現在の文字数
        var count = text.length;
 
        //処理分け
        if(count == 0){
     
            //字を消して0文字となった場合。
            $('#send').css('opacity', 0.4);
            $('#semd').prop('disable', true);

        } else {
 
            $('#send').css('opacity', 1);
            $('#semd').prop('disable', falth);
        }
    });
    //スライドショー
  $('.index-btn').click(function () {
    $('.active').removeClass('active');
    var clickedIndex = $('.index-btn').index($(this));
    $('.display').eq(clickedIndex).addClass('active');
  });

  $('.move-go').click(function () {
    $('.move1').hide();
    $('.move2').show();
    $('.move-go').hide();
    $('.move-back').show();
  });

  $('.move-back').click(function () {
    $('.move2').hide();
    $('.move1').show();
    $('.move-back').hide();
    $('.move-go').show();
  });

  if ($('.index-btn').length <6){
    $('.move-go').hide();
  }


});