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
});