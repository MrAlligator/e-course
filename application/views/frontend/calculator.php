<!-- ======= Contact Section ======= -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
<br><br><br>
    <div class="section-title">
        <h2>Kalkulator Harga Ekspor</h2>
        <p>Melakukan Perhitungan</p>
    </div>
<br>
<div class="row">
    <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
        <div class="php-email-form">
            <div class="section-title">
            <div class="card-header">
                <h4>Exworks Price<a href="#" data-bs-toggle="modal" data-bs-target="#exworks"> <i class="bx bx-help-circle"></i></a></h4>
                </div>
            </div>
                
<div class="row">
    <div class="form-group col-md-8">
        <label for="name"><h6>Harga Pabrik</h6></label><a href="#" data-bs-toggle="modal" data-bs-target="#harga-beli"> <i class="bx bx-help-circle"></i></a>
        <div class="input-group">
            <span class="input-group-text">Rp</span>
            <input type="number" name="harga_beli" class="form-control" value=0 id="harga_beli" min=0 required>
        </div>
    </div>
    <div class="form-group col-md-4">
        <label for="name"><h6>Keuntungan</h6></label><a href="#" data-bs-toggle="modal" data-bs-target="#ke-untungan"> <i class="bx bx-help-circle"></i></a>
        <div class="input-group">
            <input type="number" class="form-control" name="keuntungan" value=0 id="keuntungan" min=0 max=100 required>
            <span class="input-group-text">%</span>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="name"><h6>Satuan Barang</h6></label><a href="#" data-bs-toggle="modal" data-bs-target="#satuan-barang"> <i class="bx bx-help-circle"></i></a>
    <select type="number" name="harga_beli" class="form-control" required>
        <option>Kilograms</option>
        <option>TNE (TON)</option>
        <option>PCS</option>
        <option>Pack</option>
    </select>
</div>
<div class="form-group">
    <label for="name"><h6>Kurs / Nilai Tukar Mata Uang</h6></label><a href="#" data-bs-toggle="modal" data-bs-target="#kurss"> <i class="bx bx-help-circle"></i></a>
    <div class="input-group">
        <span class="input-group-text">Rp</span>
        <input type="number" class="form-control" name="kurs" id="kurs" value="14266" required>
    </div><br>
</div>
<div class="form-group">
    <label for="name"><h6>EXW [ Ex Works ] Price</h6></label>
    <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#kontener"> <i class="bx bx-help-circle"></i></a> -->
        <div class="input-group">
            <span class="input-group-text">USD</span>
            <input type="number" class="form-control" name="exw" id="exw" required disabled>
            <span class="input-group-text">per Kilogram</span>
        </div>
    </div>
<div class="text-center">
<button id="hitung_exw" class="btn btn-primary">Hitung</button>
</div>
    </div>
</div>
    <input type="number" class="form-control" name="biaya_kirim" id="biaya_kirim" required hidden>

