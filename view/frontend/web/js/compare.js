define([
    'jquery',
    'Swissup_Compare/js/jquery.floatThead'
], function ($) {
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

    return function () {
        var rowsArray = [];

        rowsArray = $('.table-comparison tbody tr');

        $('#cb5').change(function () {
            if ($(this).is(':checked')) {
                rowsArray.each(function (index, trElement) {
                    if ($('div.value', trElement).length) {
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

        $('table.table-comparison').floatThead({
            position: 'absolute',
            zIndex: 1
        });
    };
});
