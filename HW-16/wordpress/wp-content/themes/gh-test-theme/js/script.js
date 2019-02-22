document.addEventListener("DOMContentLoaded", function () {
    let btn = document.getElementsByClassName('togl');
    console.log(btn);
    let ul = document.getElementById('cont');
    console.log(ul);

    btn[0].onclick = () => ul.style.display = (ul.style.display == "none") ? "flex" : "none";
    let photos = document.getElementsByClassName('popup-img');
    console.log(photos);
    for (let photo of photos) {
        let info = photo.parentElement.getElementsByClassName('info-popup')[0];
        let close = photo.parentElement.getElementsByClassName('roll')[0].getElementsByTagName('button')[0];
        info.style.display = "none";
        close.onclick = () => info.style.display = "none";
        photo.onclick = () => info.style.display = (info.style.display === "none") ? "block" : "none";
    }
    ;
});