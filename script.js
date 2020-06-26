
$(document).ready(function(){
    $('#mensagens').load("ver.php");
    var refreshId = setInterval( ver, 1000);
    $.ajaxSetup({ cache: false });
});

function ver() {
    var url;
    url = 'ver.php';
    jQuery.get(url, function(data){
        $('#mensagens').empty().append(data);
    });
}

function enviar(){
    var url;
    var enviando;
    url = 'enviar.php';
   
    $('#mensagem').on('keyup', function(e){
    
        if (e.which == 13){
           var mensagem = $('#mensagem').val();
           document.querySelector('#mensagem').value = '';
        
            if(mensagem.length >= 1){
                enviando = $.post(url,{mensagem:mensagem});
                enviando.done(function(){
                    $('#mensagem').val("");
                    $('#mensagens').animate({ scrollTop: 9999 }, 100);
                    ver();
                });
            }
        }  
    });
}