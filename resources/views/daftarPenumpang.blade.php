@include('headerAdmin') 
    <!-- content -->
    <div class="grid">
        <div class="row">
           
            <!-- sidebar -->
            <div class="span4 offset1"><br>
                <nav class="sidebar (light)">
                    <ul>
                        <li class="stick bg-orange"><a href="pemesanan.php">Pemesanan Tiket</a></li>
                        <li class="stick bg-blue active"><a href="daftarPenumpang.php">Daftar Penumpang</a></li>
                        <li class="stick bg-pink"><a href="pembatalan.php">Pembatalan</a></li>
                        <li class="stick bg-green"><a href="#">Laporan</a></li>
                    </ul>
                </nav>
            </div>
            <!-- end sidebar -->
            <div class="span10 offset1">
            <h2>Daftar Penumpang</h2><br>
            <table class="table hovered bordered">
                <thead>
                <tr class="info fg-white">
                    <td class="text-center">No</td>
                    <td class="text-center">Nama</td>
                    <td class="text-center">Trayek</td>
                    <td class="text-center">Tujuan</td>
                    <td class="text-center">Berangkat</td>
                    <td class="text-center">Kode Bus</td>
                    <td class="text-center">Nomor Kursi</td>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">Riska</td>
                    <td class="text-center">Bandung - Surabaya</td>
                    <td class="text-center">Surabaya</td>
                    <td class="text-center">6/7/2015</td>
                    <td class="text-center">2</td>
                    <td class="text-center">17</td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td class="text-center">Riva</td>
                    <td class="text-center">Bandung - Surabaya</td>
                    <td class="text-center">Surabaya</td>
                    <td class="text-center">6/7/2015</td>
                    <td class="text-center">2</td>
                    <td class="text-center">17</td>
                </tr>
                <tr>
                    <td class="text-center">3</td>
                    <td class="text-center">Nisa</td>
                    <td class="text-center">Bandung - Surabaya</td>
                    <td class="text-center">Surabaya</td>
                    <td class="text-center">6/7/2015</td>
                    <td class="text-center">2</td>
                    <td class="text-center">17</td>
                </tr>
                
                
                </tbody>
            </table>

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