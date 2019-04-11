if(typeof Slider=='undefined') {
    var Slider = {};
}
Slider = Class.create();
Slider.prototype = {
    initialize: function(config){
        this.config = config;

    },
    getAutoPlay: function(){
        return this.config.auto_play;
    },
    getSliderId: function() {
        return this.config.entity_id;
    },
    getSliderName: function () {
        return this.config.name;
    },
    getSliderStatus: function () {
        return this.config.status;
    },
    getEffect: function () {
        if(this.config.effect == false){
            return 'fade';
        }
        return this.config.effect;
    },

    getAnimateSpeed: function () {
        return this.config.animate_speed;
    },
    getIsIsDotsEnabled: function () {
        return this.config.is_dots_enabled;
    },
    getPerPage: function () {
        return this.config.per_page;
    },
    getBlocksFfter: function () {
        return this.config.blocks_after;
    },
    getSlidesIds: function () {
        return this.config.slides_ids;
    },
    getPauseOnHower: function () {
        return this.config.pause_on_hower;
    },
    getSlideType: function () {
        return this.config.slide_type;
    },
    getConfig: function(){
        return this.config;
    }
}
