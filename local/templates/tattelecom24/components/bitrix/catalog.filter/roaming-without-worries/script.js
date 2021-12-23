function ajaxFilter(myForm, data) {
    let wait = BX.showWait(myForm);  // показываем прелоадер в правом верхнем углу контейнер
    if (myForm !== null) {
        let ulr = location.pathname;

        $.ajax({
            url: ulr,
            data: data,
            type: 'POST',
            cache: false,
            dataType: "html",
            success: function(dataHtml){

                $('#roamingAjax').html(dataHtml);
                const select = document.getElementById("arrFilter_pf[COUNTRY]");
                window.initDropDownMenu();
                window.initSelect(select);

                if (data.del_filter){
                    BX.ajax.history.put(null, ulr);
                }
                else{
                    BX.ajax.history.put(null, ulr + '?' + data + '&ajax=N');
                }

                BX.closeWait(myForm, wait);
            }
        });
    }
}

BX.ready(function(){
    let myForm = document.querySelector(".roaming-without-worries__form");
    $('#roamingAjax').on('submit', '[name = arrFilter_form]', function (event) {
        event.preventDefault();
        let str = $(this).serialize();

        ajaxFilter(myForm, str);
    });
});