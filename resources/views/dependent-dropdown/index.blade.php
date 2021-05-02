<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <select name="provinsi_id" id="sub_province_name" class="form-control formselect required">
            <option value="" disabled selected>Select Main Province</option>
            @foreach ($provinces as $row)
                <option value="{{$row->id}}">{{ucfirst($row->name)}}</option>
            @endforeach
        </select>

        <select name="" class="form-control formselect required" id="sub_province">

        </select>
        <!-- Optional JavaScript -->
        <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
        
        <script>
            $(document).ready(function () {
                $("#sub_province_name").on("change", function () {
                    let id = $(this).val();
                    $("#sub_province").empty();
                    $("#sub_province").append(
                        `<option value="0" disabled selected>Processing...</option>`
                    );
                    $.ajax({
                        type: "GET",
                        url: "dependentEdit/" + id,
                        success: function (response) {
                            var response = JSON.parse(response);
                            console.log(response);
                            $("#sub_province").empty();
                            $("#sub_province").append(
                                `<option value="0" disabled selected>Select Sub Category*</option>`
                            );
                            response.forEach((element) => {
                                $("#sub_province").append(
                                    `<option value="${element["id"]}">${element["name"]}</option>`
                                );
                            });
                        },
                    });
                });
            });

        </script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>