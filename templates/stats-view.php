<body ng-app="Stats">
  <div class="container-fluid">
    <div id="cont">
        <div class="jumbotron text-center">
            <h1>Track Yo Stats!</h1>
            <h2>Here you can find your food diary</h2>
        </div>
    </div>


    <div ng-controller="mainCtrl">
      <div class="row" id="rob" ng-repeat="data in datas"  ng-hide="data.highres==='localhost'">
          <div class="col-md-1">

          </div>
        <div class="col-md-5" >
          <h3>Nutritional Facts</h3>
          <p><strong>Name:</strong> {{data.name}}</p>
          <p><strong>Brand Name:</strong> {{data.brandName}}</p>
          <p><strong>Serving Quantity: </strong> {{data.servingQuantity}}</p>
          <p><strong>Serving Unit:</strong> {{data.servingUnit}}</p>
          <p><strong>Calories:</strong> {{data.calories}}</p>
          <p><strong>Carbs:</strong> {{data.carbs}}</p>
          <p><strong>Protein:</strong> {{data.protein}}</p>
          <p><strong>Fat:</strong> {{data.totalFats}}</p>
          <p><strong>Sugar:</strong> {{data.sugar}}</p>
          <p><strong>Cholesterol:</strong> {{data.cholesterol}}</p>
          <p><strong>Sodium:</strong> {{data.sodium}}</p>
        </div>
          <div class="col-md-1">

          </div>

        <div class="col-md-5">
          <h3>Product Image</h3>
          <img src = {{data.highres}} height="250" width="250">
        </div>
    </div>

    </div>
  </div>

