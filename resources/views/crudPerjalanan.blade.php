@include('headerAdminPusat')
<div class="container">
	<div class="row">
		<h2 class="fg-indigo">Daftar Perjalanan</h2><br>
		<div class="place-right">
			<h3><a href="addPerjalanan.php"><span class="icon-plus"></a> Tambah Perjalanan</span></h3>
		</div><br><br><br>
            <table class="table hovered bordered">
                <thead>
                <tr class="info fg-white">
                	<td class="text-center">No.</td>
                    <td class="text-center">Nomor Trayek</td>
                    <td class="text-center">Nomor Bus</td>
                    <td class="text-center">Harga</td>
                     <td class="text-center"></td>
                </tr>
                </thead>

                <tbody>
                <tr>
                	<td class="text-center">1</td>
                    <td class="text-center">2</td>
                    <td class="text-center">4</td>
                    <td class="text-center">135.000</td>
   					<td class="text-center">
   						<a href="editPerjalanan.php"><span class="icon-pencil">  </span></a>
   						<a href=""><span class="icon-remove">  </span></a>
   					</td>
                </tr>
                
                </tbody>
            </table>
	</div>
</div>
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

</body>
</html>