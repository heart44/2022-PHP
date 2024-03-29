<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>부트스트랩</title>
</head>

<body>
    <div class="container py-4">
        <table class="table table-hover table-bordered border-primary table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td class="table-secondary">@mdo</td>
                </tr>
                <tr class="table-active">
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
        <hr>
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        ...
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        ...
                    </tr>
                    <tr class="align-bottom">
                        ...
                    </tr>
                    <tr>
                        <td>...</td>
                        <td>...</td>
                        <td class="align-top">This cell is aligned to the top.</td>
                        <td>...</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>