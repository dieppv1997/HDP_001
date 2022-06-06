<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif !important;
        }
    </style>
</head>
<body>
<center><strong>Căn cước công dân</strong></center>
<table class="table">
    <tbody>
    <tr>
        <td>
            <strong>
                Số CCCD
            </strong>
            <br> {{ $identificationDetail->identity_card_number }}
        </td>
        <td></td>
    </tr>
    <tr>
        <td>
            <strong>
                Ngày cấp
            </strong><br>
            {{ date("d-m-Y", strtotime($identificationDetail->verify_at)) }}
        </td>
        <td></td>
    </tr>
    <tr>
        <td>
            <strong>
                Nơi cấp
            </strong><br>
            {{ $identificationDetail->area }}
        </td>
        <td></td>
    </tr>
    <tr>
        <td>
            <strong>Ảnh căn cước công dân</strong>
        </td>
        <td></td>
    </tr>
    <tr>
        <td>
            <img src="{{ $identificationImage[0] }}" width="250px" height="160px">
        </td>
        <td>
            <img src="{{ $identificationImage[1] }}" width="250px" height="160px">
        </td>
    </tr>
    </tbody>
</table>

</body>
</html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

