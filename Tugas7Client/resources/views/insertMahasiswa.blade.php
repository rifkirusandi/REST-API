<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
      <div class="">
        <form class="" action="http://localhost:8000/api/mahasiswa" method="post">
          <table>
            <tr>
              <td>Nama</td>
              <td>:</td>
              <td><input type="text" name="nama" value=""></td>
            </tr>
            <tr>
              <td>NIM</td>
              <td>:</td>
              <td><input type="text" name="nim" value=""></td>
            </tr>
            <tr>
              <td>Kelas</td>
              <td>:</td>
              <td><input type="text" name="kelas" value=""></td>
            </tr>
            <tr>
              <td>Semester</td>
              <td>:</td>
              <td><input type="number" name="semester" value=""></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td><input type="submit" name="" value="Insert"></td>
            </tr>
          </table>
        </form>
      </div>
    </body>
</html>
