    <!-- Bootstrap JS -->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <!--plugins-->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>

    <script>
    $(document).ready(function() {

    $('.postImagecross').click(function() {
    $('#postImage').remove();
    })
    });
    </script>


    <script src="{{asset('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('assets/js/form-text-editor.js')}}"></script>
    <script src="{{asset('assets/plugins/datetimepicker/js/legacy.js')}}"></script>
    <script src="{{asset('assets/plugins/datetimepicker/js/picker.js')}}"></script>
    <script src="{{asset('assets/plugins/datetimepicker/js/picker.time.js')}}"></script>
    <script src="{{asset('assets/plugins/datetimepicker/js/picker.date.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js')}}"></script>
    <script src="{{asset('assets/js/form-date-time-pickes.js')}}"></script>

    <script src="{{asset('assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('assets/js/table-datatable.js')}}"></script>
    <script src="{{asset('assets/js/index.js')}}"></script>
    <script src="{{asset('assets/tinymce/tinymce.min.js')}}"></script>
    <script type="text/javascript">
        tinymce.init({
        selector: '#mytextarea',
        plugins: ['link','images','media','advlist','autolink','lists','charmap','preview','anchor'
        ,'pagebreak','code','fullscreen','insertdatetime','table','emoticons','template'],
        toolbar: 'undo redo| styles'
        });

         tinymce.init({
        selector: '#mytextarea2',
        plugins: ['link','images','media','advlist','autolink','lists','charmap','preview','anchor'
        ,'pagebreak','code','fullscreen','insertdatetime','table','emoticons','template'],
        toolbar: 'undo redo| styles'
        });

         tinymce.init({
        selector: '#mytextarea3',
        plugins: ['link','images','media','advlist','autolink','lists','charmap','preview','anchor'
        ,'pagebreak','code','fullscreen','insertdatetime','table','emoticons','template'],
        toolbar: 'undo redo| styles'
        });
    </script>
    <!-- <script src="https://cdn.tiny.cloud/1/c0ub9aj26ol7tilz8p50s8h909ua7r157cj2tk2jye0fxdy9/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
    tinymce.init({
    selector: '#mytextarea',
    plugins: ['link','images','media'],
    inline: true,
    toolbar: 'undo redo| styles'
    });
    </script> -->
    <!--app JS-->
    <script src="{{asset('assets/js/app.js')}}"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="{{asset('assets/src/jquery.simple-color.js')}}"></script> -->
    <script type="text/javascript">
    // $(document).ready(function() {

    // 	$('.close_button').click(function(event) {
    // 		$('input').closeChooser();
    // 	});

    // 	$('.set_color_button').click(function(event) {
    // 		$('input').setColor('#cc3333');
    // 	});

    // 	$('.simple_color').simpleColor();
    // });
    </script>
