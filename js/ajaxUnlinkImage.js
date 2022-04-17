function start() {

    let arrowTakeAwayClick = document.querySelector(".c-js-back-page-icon-link");
    arrowTakeAwayClick.addEventListener("click", takeAwayDefault, false);


    let goback = document.querySelectorAll(".c-js-admin-confirm-addDeleteOrEdit-to-db-links");

    for (let i = 0; i < goback.length; i++) {


        goback[i].addEventListener("click", removeImage, false);

    }

    function removeImage() {



        let request = new XMLHttpRequest();
        request.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {


            }
        };
        request.open("GET", "../admin/ajaxUnlink.php", true);
        request.send();
    }

    function takeAwayDefault(e) {

        let stopArrowGoingBackAPage = e.preventDefault();
    }
}



window.addEventListener("load", start, false);