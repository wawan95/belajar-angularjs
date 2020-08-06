<!DOCTYPE html>
<html ng-app="testApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="angular.min.js"></script>
    <title>Document</title>
</head>
<body>
    <!-- <input type="text" ng-model="namax" > <br> 
    {{namax}} -->

    <!-- <div ng-init="data =[]"></div> -->
    <div ng-controller="dataOrang">

    <input type="text" ng-model="hasil">
    <ul>
        <li ng-repeat = "dn in data | filter:hasil | orderBy: 'nama' ">
            {{ dn.nama | uppercase}} Kota:{{ dn.kota | lowercase }}
        </li>
    </ul>
    </div>
    <script>
        var test = angular.module('testApp',[]);
        //controller
        test.controller('dataOrang' , function($scope){

            $scope.data = [{nama:'Hilman', kota:'Makasar'},
                            {nama:'Tiqa', kota:'Bandung'},
                            {nama:'Anisa', kota:'Kendari'}];
        })
    </script>
</body>
</html>