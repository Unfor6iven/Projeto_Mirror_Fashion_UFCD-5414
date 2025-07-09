// Rotação do Banner com setInterval	    &&  	// Botão de Pause e Play

var banners = ["IMG/destaque-home.jpg", "IMG/destaque-home-2.jpg"];
var bannerAtual = 0;

var idTimer = null;											// 07/07/2025
var statusTimer = false;									// 07/07/2025

function trocaBanner() {
    bannerAtual = (bannerAtual + 1) % 2;
    // document.querySelector(".destaques img").src = banners[bannerAtual];     // JS Puro 08/07/2025
    $(".destaques img").attr("src", banners[bannerAtual]);                      // JQuery 08/07/2025
}

idTimer = setInterval(trocaBanner, 4000); 					// 07/07/2025

var statusTimer = true										// 07/07/2025

// const btn = document.querySelector("#play-pause");		// JS Puro 07/07/2025
$(document).ready(function () {
    const $btn = $("#play-pause");

    // btn.addEventListener("click", function () {			// JS Puro 07/07/2025
    //     if (statusTimer) {
    //         clearInterval(idTimer);
    //         statusTimer = false;
    //         btn.innerHTML = "&#9654;";
    //     } else {
    //         idTimer = setInterval(trocaBanner, 4000);
    //         statusTimer = true;
    //         btn.innerHTML = "&#9208;";
    //     }
    // });
    $btn.on("click", function () {                                              // JQuery 08/07/2025
        if (statusTimer) {
            clearInterval(idTimer);
            statusTimer = false;
            $btn.html("&#9654;");
        } else {
            idTimer = setInterval(trocaBanner, 4000);
            statusTimer = true;
            $btn.html("&#9208;");
        }
    });
});




// JQuery
$(".novidades, .mais-vendidos").addClass("painel-compacto");

$(".novidades button").click(function () {
    $(".novidades").removeClass("painel-compacto");
});

$(".mais-vendidos button").click(function () {
    $(".mais-vendidos").removeClass("painel-compacto");
});