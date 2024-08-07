/*jshint browser:true jquery:true*/
/*global alert*/
define([
    'jquery',
    'mage/utils/wrapper',
    'Magento_Checkout/js/model/quote'
], function ($, wrapper, quote) {
    'use strict';

    return function (setShippingInformationAction) {

        return wrapper.wrap(setShippingInformationAction, function (originalAction) {
            var shippingAddress = quote.shippingAddress();
            var billingAddress = quote.billingAddress();
            if (shippingAddress['extension_attributes'] === undefined) {
                shippingAddress['extension_attributes'] = {};
            }

            if (billingAddress['extension_attributes'] === undefined) {
                billingAddress['extension_attributes'] = {};
            }

            shippingAddress['extension_attributes']['shipping_field'] = shippingAddress.customAttributes['shipping_field'];
            shippingAddress['extension_attributes']['billing_field'] = billingAddress.customAttributes['billing_field'];
            // pass execution to original action ('Magento_Checkout/js/action/set-shipping-information')
            return originalAction();
        });
    };
});