<script>
$(document).ready(function($){
$('#hitung_exw').on('click',function(){
 var harga_beli = parseInt($('#harga_beli').val());
 var keuntungan = parseInt($('#keuntungan').val());
 var kurs = parseInt($('#kurs').val());
 untung = harga_beli*keuntungan/100;
 biaya = harga_beli+untung;
 total = biaya/kurs;
 $("#exw").val(total);
 $("#biaya_kirim").val(biaya);
});

});
</script>

    <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
        <div class="php-email-form">
            <div class="section-title">
            <div class="card-header">
                <h4>Inland Trucking and Port Charges</h4>
                <!-- <h6>Door to POL</h6> -->
            </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name"><h6>Biaya Jenis Container</h6></label><a href="#" data-bs-toggle="modal" data-bs-target="#kontener"> <i class="bx bx-help-circle"></i></a>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input id="container" type="number" value=0 min=0 name="container" class="form-control" value=0 required>
                        <select class="input-group-text">
                            <option>20"</option>
                            <option>40"</option>
                   </select>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="name"><h6>Biaya Pengemasan Tambahan</h6></label><a href="#" data-bs-toggle="modal" data-bs-target="#wrapping-cost"> <i class="bx bx-help-circle"></i></a>
                    <div class="input-group">
                    <span class="input-group-text">Rp</span>
                    <input id="wrapping_cost" type="number" value=0 min=0 class="form-control" name="wrapping_cost" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name"><h6>Biaya Dokumen Lainnya</h6></label><a href="#" data-bs-toggle="modal" data-bs-target="#biaya-dokumen"> <i class="bx bx-help-circle"></i></a>
                    <div class="input-group">
                    <span class="input-group-text">Rp</span>
                    <input id="document_ship" type="number" value=0 min=0 name="loading_fees" class="form-control" required>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="name"><h6>Biaya Pemuatan</h6></label><a href="#" data-bs-toggle="modal" data-bs-target="#biaya-pemuatan"> <i class="bx bx-help-circle"></i></a>
                    <div class="input-group">
                    <span class="input-group-text">Rp</span>
                    <input id="loading_fees" type="number" value=0 min=0 class="form-control" name="document_ship" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name"><h6>Admin Bank</h6></label><a href="#" data-bs-toggle="modal" data-bs-target="#admin-bank"> <i class="bx bx-help-circle"></i></a>
                    <div class="input-group">
                    <span class="input-group-text">Rp</span>
                    <input id="bank_draft" type="number" value=0 min=0 name="bank_draft" class="form-control" required>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="name"><h6>Biaya Pembuatan COO</h6></label><a href="#" data-bs-toggle="modal" data-bs-target="#biaya-coo"> <i class="bx bx-help-circle"></i></a>
                    <div class="input-group">
                    <span class="input-group-text">Rp</span>
                    <input id="certificate" type="number" value=0 min=0 class="form-control" name="certificate" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name"><h6>Biaya Dokumen Persetujuan</h6></label><a href="#" data-bs-toggle="modal" data-bs-target="#karantina"> <i class="bx bx-help-circle"></i></a>
                    <div class="input-group">
                    <span class="input-group-text">Rp</span>
                    <input id="phytosanitary" type="number" value=0 min=0 name="phytosanitary" class="form-control" required>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="name"><h6>Biaya Fumigasi</h6></label><a href="#" data-bs-toggle="modal" data-bs-target="#biaya-fumigasi"> <i class="bx bx-help-circle"></i></a>
                    <div class="input-group">
                    <span class="input-group-text">Rp</span>
                    <input id="fumigation" type="number" value=0 min=0 class="form-control" name="fumigation" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name"><h6>Biaya Pengiriman Pelabuhan</h6></label><a href="#" data-bs-toggle="modal" data-bs-target="#biaya-pengiriman"> <i class="bx bx-help-circle"></i></a>
                    <div class="input-group">
                    <span class="input-group-text">Rp</span>
                    <input id="domestic_shipping" type="number" value=0 min=0 name="domestic_shipping" class="form-control" required>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="name"><h6>Jasa Sewa Nama</h6></label><a href="#" data-bs-toggle="modal" data-bs-target="#jasa-sewa-nama"> <i class="bx bx-help-circle"></i></a>
                    <div class="input-group">
                    <span class="input-group-text">Rp</span>
                    <input id="undername" type="number" value=0 min=0 class="form-control" name="undername" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name"><h6>Biaya Admin Trucking</h6></label><a href="#" data-bs-toggle="modal" data-bs-target="#biaya-trucking"> <i class="bx bx-help-circle"></i></a>
                    <div class="input-group">
                    <span class="input-group-text">Rp</span>
                    <input id="freight_forwarder" type="number" value=0 min=0 name="freight_forwarder" class="form-control" required>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="name"><h6>Biaya Depo</h6></label><a href="#" data-bs-toggle="modal" data-bs-target="#biaya-depo"> <i class="bx bx-help-circle"></i></a>
                    <div class="input-group">
                    <span class="input-group-text">Rp</span>
                    <input id="unloading" type="number" value=0 min=0 class="form-control" name="unloading" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name"><h6>Biaya di CY</h6></label><a href="#" data-bs-toggle="modal" data-bs-target="#biaya-cy"> <i class="bx bx-help-circle"></i></a>
                    <div class="input-group">
                    <span class="input-group-text">Rp</span>
                    <input id="terminal_services" type="number" value=0 min=0 name="terminal_services" class="form-control" required>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="name"><h6>Biaya Surveyor</h6></label><a href="#" data-bs-toggle="modal" data-bs-target="#biaya-surveyor"> <i class="bx bx-help-circle"></i></a>
                    <div class="input-group">
                    <span class="input-group-text">Rp</span>
                    <input id="surveyor" type="number" value=0 min=0 class="form-control" name="surveyor" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="name"><h6>Kapasitas Container</h6></label><a href="#" data-bs-toggle="modal" data-bs-target="#kapa-cont"> <i class="bx bx-help-circle"></i></a>
                <div class="input-group">
                <input id="kapasitas" type="number" value=0 min=0 class="form-control" name="kapasitas" required>
                <span class="input-group-text">TNE</span>
            </div>
            </div>
            <div class="form-group">
                <label for="name"><h6>Cost per Unit for Door To POL</h6></label>
                <div class="input-group">
                <span class="input-group-text">Rp</span>
                <input id="door_to_pol" type="number" value=0 min=0 class="form-control" name="door_to_pol" required disabled>
                <span class="input-group-text">per Kilogram</span>
            </div>
        </div>
        <div class="form-group">
            <label for="name"><h6>FOB [Free On Board] Price per Unit</h6></label>
                <div class="input-group">
                <span class="input-group-text">Rp</span>
                <input id="fob" type="number" value=0 min=0 class="form-control" name="fob" required disabled>
                <span class="input-group-text">per Kilogram</span>
            </div>
        </div>
        <div class="text-center">
            <button id="hitung_fob" class="btn btn-primary">Hitung</button>
        <div>
        </div>
    </div>
