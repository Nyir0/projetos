$(window).on('load', function(){
    setTimeout($("#apresentacao").css("opacity", 1), 1500);
});
$(document).ready(function(){
    $("#bt_voltar").on("click",function(){
        $("#projetos").css("opacity",0)
        setTimeout(function(){$("#projetos").css("display","none");}, 500);
        setTimeout(function(){$("#apresentacao").css("display","flex");}, 1000);
        setTimeout(function(){$("#apresentacao").css("opacity",1);}, 1200);
    });
})
function ver_projetos(){  
    $("#apresentacao").css("opacity",0); 
    setTimeout(mostrar_projetos, 500);
}
function mostrar_projetos(){ 
    $("#apresentacao").css("display","none")
    $("#projetos").css("display","flex");
    setTimeout(function(){$("#projetos").css("opacity",1)}, 500);
}