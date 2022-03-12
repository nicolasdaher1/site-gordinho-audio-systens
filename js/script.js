//Função enquanto a página é carregada
function carregaPagina(){
    document.getElementById('carregamento').style.opacity = '0';
    setInterval(function(){
        document.getElementById('carregamento').style.display = 'none';
    }, 500);
        
}
//Função dos elementos entrando na tela
var $target = $('.anime'),
    animationClass = 'anime-start';
    offset = $(window).height() * 3/4;
function animeScroll(){
    var documentTop = $(document).scrollTop();

    $target.each(function(){
        let itemTop = $(this).offset().top;
        if(documentTop > itemTop - offset){
            $(this).addClass(animationClass);
        } else{
            $(this).removeClass(animationClass);
        };
    });
};
//Função redirecionar links
function redirecionar(link){
    window.open(link,"_blank");
};
//Função opacidade barra de navegação
function opacidade_barra(){
    if(scrollY > 90){
        document.querySelector('nav').style.backgroundColor = 'rgba(0,0,0,0.7)';
    } else {
        document.querySelector('nav').style.backgroundColor = 'rgba(0,0,0,1)';
    };
};

//On click dos botões do WhatsApp
for(let i = 0; i < 2; i++){
    document.querySelectorAll('.btn-whatsapp')[i].addEventListener('click',function(){
        redirecionar('https://bit.ly/gordinhoaudiosystens');
    });
};
//On click do botão do Instagram
document.getElementById('btn-instagram').addEventListener('click',function(){
    redirecionar('https://www.instagram.com/gordinho.audio.systens/');
});
//On click do botão do Facebook
document.getElementById('btn-facebook').addEventListener('click',function(){
    redirecionar('https://www.facebook.com/gordinho.audio.systens');
});
//On Key up telefone
document.getElementById('telefone').addEventListener('keyup',function(){
    var value = document.getElementById('telefone').value;
    if(value.length == 11){
        var formatted = value.replace(/^(\d{2})(\d{5})(\d{4}).*/,"($1) $2-$3");
        document.getElementById('telefone').value = formatted;
    };
});
//Atribuindo função a barra de navegação
window.addEventListener('scroll',function(){
    opacidade_barra();
    animeScroll();
});
//Atribuindo função enquanto carrega pagina
window.addEventListener('load',function(){
    carregaPagina();
})

//Slick
$('.area-marcas').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000
});