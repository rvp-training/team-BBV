$(function () {
  
    //カウントするフィールドを監視
      $('').keyup(function () {
  
      //現在入力されている文字
      var text = $('#comment textarea').val();
  
      //現在の文字数
      var count = text.length;
  
      //処理分け
      if (count == 0) {
        //字を消して0文字となった場合。
        $('#send').prop('disabled', true);
  
      } else {
        $('#send').prop('disabled', false);
      }
    });
});
  