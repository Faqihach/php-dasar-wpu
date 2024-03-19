<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Latihan 1</title>
    <style>
      .baris-ganjil {
        background-color: aquamarine;
      }
      .baris-genap {
        background-color: silver;
      }
    </style>
  </head>
  <body>
    <table border="1" cellpadding="10" cellspacing="0">
      <?php for ($i = 1; $i <= 5; $i++) : ?>
        <?php if ($i % 2 == 1) : ?>
            <tr class="baris-ganjil">
          <?php else : ?>
            <tr class="baris-genap">
        <?php endif ?>
          <?php for ($j = 1; $j <= 5; $j++) : ?>
            <td> <?= "kolom $i, baris $j" ?> </td>
          <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>
  </body>
</html>
