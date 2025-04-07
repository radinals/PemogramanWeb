
const tombolScroll = document.getElementById("btn_keatas");

function tampilkan(elemen) {
    elemen.classList.remove("hidden");
    elemen.classList.add("shown");
}

function sembunyikan(elemen) {
    elemen.classList.remove("shown");
    elemen.classList.add("hidden");
}

window.onscroll = function() {
    if(document.body.scrollTop > 500 || document.documentElement.scrollTop > 500)
        tampilkan(tombolScroll)
    else
        sembunyikan(tombolScroll)
}

tombolScroll.onclick = function() {
    window.scrollTo({top: 0, behavior: 'smooth'});
}