</div>

</div>
<div class="row">
</div>

<script>
$(document).ready(function($){
$('#hitung_fob').on('click',function(){
 var container = parseInt($('#container').val());                   var wrapping_cost = parseInt($('#wrapping_cost').val());
 var loading_fees = parseInt($('#loading_fees').val());             var document_ship = parseInt($('#document_ship').val());
 var bank_draft = parseInt($('#bank_draft').val());                 var certificate = parseInt($('#certificate').val());
 var phytosanitary = parseInt($('#phytosanitary').val());           var fumigation = parseInt($('#fumigation').val());
 var domestic_shipping = parseInt($('#domestic_shipping').val());   var undername = parseInt($('#undername').val());
 var freight_forwarder = parseInt($('#freight_forwarder').val());   var unloading = parseInt($('#unloading').val());
 var terminal_services = parseInt($('#terminal_services').val());   var surveyor = parseInt($('#surveyor').val());
 var kapasitas = parseInt($('#kapasitas').val()*1000);              var biaya_kirim = parseInt($('#biaya_kirim').val());
 biaya = container+wrapping_cost+loading_fees+document_ship
        +bank_draft+certificate+phytosanitary+fumigation
        +domestic_shipping+undername+freight_forwarder
        +unloading+terminal_services+surveyor;
total = biaya/kapasitas;
fob = total+biaya_kirim;
 $("#door_to_pol").val(total);
 $("#fob").val(fob);
});

});
</script>
<br>

<div class="row">
    <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
        <div class="php-email-form">
            <div class="section-title">
                <div class="card-header">
                <h5>International Air, Sea or Land Freight Charges</h5>
                </div>
            </div>

