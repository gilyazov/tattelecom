// страница с новостями в 3 разделе
const yearSelect2 = document.querySelector("select[name=year]");
const monthSelect2 = document.querySelector("select[name=month]");

if (yearSelect2) {
    yearSelect2.addEventListener("change", (e) => {
        let self = e.target;
        let value = e.target.options[e.target.selectedIndex].value;
        let form = self.closest("form");

        location.href = '/press-center/press/?year=' + value;
    });
}

if (monthSelect2) {
    monthSelect2.addEventListener("change", (e) => {
        let self = e.target;
        let value = e.target.options[e.target.selectedIndex].value;
        let form = self.closest("form");

        form.submit();
    });
}