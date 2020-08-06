<!DOCTYPE html>
<html ng-app="testApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/angular.min.js"></script>
    <script src="js/angular.min.js.map"></script>
<!--     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script> -->
    <script src="js/angular-route.js"></script>
    <title>Document</title>
</head>
<body>
    <!-- Custum directive: 1 element 2. Attribut  -->
    <div header-title></div>
    <!-- <div ng-include="'header.php'"></div> -->
    <div ng-view></div>
    <div part-title></div>
    <script>
        //module angular
        var test = angular.module('testApp', ['ngRoute']);

        test.directive('headerTitle',function(){
            return{
                restirct : 'A', // E : element A: atribut
                templateUrl :'header.php',
            }
        });
        test.directive('partTitle',function(){
            return{
                restirct : 'A', // E : element A: atribut
                templateUrl :'part.php',
                controller : function($scope){
             
                $scope.data = [{nama:'Hilman', kota:'Makasar'},
                                {nama:'Tiqa', kota:'Bandung'},
                                {nama:'Anisa', kota:'Kendari'}];
                } 
            };
        });
        //route
        test.config(function($routeProvider){
            
            $routeProvider
            .when('/tambahinfo',{
                templateUrl : 'index2.php',
                controller : 'add'
            })
            $routeProvider
            .when('/kontak',{
                templateUrl : 'kontak.php'
            })
            .otherwise({redirectTo: '/'})
        }) ;   

        test.controller('add', function($scope){
            $scope.tambahData = function(){
                $scope.data.push({
                    nama : $scope.databaru.nama,
                    kota : $scope.databaru.kota,
                });
            };
        });
        
        

    </script>
</body>
</html>