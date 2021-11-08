window.addEventListener("load", function() {
    btn = document.getElementsByClassName("toggle-collapse")[0]
    btn.addEventListener("click", show_hide)

})

function show_hide() {
    document.getElementsByClassName("navbar-collapse")[0].classList.toggle("collapse")
}

window.onscroll = function() {
    if (window.scrollY >= 5) {
        if (!document.getElementById("H").classList.contains("hide_bg")) {
            document.getElementById("H").classList.add("hide_bg")
        }
    } else if (window.scrollY <= 5) {
        if (document.getElementById("H").classList.contains("hide_bg")) {
            document.getElementById("H").classList.remove("hide_bg")
        }
    }
}