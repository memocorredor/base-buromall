$(function () {
    //////////////////
    //Side bar FAQS
    const sidebarButton = document.querySelector("[data-js=open-sidebar]");
    const sidebar = document.querySelector("[data-js=sidebar]");
    const main = document.querySelector("[data-js=main]");

    if (typeof (sidebarButton) != 'undefined' && sidebarButton != null) {

        sidebarButton.addEventListener("click", e => {
            e.preventDefault();
            sidebar.classList.toggle("sidebar--open");
            main.classList.toggle("main--slide-right");
        });

    }
});