<div class="row">
    <div class="form-group col-md-6">
    <label for="name"><h6>Biaya Pengiriman / Freight</h6></label><a href="#" data-bs-toggle="modal" data-bs-target="#biaya-freight"> <i class="bx bx-help-circle"></i></a>
        <div class="input-group">
            <span class="input-group-text">USD</span>
            <input type="number" name="freight" class="form-control" value=0 id="freight" min=0 required>
        </div>
    </div>
    <div class="form-group col-md-6">
    <label for="name"><h6>Biaya Tambahan Bahan Bakar</h6></label><a href="#" data-bs-toggle="modal" data-bs-target="#biaya-bahan-bakar"> <i class="bx bx-help-circle"></i></a>
        <div class="input-group">
            <span class="input-group-text">USD</span>
            <input type="number" class="form-control" name="bunker" value=0 id="bunker" min=0 max=100 required>
        </div>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6">
    <label for="name"><h6>Biaya Pelabuhan Tujuan</h6></label><a href="#" data-bs-toggle="modal" data-bs-target="#biaya-tujuan"> <i class="bx bx-help-circle"></i></a>
        <div class="input-group">
            <span class="input-group-text">USD</span>
            <input type="number" class="form-control" name="port" value=0 id="port" min=0 max=100 required>
        </div>
    </div>
    <div class="form-group col-md-6">
    <label for="name"><h6>Biaya Tambahan Lainnya</h6></label><a href="#" data-bs-toggle="modal" data-bs-target="#biaya-lainnya"> <i class="bx bx-help-circle"></i></a>
        <div class="input-group">
            <span class="input-group-text">USD</span>
            <input type="number" class="form-control" name="other" value=0 id="other" min=0 max=100 required>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="name"><h6>Freight :</h6></label>
    <div class="input-group">
        <span class="input-group-text">USD</span>
        <input type="number" class="form-control" name="freightt" id="freightt" required disabled>
        <span class="input-group-text">per TNE</span>
    </div>
</div>

<div class="form-group">
    <label for="name"><h6>CFR Price :</h6></label>
    <div class="input-group">
        <span class="input-group-text">USD</span>
        <input type="number" class="form-control" name="cfr" id="cfr" required disabled>
        <span class="input-group-text">per Kg</span>
    </div>
</div>
<div class="text-center">
    <button id="hitung_cfr" class="btn btn-primary">Hitung</button>
</div>

    </div>
</div>

<div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
    <div class="php-email-form">
        <div class="section-title">
            <div class="card-header">
                <h4> CIF [Costs, Insurance & Freight ] Price</h4>
            </div>
        </div>

<div class="row">
    <div class="form-group col-md-6">
    <label for="name"><h6>CFR Price :</h6></label>
        <div class="input-group">
            <span class="input-group-text">USD</span>
            <input type="number" class="form-control" name="cfrp" id="cfrp" required disabled>
        </div>
    </div>
    <div class="form-group col-md-6">
        <label for="name"><h6>Marine Cargo Insurance</h6></label><a href="#" data-bs-toggle="modal" data-bs-target="#insuransi"> <i class="bx bx-help-circle"></i></a>
        <div class="input-group">
            <input type="number" class="form-control" step="0.01" name="tokio" value="0.20" id="tokio" min=0.2 max=0.5 required>
            <span class="input-group-text">%</span>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="name"><h6>Insurance x CFR :</h6></label>
    <div class="input-group">
        <span class="input-group-text">USD</span>
        <input type="number" class="form-control" name="insurance" id="insurance" required disabled>
    </div>
</div>
<div class="form-group">
    <label for="name"><h6>CIF [Costs, Insurance & Freight ] Price :</h6></label>
    <div class="input-group">
        <span class="input-group-text">USD</span>
        <input type="number" class="form-control" name="cif" id="cif" required disabled>
        <span class="input-group-text">per Kilogram</span>
    </div>
</div>
    <div class="text-center">
        <button id="hitung_cif" class="btn btn-primary">Hitung</button>
    </div>

        </div>
    </div>

</div>

<script>
$(document).ready(function($){
$('#hitung_cfr').on('click',function(){
 var freight = parseInt($('#freight').val());
 var bunker = parseInt($('#bunker').val());
 var port = parseInt($('#port').val());
 var other = parseInt($('#other').val());
 var kapasitas = parseInt($('#kapasitas').val());
 var kurs = parseInt($('#kurs').val());
 var fob = parseInt($('#fob').val())*1000/kurs;
 total = freight+bunker+port+other;
 freight = total/kapasitas;
 cfr = (freight+fob)/1000;
 $("#freightt").val(freight);
 $("#cfr").val(cfr);
 $("#cfrp").val(cfr);
});

$('#hitung_cif').on('click',function(){
 var cfrp = parseInt($('#cfrp').val()*1000);
 var tokio = parseInt($('#tokio').val()*100);
 total = cfrp*tokio/10000;
 cif = (total+cfrp)/1000;
 $("#insurance").val(total);
 $("#cif").val(cif);
});

});
</script>

    </div>
</section><!-- End Contact Section -->