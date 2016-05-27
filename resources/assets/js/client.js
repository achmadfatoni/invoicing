var vm = new Vue({
    el: '#organization',
    data: {
        loading: false,
        name: 'Achmad Fatoni'
    },
    methods: {
        fetchClients: function(){
            this.$http.get('/clients', function (data) {
                this.$set('clients', data)
            });
        }
    },
    ready: function(){
        this.fetchClients()
    }
});