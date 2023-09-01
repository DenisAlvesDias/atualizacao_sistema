var app = angular.module('app', [])

app.controller('relatorio_pedido', function($scope, $http, $window, $timeout) {
  
        $scope.relatorio = angular.fromJson(localStorage.getItem("relatorio"));
      
   
    })
