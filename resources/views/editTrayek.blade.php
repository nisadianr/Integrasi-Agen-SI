@include('headerAdminPusat')
<br><br>
<div class="container">
	<div class="row">
		<h2 class="fg-indigo">Ubah Trayek</h2><br>
        <div class="span8">
		<form action="" method="">
            <div class="span2">Tujuan</div>
            <div class="span6 input-control text info-state">
                <input type="text" placeholder="tujuan" id="tujuan"/><br>
            </div>
            <div class="span2">Asal</div>
            <div class="span6 input-control text info-state">
                <input type="text" placeholder="asal" id="asal"/><br>
            </div>
            <div class="span2">Jam</div>
            <div class="span6 input-control text info-state">
                <input type="time" placeholder="jam" id="jam"/><br>
            </div>
           <div style="padding-left: 0px">
                <button type="submit" class="bg-darkBlue fg-white large" id="">Ubah</button>
           </div>
        </form>
     </div>
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