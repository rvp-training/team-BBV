$(function () {
  
    //カウントするフィールドを監視
      $('#name, #pass').keyup(function () {
  
      //現在入力されている文字
      var name = $('#name').val();
      var pass = $('#pass').val();

      console.log(name);
      console.log(pass);

      //現在の文字数
      var count_name = name.length;
      var count_pass = pass.length;
  
      //処理分け
      if (count_name < 2 || count_pass != 6) {
        $('#button').prop('disabled', true);
  
      } else {
        $('#button').prop('disabled', false);
      }
    });

    

  });
  