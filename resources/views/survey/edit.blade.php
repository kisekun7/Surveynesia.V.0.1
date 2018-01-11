<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<title>Surveynesia | Create</title>
<body>
	<h1>Create Questioner</h1>
	<br>
	<h3>Input Questioners</h3>
	<hr>
	<h4>{{$survey->survey_title}}</h4>
	<div class="container">
    <h2 align="center"></h2>  
    <div class="form-group">
         <form  name="add_name" id="add_name">  

            <div class="alert alert-danger print-error-msg" style="display:none">
            <ul></ul>
            </div>

            <div class="alert alert-success print-success-msg" style="display:none">
            <ul></ul>
            </div>
            <div class="table-responsive">  
                <table class="table table-bordered">  
                    <tr>  
                        <td><input type="hidden" name="id_questions" placeholder="Write your question" class="form-control name_list" value="{{$quest}}" />
                          <input type="hidden" name="id_survey" placeholder="Write your question" class="form-control name_list" value="{{$survey->id_survey}}" /></td>  
                    </tr> 
                    <tr>  
                        <td><input type="text" name="question" placeholder="Write your question" class="form-control name_list" /></td>  
                    </tr>  
                     
                </table>  
               
            </div>
            <div class="table-responsive">  
                <table class="table table-bordered" id="dynamic_field">  
                    <tr>  
                        <td><input type="hidden" name="id_question[]" placeholder="Write Your Answer" class="form-control name_list" value="{{$quest}}" /> <input type="text" name="answer[]" placeholder="Write Your Answer" class="form-control name_list" /></td>  
                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                    </tr>  
                </table>  
                <input type="button" name="submit" id="submit" class="btn btn-warning" value="Submit" />  
                
            </div>

         </form>  
    </div> 
</div>

<script type="text/javascript">
    $(document).ready(function(){      
      var postURL = "<?php echo url('/survey/{{$id}}/edit'); ?>";
      var i=1;  

      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="hidden" name="id_question[]" placeholder="Write Your Answer" class="form-control name_list" value="{{$quest}}" /><input type="text" name="answer[]" placeholder="Write Your Answer" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  

      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  

      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $('#submit').click(function(){            
           $.ajax({  
                url:postURL,  
                type:"POST",  
                data:$('#add_name').serialize(),
                dataType:'json',
                success:function(data)  
                {
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        i=1;
                        $('.dynamic-added').remove();
                        $('#add_name')[0].reset();
                        $(".print-success-msg").find("ul").html('');
                        $(".print-success-msg").css('display','block');
                        $(".print-error-msg").css('display','none');
                        $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                        document.location.href="{{url('/survey')}}/"+data.id+"/question";
                    }
                }  
           });  
      });  

      function printErrorMsg (msg) {
         $(".print-error-msg").find("ul").html('');
         $(".print-error-msg").css('display','block');
         $(".print-success-msg").css('display','none');
         $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
         });
      }
    });  
</script>
</body>
</html>