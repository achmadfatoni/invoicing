var vm = new Vue({
    el: '#organization',

    data: {
        loading: false,
        formInputs: {},
        formErrors: {},
    },
    methods: {
        submitForm: function(e) {
            console.log('submiited');
            this.loading = true;
            var form = e.srcElement;
            console.log(form);
            var action = form.action;
            console.log(action);

            var csrfToken = form.querySelector('input[name="_token"]').value;

            this.$http.post(action, this.formInputs, {
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    }
                })
                .then(function() {
                    console.log('submitted');
                })
                .catch(function (data, status, request) {
                    console.log(data);
                    var errors = data.data;
                    this.formErrors = errors;
                    this.loading = false;

                });
        }
    },
    ready: function(){
    }
});