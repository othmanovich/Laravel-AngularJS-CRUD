<!DOCTYPE html>
<html lang="en-US" ng-app="employeeRecords">

@include('includes.head')

@include('includes.nav')

<body class="container">

    <div class="row">
        <div class="col-sm-12">
            <h2>Employees</h2>

            @include('employees.list')

        </div>
    </div>

@include('includes.scripts')

</body>

<p class="text-center text-muted">2017 Leandro Pereira | github.com/lepereira</p>

</html>