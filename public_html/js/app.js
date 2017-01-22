var app = angular.module("Stats",[]);

app.controller("mainCtrl",function($scope,$http){
  getInfo();

  function getInfo(){
    $http.get("http://trackyoself.org/api/food/?format=json").then(function(response){
      $scope.datas=response.data;
    });
    $http.get("http://trackyoself.org/api/memberinfo/").then(function(response){
      $scope.info=response.data;
    });

  }



});
