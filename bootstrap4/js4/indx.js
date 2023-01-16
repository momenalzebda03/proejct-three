function click() {

    var div_none = document.getElementById("div_none");
    div_none.style.marginTop = "1%";
    div_none.style.display = "block";
    setTimeout(() => {
        div_none.style.marginTop = "0%";
    }, 10);
}

document.getElementById("link").onclick = click;

function click1() {

    var div_none = document.getElementById("div_none");
    div_none.style.display = "none";
}

document.getElementById("link").ondblclick = click1;