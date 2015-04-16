@include('headerAdmin')     <!-- content -->
    <div class="grid">
        <div class="row">
           
            <!-- sidebar -->
            <div class="span4 offset1"><br>
                <nav class="sidebar (light)">
                    <ul>
                        <li class="stick bg-orange active"><a href="pemesanan.php">Pemesanan Tiket</a></li>
                        <li class="stick bg-blue"><a href="daftarPenumpang.php">Daftar Penumpang</a></li>
                        <li class="stick bg-pink"><a href="pembatalan.php">Pembatalan</a></li>
                        <li class="stick bg-green"><a href="#">Laporan</a></li>
                       
                    </ul>
                </nav>
            </div>
            <!-- end sidebar -->

            <div class="span10 offset1">
                <h2>Pemesanan Tiket</h2><br>
                <div class="span5">
                <p class="fg-orange" style="font-size:18px">Isi Form Pemesanan</p>
                </div>
                <div class="span4">
                <p class="fg-orange text-right" style="font-size:18px">Cetak Tiket</p>
                </div>

                <div class="stepper diamond" data-role="stepper" data-steps="2" id="step">
                </div>

            <div class="span10">
            <form id="form" method="#" action="#" onSubmit=""><br>
                <div class="span2">Nama Penumpang</div>
                <div class="span7 input-control text info-state">
                    <input type="text" placeholder="nama" id="nama"/><br>
                </div>
                <div class="span2">Trayek</div>
                <div class="span7 input-control select info-state">
                    <select name="trayek">
                          <option selected>pilih trayek</option>
                          <option>Bandung - Semarang</option>
                          <option>Bandung - Semarang - Jogja - Solo</option>
                          <option>Bandung - Semarang - Jogja - Klaten</option>
                          <option>Bandung - Wonosari</option>
                          <option>Bandung - Wonogiri</option>
                          <option>Bandung - Semarang - Lasem</option>
                          <option>Bandung - Semarang - Surabaya</option>
                    </select><br>
                </div>
                <div class="span2">Nomor Telepon</div>
                <div class="span7 input-control text info-state">
                    <input type="text" placeholder="nomor telepon" id="no_telepon"/><br>
                </div>
                <div class="span2">Kota Tujuan</div>
                <div class="span7 input-control select info-state">
                <select name="tujuan">
                      <option selected>pilih tujuan</option>
                      <option>Semarang</option>
                      <option>Pekalongan</option>
                      <option>Ambarawa</option>
                      <option>Magelang</option>
                      <option>Yogyakarta</option>
                      <option>Salatiga</option>
                      <option>Solo</option>
                      <option>Purworejo</option>
                      <option>Surabaya</option>
                      <option>Malang</option>
                      <option>Bali</option>
                </select><br>
                </div>
                <div class="span2">Berangkat</div>
                <div class="span7 input-control text info-state">
                    <input type="date" id="tanggal"/><br>
                </div>
                <div class="span2">Nomor Kursi</div>
                <div class="span7 input-control text info-state">
                    <input placeholder="nomor kursi" id="nomor kursi"></input>
                <br>
                </div>
                 <div style="padding-left: 160px">
                <button type="submit" class="bg-darkBlue fg-white large" id="">Submit</button>
                </div>
            </form>
             <div class="actions span2">
                    <h2><a href="cetakTiket.php"><i class="icon-arrow-right-3 fg-darker smaller" onclick="$('#step').stepper('next')"></i></a> Next</h2>
            </div>
            </div>
        </div>
    </div>    
    <!-- end content -->
         
    <!-- Load JavaScript Libraries -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery/jquery.widget.min.js') }}"></script>
    <script src="{{ asset('js/jquery/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('js/prettify/prettify.js') }}"></script>
    <script src="{{ asset('js/jquery/jquery.dataTables.js') }}"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="{{ asset('js/load-metro.js') }}"></script>

    <!-- Local JavaScript -->
    <script src="{{ asset('js/docs.js') }}"></script>
    <script src="{{ asset('js/hitua.js') }}"></script>

</body>
</html>