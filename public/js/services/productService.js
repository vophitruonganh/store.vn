// public/js/services/productService.js

angular.module('productService', [])

.factory('Product', function($http) {

    return {
        // get all the comments
        get : function() {
            return $http.get('/api/collection');
        },

        // save a comment (pass in comment data)
        save : function(productData) {
            return $http({
                method: 'POST',
                url: '/api/collection',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                data: $.param(productData)
            });
        },

        // destroy a comment
        destroy : function(id) {
            return $http.delete('/api/collection/' + id);
        }
    }

});