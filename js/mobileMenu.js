function start(e) {

    console.log(e.target);

    let hamburger = document.querySelector(".c-js-mobile-menu-hamburger-for-fat-fingers");
    let body = document.body;

    let exitHamburgerMenu = document.querySelector(".c-js-fixed-mobile-screen-hamburger-exit-container");

    console.log(window.location.pathname);

    let bigScreenNavMenuListParent = document.querySelector(".c-big-screen-nav-list");

    let mobileScreenNavMenuListParent = document.querySelector(".c-fixed-mobile-screen-nav-menu-list");

    let parentNavMenuArray = [mobileScreenNavMenuListParent, bigScreenNavMenuListParent];

    let splitTheUrlIntoArray = window.location.href.split("/");
    console.log(splitTheUrlIntoArray);

    let findTheAdminLinkBig = e.target.links[15];
    let findTheAdminLinkMobile = e.target.links[8];




    if (splitTheUrlIntoArray[4] === "admin") {

        findTheAdminLinkBig.classList.add("c-fixed-mobile-screen-list-item-links--active");
        findTheAdminLinkMobile.classList.add("c-fixed-mobile-screen-list-item-links--active");
    }

    for (var i = 0; i < parentNavMenuArray.length; i++) {

        let mobileLinks = parentNavMenuArray[0].querySelectorAll(".c-fixed-mobile-screen-list-item-links");
        let desktopLinks = parentNavMenuArray[1].querySelectorAll(".c-big-screen-list-item-links");

        for (var j = 0; j < mobileLinks.length; j++) {

            console.log(mobileLinks[j].href);
            console.log(window.location);

            if (mobileLinks[j].href === window.location.href) {

                mobileLinks[j].classList.add("c-fixed-mobile-screen-list-item-links--active");
            }

        }

        for (var k = 0; k < desktopLinks.length; k++) {
            console.log(desktopLinks[k].href);
            console.log(window.location.href);


            if (desktopLinks[k].href === window.location.href) {

                desktopLinks[k].classList.add("c-fixed-mobile-screen-list-item-links--active");
            }
        }
    }


    // list items to go to the correct part on the page and to close the menu//











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




}









window.addEventListener("load", start, false);