// public/js/controllers/mainCtrl.js

angular.module('productController', [])

// inject the Product service into our controller
.controller('productController', function($scope, $http, Product) {
    // object to hold all the data for the new Product form
    $scope.ProductData = {};

    // loading variable to show the spinning loading icon
    $scope.loading = true;

    // get all the Products first and bind it to the $scope.Products object
    // use the function we created in our service
    // GET ALL ProductS ==============
    Product.get()
        .success(function(data) {
            $scope.Products = data;
            $scope.loading = false;
        });

    // function to handle submitting the form
    // SAVE A Product ================
    $scope.submitProduct = function() {
        $scope.loading = true;

        // save the Product. pass in Product data from the form
        // use the function we created in our service
        Product.save($scope.ProductData)
            .success(function(data) {

                // if successful, we'll need to refresh the Product list
                Product.get()
                    .success(function(getData) {
                        $scope.Products = getData;
                        $scope.loading = false;
                    });

            })
            .error(function(data) {
                console.log(data);
            });
    };

    // function to handle deleting a Product
    // DELETE A Product ====================================================
    $scope.deleteProduct = function(id) {
        $scope.loading = true;

        // use the function we created in our service
        Product.destroy(id)
            .success(function(data) {

                // if successful, we'll need to refresh the Product list
                Product.get()
                    .success(function(getData) {
                        $scope.Products = getData;
                        $scope.loading = false;
                    });

            });
    };

});