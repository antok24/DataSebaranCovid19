        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="text-center">
                    <h3>Data Sebaran Virus Corona Indonesia & Dunia <br> <h5 style="color: blueviolet">Develop by Antok@tanpaspasi.com</h5></h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card bg-danger img-card shadow">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <p class="text-white mb-0">TOTAL POSITIF</p>
                                <h2 class="mb-0 number-font">{{ $positif['value'] }}</h2>
                                <p class="text-white mb-0">ORANG</p>
                            </div>
                            <div class="ml-auto"> <img src="../uploads/sad-u6e.png" width="50" height="50" alt="Positif"> </div>
                        </div>
                    </div>
                </div>
            </div><!-- COL END -->
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card bg-success img-card shadow">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <p class="text-white mb-0">TOTAL SEMBUH</p>
                                <h2 class="mb-0 number-font">{{ $sembuh['value'] }}</h2>
                                <p class="text-white mb-0">ORANG</p>
                            </div>
                            <div class="ml-auto"> <img src="../uploads/happy-ipM.png" width="50" height="50" alt="Positif"> </div>
                        </div>
                    </div>
                </div>
            </div><!-- COL END -->
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card bg-secondary img-card shadow">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <p class="text-white mb-0">TOTAL MENINGGAL</p>
                                <h2 class="mb-0 number-font">{{ $meninggal['value'] }}</h2>
                                <p class="text-white mb-0">ORANG</p>
                            </div>
                            <div class="ml-auto"> <img src="../uploads/emoji-LWx.png" width="50" height="50" alt="Positif"> </div>
                        </div>
                    </div>
                </div>
            </div><!-- COL END -->
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card  bg-warning img-card shadow">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <p class="mb-0 number-font">INDONESIA</p>
                                @foreach ($indonesia as $item)
                                <p class="mb-0" style="font-size: 14px; color:black"><b>{{ $item['positif'] }}</b> POSITIF, <b>{{ $item['sembuh'] }}</b> <br>SEMBUH, <b>{{ $item['meninggal'] }}</b> MENINGGAL</p>
                                @endforeach
                            </div>
                            
                            <div class="ml-auto"> <img src="../uploads/indonesia-PZq.png" width="50" height="50" alt="Positif"> </div>
                        </div>
                    </div>
                </div>
            </div><!-- COL END -->
            <div class="col text-center mt-3"><p>Sumber data : Kementerian Kesehatan &amp; JHU. Update terakhir : {{ date('j F Y', strtotime($tgl)) }} | {{ $waktu }} WIB</p></div>
        </div>

        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="card shadow">
                    <table class="table-striped table-inverse">
                        <thead class="bg-primary text-light">
                            <tr>
                                <th scope="col"><center>#</center></th>
                                <th scope="col">Provinsi</th>
                                <th scope="col"><center>Positif</center></th>
                                <th scope="col"><center>Sembuh</center></th>
                                <th scope="col"><center>Meninggal</center></th>
                            <tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            @foreach ($provinsi as $item)
                            <tr>
                                <th scope="row" width="5%"><center>{{ $no++ }}</center></th>
                                <td>{{ $item['attributes']['Provinsi'] }}</td>
                                <td><center>{{ $item['attributes']['Kasus_Posi'] }}</center></td>
                                <td><center>{{ $item['attributes']['Kasus_Semb'] }}</center></td>
                                <td><center>{{ $item['attributes']['Kasus_Meni'] }}</center></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>