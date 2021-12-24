function start() {

    let hamburger = document.querySelector(".c-js-mobile-menu-hamburger-for-fat-fingers");
    let body = document.body;

    let exitHamburgerMenu = document.querySelector(".c-js-fixed-mobile-screen-hamburger-exit-container");


    // list items to go to the correct part on the page and to close the menu//



    //Get the current page path.
    var patharray = location.pathname.split("/");
    var foldername = patharray[0];

    console.log(foldername);
    // If on the root folder of the site, highlight the first link.
    if (foldername == "" || foldername == "metallicaTourProject/public/project.php") {
        document.getElementById("c-fixed-home").classList.add("c-fixed-mobile-screen-list-item-links--active");
    } else {
        //Otherwise, loop through the links and put classname on
        // the one whose folder name matches foldername variable.
        let listLinks = document.querySelectorAll(".c-fixed-mobile-screen-list-item-links");

        for (i = 1; i < listLinks.length; i++) {
            if (listLinks[i].getAttribute("href").indexOf(foldername) > -1) {
                redActive(listLinks[i]);
            }
        }
    }




    // end of internal links to page //



    exitHamburgerMenu.addEventListener("click", closeMobileNavMenu, false);

    function closeMobileNavMenu() {



        body.classList.remove("l-basic-grid-js-mobile-nav-menu");






    }



    hamburger.addEventListener("click", mobileNavMenu, false);

    function mobileNavMenu() {

        body.classList.add("l-basic-grid-js-mobile-nav-menu");

        /*
                for (let i = 0; i < listLinks.length; i++) {


                    listLinks[i].addEventListener("click", redActive, false);





                    listLinks[i].addEventListener("click", closeMobileNavMenu, false);



                }

        */


    }

    function redActive(makeListRed) {
        console.log(makeListRed);


        let makeRed = makeListRed.classList.add("c-fixed-mobile-screen-list-item-links--active");



    }




}









window.addEventListener("load", start, false);