var Param = new FormData()

function SentenciaAjax( Url, Param, Function ) {
    $.ajax( {
        url : Url,
        data: Param,
        dataType: 'json',
        type: 'POST',
        async: false,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function(){
            //
        },
        success: function( respuesta ){
            Function( respuesta )
        },
        complete: function(){
            //
        },
        error: function( Error ){
            console.log( Error )
        }
    } )
}

function MsgDanger( Mensaje ){
    console.log( Mensaje )
}