<!-- ======= Contact Section ======= -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

    <div class="section-title">
        <h2>Kalkulator Impor</h2>
        <p>Melakukan Perhitungan</p>
    </div>

<div class="row">
    <div class="col-lg-6 d-flex align-items-stretch">
        <div class="info">
            <div class="address">
                <i class="bi bi-calculator"></i>
                <h4>EXW Price</h4>
                <p>EX Works Price</p>
            </div>

<div class="row">
    <div class="form-group col-md-8">
        <label for="name">Factory Cost</label>
        <div class="input-group">
            <span class="input-group-text">Rp</span>
            <input type="number" name="harga_beli" class="form-control" value=0 id="harga_beli" min=0 required>
        </div>
    </div>
    <div class="form-group col-md-4">
        <label for="name">Margin</label>
        <div class="input-group">
            <input type="number" class="form-control" name="keuntungan" value=0 id="keuntungan" min=0 max=100 required>
            <span class="input-group-text">%</span>
        </div>
    </div>
</div><br>
<div class="form-group">
    <label for="name">Unit</label>
    <select type="number" name="harga_beli" class="form-control" required>
        <option>Kilograms</option>
        <option>TNE (TON)</option>
        <option>PCS</option>
        <option>Pack</option>
    </select>
</div><br>
<div class="form-group">
    <label for="name">Kurs Dollar</label>
    <div class="input-group">
        <span class="input-group-text">Rp</span>
        <input type="number" class="form-control" name="kurs" id="kurs" value="14266" required>
    </div><br>
</div>
<div class="row form-group">
    <label for="name">EXW [ Ex Works ] Price :</label>
        <div class="input-group">
            <span class="input-group-text">USD</span>
            <input type="number" class="form-control" name="exw" id="exw" required disabled>
        </div>
    </div><br>
    <button id="hitung_exw" class="btn btn-primary">Calculate</button>

        </div>
    </div>
<input type="number" class="form-control" name="biaya_kirim" id="biaya_kirim" required hidden>

<script type="text/javascript">
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

    <div class="col-lg-6 d-flex align-items-stretch">
        <div class="info">
            <div class="address">
                <i class="bi bi-calculator"></i>
                    <h4>Inland Trucking and Port Charges</h4>
                    <p>Door to POL</p>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">Container 40"</label>
                    <input id="container" type="number" value=0 min=0 name="container" class="form-control" value=0 required>
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Wrapping Cost</label>
                    <input id="wrapping_cost" type="number" value=0 min=0 class="form-control" name="wrapping_cost" required>
                </div>
            </div><br>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">Loading Fees</label>
                    <input id="loading_fees" type="number" value=0 min=0 name="loading_fees" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Shipping Document Fees</label>
                    <input id="document_ship" type="number" value=0 min=0 class="form-control" name="document_ship" required>
                </div>
            </div><br>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">Bank Draft Fees</label>
                    <input id="bank_draft" type="number" value=0 min=0 name="bank_draft" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Certificate Of Origin (COO)</label>
                    <input id="certificate" type="number" value=0 min=0 class="form-control" name="certificate" required>
                </div>
            </div><br>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">Phytosanitary License Fees</label>
                    <input id="phytosanitary" type="number" value=0 min=0 name="phytosanitary" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Fumigation</label>
                    <input id="fumigation" type="number" value=0 min=0 class="form-control" name="fumigation" required>
                </div>
            </div><br>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">Domestic Shipping Cost</label>
                    <input id="domestic_shipping" type="number" value=0 min=0 name="domestic_shipping" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Undername</label>
                    <input id="undername" type="number" value=0 min=0 class="form-control" name="undername" required>
                </div>
            </div><br>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">Freight Forwarder Fees</label>
                    <input id="freight_forwarder" type="number" value=0 min=0 name="freight_forwarder" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Unloading (Heavy Lift) Charges</label>
                    <input id="unloading" type="number" value=0 min=0 class="form-control" name="unloading" required>
                </div>
            </div><br>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">Terminal Services Fees</label>
                    <input id="terminal_services" type="number" value=0 min=0 name="terminal_services" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Surveyor Fees</label>
                    <input id="surveyor" type="number" value=0 min=0 class="form-control" name="surveyor" required>
                </div>
            </div><br>
            <div class="form-group">
                <label for="name">Container Capacity</label>
                <input id="kapasitas" type="number" value=0 min=0 class="form-control" name="kapasitas" required>
            </div><br>
            <div class="form-group">
                <label for="name">Cost per Unit for Door To POL</label>
                <input id="door_to_pol" type="number" value=0 min=0 class="form-control" name="door_to_pol" required disabled>
            </div><br>
            <div class="form-group">
                <label for="name">FOB [Free On Board] Price per Unit</label>
                <input id="fob" type="number" value=0 min=0 class="form-control" name="fob" required disabled>
            </div><br>
            <button id="hitung_fob" class="btn btn-primary">Calculate</button>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function($){
$('#hitung_fob').on('click',function(){
 var container = parseInt($('#container').val());                           var wrapping_cost = parseInt($('#wrapping_cost').val());
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

$('#kapasitas').on('change',function(){
 var container = parseInt($('#container').val());                   var wrapping_cost = parseInt($('#wrapping_cost').val());
 var loading_fees = parseInt($('#loading_fees').val());             var document_ship = parseInt($('#document_ship').val());
 var bank_draft = parseInt($('#bank_draft').val());                 var certificate = parseInt($('#certificate').val());
 var phytosanitary = parseInt($('#phytosanitary').val());           var fumigation = parseInt($('#fumigation').val());
 var domestic_shipping = parseInt($('#domestic_shipping').val());   var undername = parseInt($('#undername').val());
 var freight_forwarder = parseInt($('#freight_forwarder').val());   var unloading = parseInt($('#unloading').val());
 var terminal_services = parseInt($('#terminal_services').val());   var surveyor = parseInt($('#surveyor').val());
 var kapasitas = parseInt($(this).val())*1000;
 biaya = container+wrapping_cost+loading_fees+document_ship
        +bank_draft+certificate+phytosanitary+fumigation
        +domestic_shipping+undername+freight_forwarder
        +unloading+terminal_services+surveyor;
total = biaya/kapasitas;
 $("#door_to_pol").val(total);
});

});
</script>

    </div>
</section><!-- End Contact Section -->