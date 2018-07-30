define([
    'jquery',
    'Swissup_Compare/js/jquery.floatThead'
], function ($) {
    'use strict';

    return function () {
        $('table.table-comparison').floatThead({
            position: 'absolute',
            zIndex: 1
        });


    };
});
