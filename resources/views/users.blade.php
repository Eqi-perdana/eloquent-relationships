<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eloquent Relationships : Relasi One to One & Many To Many</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center"><a href="https://santrikoding.com">www.santrikoding.com</a></h3>
                <h5 class="text-center my-4">Eqii perdanaa</h5>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th>Nama User</th>
                        <th>Nomor Telepon</th>
                        <th>Roles</th>
                        <tr>
                            <td>Eqi Perdana</td>
                            <td>083184136574</td>
                            <td>Qii</td>
                        </tr>
                        <tr>
                            <td>Diandra Andryansiah</td>
                            <td>0882000315002</td>
                            <td>Hurang</td>
                        </tr>
                        <tr>
                            <td>Satrio Nugroho</td>
                            <td>081280230162</td>
                            <td>Satrio kun</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone->phone }}</td>
                            <td>
                                @foreach ($user->roles()->get() as $role)
                                <button class="btn btn-sm btn-primary me-2">{{ $role->name }}</button>
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>