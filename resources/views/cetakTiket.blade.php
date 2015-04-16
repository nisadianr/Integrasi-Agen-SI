@include('headerAdmin') 
    <!-- content -->
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

                <div class="stepper diamond" data-role="stepper" data-steps="2" id="step" data-start="2">
                </div>
                <div class="span6">
                  <h2 class="fg-orange">Cetak Tiket</h2><br>
                  <p>* Pastikan anda menerima pembayaran dari penumpang sebelum mencetak tiket.</p>
                  <br><br>
                  <a href="" class="button bg-darkBlue fg-white large">Cetak</a>
                </div>
            </div>

    </div>    
    <!-- end content -->
         
   
 <!-- Load JavaScript Libraries -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery/jquery.widget.min.js') }}"></script>
    <script src="{{ asset('js/jquery/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('js/prettify/prettify.js') }}"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="{{ asset('js/load-metro.js') }}"></script>

    <!-- Local JavaScript -->
    <script src="{{ asset('js/docs.js') }}"></script>
    <script src="{{ asset('js/hitua.js') }}"></script>

</body>
</html>