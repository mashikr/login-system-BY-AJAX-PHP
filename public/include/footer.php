</div>

<script src="/login-ajax/public/js/jquery.min.js"></script>
<script src="/login-ajax/public/js/bootstrap.min.js"></script>
<script src="/login-ajax/public/js/custom.js"></script>
<script type="application/javascript">
    $('.custom-file-input').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>
</body>
</html>