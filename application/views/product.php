<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product</title>

  <style>
    table,
    th,
    td {
      border: 1px solid black;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 15px;
    }
  </style>
</head>

<body>
  <table>
    <tr>
      <th>No</th>
      <th>Produt Name</th>
    </tr>
    <?php $no = 1;
    foreach ($products as $product) : ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $product ?></td>
      </tr>
    <?php endforeach ?>
  </table>
</body>

</html>