<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Einkaufsliste M151</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">

    <!-- BootstrapCDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Einkaufsliste</h1>

                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Anzahl</th>
                        <th>Name</th>
                        <th>Bearbeiten</th>
                        <th>Löschen</th>
                    </tr>

                    <?php
                        foreach ($items as $item) {
                            ?>
                            <tr>
                                <td><?php echo $item[0] ?></td>
                                <td><?php echo $item[1] ?></td>
                                <td><?php echo $item[2] ?></td>
                                <td><a href="/list?edit=<?php echo $item[0] ?>" class="btn btn-info">Bearbeiten</a></td>
                                <td><a href="/delete/<?php echo $item[0] ?>" class="btn btn-danger">X</a></td>
                            </tr>
                            <?php
                        }
                    ?>
                </table>

                <form action="/add" method="post">
                    <div class="form-group">
                        <label for="count">Anzahl</label>
                        <input type="number" class="form-control" id="count" name="count">
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <button type="submit" class="btn btn-primary">Hinzufügen</button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>