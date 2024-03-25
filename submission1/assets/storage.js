const cacheKEY = "VISITOR_NUMBER";

if(typeof(Storage) !== "undefined") {
    if(localStorage.getItem(cacheKEY) === "undefined"){
        localStorage.setItem(cacheKEY, 0);
    }

    const kunjungan = document.querySelector("#kunjungan");
    const clearButton = document.querySelector("#clearstorage");

    window.onload = function() {
        let number = localStorage.getItem(cacheKEY);
        number++;
        localStorage.setItem(cacheKEY, number);
        kunjungan.innerText = localStorage.getItem(cacheKEY);
    };

    clearButton.addEventListener('click', function (event) {
        localStorage.removeItem(cacheKEY);
        location.reload();
    });
}
else {
    alert("Browser tidak mendukung web storage");
}