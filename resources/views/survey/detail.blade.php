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
	<h3></h3>
	<hr>
	<h4></h4>
	<div class="container">
    <h2 align="center"></h2>  
    <div class="form-group">
        
      <div class="table-responsive">  
          <table class="table table-bordered">  
              <tr>
                <td>No</td>
                <td>Question</td>
                <td>answer</td>
              </tr>
              <?php $i=0 ?>
              @foreach ($sql as $question)
              <?php $i++ ?>
              <tr>
                <td><?php echo $i?></td>
                <td>{{$question->question}}</td>
                <td>{{$question->answer}}</td>
              </tr>
              @endforeach
          </table>  
         
      </div>  
          
    </div> 
</div>


</body>
</html>