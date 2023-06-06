(function () {
    'use strict';

    $.widget('compare', {
        component: 'Swissup_Compare/js/compare',

        /** [create description] */
        create: function () {
            $.compare(this.options, this.element);
        }
    });

})();
