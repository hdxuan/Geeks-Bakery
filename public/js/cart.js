function addToCart(userId, cakeId) {
    $documentRoot = document.getElementById('documentRoot').innerText;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // document.getElementById("demo").innerHTML = this.responseText;
            var response = JSON.parse(this.response);

            if (response.isSuccess) {
                document.getElementById('numOfCartId').innerText = response.numOfCart;
                laungh_toast("Added to cart suceess!");
            }
            else {
                laungh_toast("Can't add to cart!");
            }
        }
    };
    xhttp.open("GET", `${documentRoot}//Cart//addToCart?idcake=${cakeId}&iduser${userId}`, true);
    xhttp.send();
}

function launch_toast(messgase) {
    var x = document.getElementById("toast")
    document.getElementById("desc").innerText = messgase;
    x.className = "show";
    setTimeout(function () { x.className = x.className.replace("show", ""); }, 5000);
}