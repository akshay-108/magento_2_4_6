var config = {
    config: {
        mixins: {
            'Magento_Checkout/js/action/set-shipping-information': {
                'Akshay_Checkoutstep/js/action/set-shipping-information-mixin': true
            }
        },

        map: {
            '*': {
              'Magento_OfflinePayments/js/view/payment/offline-payments':'Akshay_Checkoutstep/js/view/payment/offline-payments',
            }
        }
    
    }
};
