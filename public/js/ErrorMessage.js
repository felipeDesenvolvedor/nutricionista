function errorShow(message) {
    $(".erro").text(message);

    $(".erro-container").fadeIn(500, function(){
        $(this).addClass("erro-show");
    });
    
    setTimeout(function() {
        $(".erro-container").fadeOut(500, function(){
            $(this).removeClass("erro-show");
        });   
    }, 4000);
}


$("#tabela-pacientes").click(function(event){
    console.log(event);
})

