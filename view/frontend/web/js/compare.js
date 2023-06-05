(function (factory) {
    'use strict';

    if (typeof define === 'function' && define.amd) {
        define(['jquery'], factory);
    } else {
        $.compare = factory($);
    }
}(function ($) {
    'use strict';

    function hasDifference (tr) {
        var isDifference = false;

        $('td', tr).each(function (index, td) {
            var nextTd = $(td).next('td'),
                tdValue,
                nextTdValue;

            if (nextTd.length) {
                tdValue = $('div.value', td).text().trim();
                nextTdValue = $('div.value', nextTd).text().trim();
                // console.log(tdValue + ' === ' + nextTdValue);
                if (tdValue !== nextTdValue) {
                    isDifference = true;
                }
            }
        });

        return isDifference;
    }


    let rowsArray = $('.table-comparison tbody tr'),
        btnDifferences = $('[name="btn_differences"]');

    $(btnDifferences).on("click", function () {

        if ($(this).is(':checked')) {
            rowsArray.each(function (index, trElement) {
                let attribute = $('div.value', trElement);
                if (attribute.length) {
                    if (!hasDifference(trElement)) {
                        $(trElement).hide(300);
                    }
                }
            });
        } else {
            rowsArray.each(function (index, trElement) {
                $(trElement).show(300);
            });
        }

    });

}));
