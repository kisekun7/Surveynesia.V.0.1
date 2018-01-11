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
	<h4>{{$survey_title}} </h4>
	<div class="container">
    <h2 align="center"></h2>  
    <div class="form-group">
        
      <div class="table-responsive">  
          <table class="table table-bordered">  
              <tr>
                <td>No</td>
                <td>Question</td>
                <td>Action</td>
              </tr>
              <?php $i=0 ?>
              @foreach($query as $querys)
              <?php $i++ ?>
              <tr>
                <td><?php echo $i?></td>
                <td>{{$querys->question}}</td>
                <td><form action="/survey/{{$querys->id_question}}" method="post">
                      <input type="submit" name="submit" value="Delete">
                      {{ csrf_field() }}
                      <input type="hidden" name="_method" value="DELETE">
                    </form>
                <a href="/survey/{{$querys->id}}/question/{{$querys->id_question}}/details">Details</a> 
                </td>
              </tr>
              @endforeach
          </table>  
         
      </div>  
          <a href="edit" type="submit" class="btn btn-info">Back</a>
          <div align="right">
                <a href="{{url('/survey')}}" name="submit" id="submit" class="btn btn-primary" >Finish</a>
              </div>
    </div> 
</div>


</body>
</html>