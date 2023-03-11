<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    @include('layouts.navbar')
    <form action="" method="get">
        <table>
            <tr>
                <td><label for="">NAMA</label></td>
                <td>: <input type="text"></td>
            </tr>
            <tr>
                <td><label for="">password</label></td>
                <td>: <input type="password"> </td>
            </tr>
            
            <tr>
                <td><label for="">Laki laki</label></td>
                <td><input type="radio"name="kelamin"></td>

                <td><label for="">Perempuan</label></td>
                <td><input type="radio"name="kelamin"></td>
            </tr>
            <tr>
                <td><label for="">Deskripsi</label></td>
                <td><textarea cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
                <td><label for="">SD</label></td>
                <td><input type="checkbox" name="sd"></td>
            </tr>
            <tr>
                <td><label for="">SMP</label></td>
                <td><input type="checkbox" name="smp"></td>
            </tr>
            <tr>
                <td><label for="">SMK</label></td>
                <td><input type="checkbox" name="smk"></td>
            </tr>
            <tr>
                <td><label for="">Pekerjaan</label></td>
                <td>
                <select>
                    <option>tentara</option>
                    <option>polisi</option>
                    <option>dokter</option>
                </select>
                </td>
            </tr>
            <tr>
                <td><button type="submit">SUBMIT</button></td>
            </tr>
        
    </form>
</body>
</html>