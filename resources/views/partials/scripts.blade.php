<!-- jQuery 3 -->
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>



<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('js/popper.js') }}" ></script>
<script src="{{ asset('js/bootstrap.min.js') }}" ></script>

<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }} "></script>

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });
</script>


