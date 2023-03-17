<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>the Edited Company </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>the Edited Company</h2>
                </div>
                <div class="pull-right">
                    <a href="{{ route('companies.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif

        <div class="card col-lg-4 p-0 mt-3 text-center">
            <div class="card-head">
                {{ $company->name }}
            </div>
            <div class="card-body">
                {{ $company->email }}
            </div>
            <div class="card-footer">
                {{ $company->address }}
            </div>
        </div>

    </div>
</body>

</html>
