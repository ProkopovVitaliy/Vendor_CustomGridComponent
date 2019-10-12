define([
    'ko',
    'Magento_Ui/js/grid/columns/column'
], function (ko, Column) {
    'use strict';

    return Column.extend({

        defaults: {
            bodyTmpl: 'Vendor_CustomGridComponent/grid/cells/custom',
        },


        initialize() {
            this._super();

            return this;
        },

        getLabel: function (record) {
            console.log(record);
            return `FullName:  ${record.firstname} ${record.lastname}`;
        },

    });
});
