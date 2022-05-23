document.addEventListener('DOMContentLoaded', () => {
    // страница роуминга
    const roamingTabs = document.querySelector(".roaming-tabs__select-wrapper");
    const roaminTabs = Array.from(document.querySelectorAll(".js-menu-tab-content"));

    if (roamingTabs) {
        roamingTabs.querySelector(".js-custom-select[name=roaming]");

        roamingTabs.addEventListener("change", (e) => {
            let self = e.target;
            let value = e.target.options[e.target.selectedIndex].value;

            roaminTabs.forEach( (tab) => {
                if (value === tab.dataset.menu) {
                    roaminTabs.forEach( (tab) => { tab.classList.remove("mod-show") });
                    tab.classList.add("mod-show");
                }
            });
        });
    }
});