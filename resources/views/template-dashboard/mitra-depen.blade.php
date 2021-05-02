                                        @section('token_ajax', '{{ csrf_token() }}')
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-3 col-form-label">Provinsi</label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <select name="province_id" id="sub_province_name" class="form-control formselect required">
                                                        <option value="" disabled selected>Pilih Provinsi</option>
                                                        @foreach ($provinces as $row)
                                                            <option value="{{$row->id}}">{{ucfirst($row->name)}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('nama')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-3 col-form-label">Kabupaten atau Kota</label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <select name="city_id" class="form-control formselect required" id="sub_province">
                                                        <option value="" disabled selected>Pilih Kabupaten atau Kota</option>
                                                    </select>
                                                </div>
                                                @error('nama')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        @section('script')
                                            <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
                                            <script>
                                                CKEDITOR.replace( 'alamat' );
                                                CKEDITOR.replace( 'deskripsi' );
                                            </script>
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
                                                                    `<option value="0" disabled selected>Pilih Kabupaten atau Provinsi</option>`
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
                                        @endsection