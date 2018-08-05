<!--footer start-->
<div style="height: 700px;"></div>
<div id="footer" style="text-align:right; padding: 13px; background-color: #4f5155; color: #fff; font-size: 13px">
    2018 &copy; Demo project</div>
<!--footer end-->


<!-- inject:js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/autosize.js/4.0.0/autosize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<!-- endinject -->
<!-- <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous">
</script> -->
<script src="https://mlm.exodemo.biz/axxets/member/theme.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');
</script>
<script>
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover({html: true, placement: "top"});
    });
</script>
<script>
    $(function () {
        $(".datepicker").datepicker({
            dateFormat: "yy-mm-dd",
            yearRange: "-70:+70",
            changeMonth: true,
            changeYear: true,
            defaultDate: 0,
            showOptions: {direction: "down"},
        });
    });
</script>
</body>
</html>
