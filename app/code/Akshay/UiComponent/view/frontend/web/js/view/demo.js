define([
    'uiComponent',
    'ko'
], function (uiComponent, ko) {
    return uiComponent.extend({
        // set initial time value
        _currentTime: ko.observable("Loading..."),

        initialize: function()
        {
            // execute parent constructor
            this._super();
            // update time every seconds
            setInterval(this.updateTime.bind(this), 1000);
        },

        getTime: function(){
            return this._currentTime;
        },

        updateTime: function () {
            this._currentTime(new Date());   
        }
    })
});