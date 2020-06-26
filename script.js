function ver() {
    var url;
    url = 'ver.php';
    jQuery.get(url, function(data){
        $('#mensagens').empty().append(data);
    });
}

    function enviar(){
        var url;
        var mensagem;
        var enviando;
        url = 'enviar.php';
        mensagem = $('#mensagem').val();
       
        $('#mensagem').on('keyup', function(e){
            if (e.which == 13){
                var m = $(this).val();
                m = mensagem.trim();
                if(m.length >= 1){
                    enviando = $.post(url,{mensagem:mensagem});
                    enviando.done(function(){
                        mensagem = '';
                        $('#mensagens').animate({ scrollTop: 9999 }, 100);
                        ver();
                    });
                }
            }  
        });
    }
