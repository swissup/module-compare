define([
    'jquery'
], function ($) {
    'use strict';

    var result;

    function hasDifference(tr) {
        var isDifference = false;

        $('td', tr).each(function (index, td) {
            var nextTd = $(td).next('td'),
                tdValue,
                nextTdValue;

            if (nextTd.length) {
                tdValue = $('div.value', td).text().trim();
                nextTdValue = $('div.value', nextTd).text().trim();

                if (tdValue !== nextTdValue) {
                    isDifference = true;
                }
            }
        });

        return isDifference;
    }

    result = function (config) {
        let table = config.table,
            tableRows = $(table + ' tbody tr'),
            btnDifferences = $('[name="btn_differences"]'),
            optionWindowPrintSelector = config.windowPrintSelector ?? '';

        $(btnDifferences).on('click', function () {
            if ($(this).is(':checked')) {
                tableRows.each(function (index, tr) {
                    let attributes = $('div.value', tr);

                    if (attributes.length) {
                        if (!hasDifference(tr)) {
                            $(tr).hide(300);
                        }
                    }
                });
            } else {
                tableRows.each(function (index, tr) {
                    $(tr).show(300);
                });
            }
        });

        $(optionWindowPrintSelector).on('click', function (e) {
            e.preventDefault();
            window.print();
        });
    };

    result.component = 'Swissup_Compare/js/compare';

    return result;
});
