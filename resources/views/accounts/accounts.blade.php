<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPT Midterm Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script></head>
<body> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#"><h1>IPT Midterm Project</h1></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link" href="<?= url('/') ?>">Home</a>
                    <a class="nav-link" href="<?= url('/users') ?>">Users</a>
                    <a class="nav-link" href="<?= url('/accounts') ?>">Accounts</a>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Accounts</h1>

                <table class="table table-bordered">
                    <thead class="bg-primary">
                        <th>Account #</th>
                        <th>Account Name</th>
                        <th>Initial Invest</th>
                        <th>Date Started</th>
                    </thead>
                    <tbody>
                        <?php foreach ($accounts as $ac): ?>
                        <tr>
                            <td><?= $ac->id ?></td>
                            <td><?= $ac->acct_name ?></td>
                            <td><?= $ac->init_invest ?></td>
                            <td><?= $ac->start_date?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>