<?php
if (session_id() === '')
    session_start();

$_SESSION['a'] = 1;
$message = $_SESSION['a'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>ex02</title>
</head>

<body>
    <h1><?php echo $message ?></h1>
    <input type="text" class="form-control one" placeholder="Mặt Hàng" aria-label="Username" aria-describedby="basic-addon1">
    <input type="text" class="form-control two" placeholder="Đơn Giá" aria-label="Username" aria-describedby="basic-addon1">
    <input type="text" class="form-control 3 three" placeholder="Số Lượng" aria-label="Username" aria-describedby="basic-addon1">
    <button class="btn btn-primary button" type="submit">Button</button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Mặt Hàng</th>
                <th scope="col">Đơn Giá</th>
                <th scope="col">Số Lượng</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>${data.one}</td>
                <td>${data.two}</td>
                <td>${data.three}</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
    <script>
        let one = document.querySelector('.one');
        let two = document.querySelector('.two');
        let three = document.querySelector('.three');
        let button = document.querySelector('.button');
        let data = {};
        one.onchange = (e) => {
            input = e.target.value;
            data.one = input;
            console.log(e.target.value)
        }

        two.onchange = (e) => {
            input = e.target.value;
            data.two = input;
            console.log(e.target.value)
        }

        three.onchange = (e) => {
            input = e.target.value;
            data.three = input;
            console.log(e.target.value)
        }

        button.onclick = (e) => {
            console.log(data);
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>