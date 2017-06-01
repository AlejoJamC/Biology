<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
    <!-- LOADER -->
    <div class="row">
        <div class="col-xs-12 text-center" id="loader-wrapper">
            <img src="{{ URL::asset('img/logobiova.png') }}" alt="">
            <span></span>
        </div>
    </div>
    <div class="block type-1 scroll-to-block">
        <div class="col-md-8 col-md-push-2 col-xs-12">
            <div class="row">
                @if(Session::has('error'))
					<div class="alert alert-danger">
						<p><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> {{ Session::get('error') }}</p>
					</div>
				@endif
            </div>
            <div clas="row" style="padding-top:5%;">
                <form method="POST">
                    <input class="hidden" type="text" name="questionario" id="questionario" value="{{ $questionario->id }}">
                    {{ csrf_field() }}
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $questionario->titulo }}</div>
                            <div class="panel-body">
                                @foreach($preguntas as $pregunta)
                                    <div class="form-group form-radio">
                                        <label> {{ $pregunta->pregunta }}</label>
                                        @foreach($respuestas as $respuesta)
                                            @if ( $respuesta->pregunta_id == $pregunta->pregunta_id)
                                                <div class="radio">
                                                    <label><input type="radio" name="pregunta{{ $pregunta->pregunta_id }}" value="{{ $respuesta->respuesta_id }}">{{ $respuesta->respuesta }}</label>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                @endforeach
                                <button type="submit" class="btn btn-success btn-block">Guardar</button>
                            </div>
                        </div>
                    </div>
                </form>  
            </div>
        </div>
    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

