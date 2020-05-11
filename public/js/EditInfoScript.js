$(".info-actions").attr("data-status", "fechado")

$(".info-actions").click(function() {
    actionEdit(this);
});

function actionEdit(alvo) {
    if($(alvo).attr("data-status") != "aberto") {
        
        openEdit(alvo);
    }else {
        closeEdit(alvo);
    }
}

function openEdit(alvo) {
    $(".info-actions").attr("data-status", "fechado")
    $(alvo).attr("data-status", "aberto")

    $(".info-actions").removeClass("actions-active")
    $(alvo).addClass("actions-active");
}

function closeEdit(alvo) {
    
    $(".info-actions").attr("data-status", "fechado")
    $(alvo).removeClass("actions-active");
}
