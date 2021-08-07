function addToCart(userId, cakeId) {
    if (userId == 0) {
        launch_toast("Please login to add cake!");
        return;
    }

    var documentRoot = document.getElementById('documentRoot').innerText;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {
            var response = JSON.parse(this.response);
            if (response.isSuccess == true) {

                document.getElementById('numInCartID').innerText = response.numInCart;
                launch_toast("Added to cart suceess!");
            }
            else {
                launch_toast("Can't add to cart!");

                console.error(response.error);

            }
        }

    };
    xhttp.open("GET", `${documentRoot}//Cart//addToCart?idcake=${cakeId}&iduser=${userId}`, true);
    xhttp.send();
}

function launch_toast(message) {
    var x = document.getElementById("toast");
    document.getElementById("desc").innerText = message;

    x.className = "show";
    setTimeout(function () {
        x.className = x.className.replace("show", "");
    }, 5000);
}