let page = window.location.href;
var menuItem = document.getElementsByClassName("menuItem");
console.log(menuItem);

function clearActive() {
    for (item in menuItem) {
        console.log(item);
        menuItem[item].className = "menuItem";
    }
}

if (page.includes("comoAtuamos") || page.includes("parceiros")) {
    clearActive();
    document.getElementById("home").className += " active";
} else if (page.includes("ajudar")) {
    clearActive();
    document.getElementById("comoAjudar").className += " active";
} else if (page.includes("doar")) {
    clearActive();
    document.getElementById("doar").className += " active";
} else if (page.includes("noticia")) {
    clearActive();
    document.getElementById("noticia").className += " active";
} else if (page.includes("quemsomos")) {
    clearActive();
    document.getElementById("quemSomos").className += " active";
} else {
    clearActive();
    document.getElementById("home").className += " active";
}