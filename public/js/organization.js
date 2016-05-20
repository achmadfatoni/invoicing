var vm = new Vue({
    el: '#organization',

    data: {
        loading: false,
    },
    methods: {
        save: function(){
            this.loading = true;
        },
    },
    ready: function(){
    }
});