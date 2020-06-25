<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Video-Chat</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
   
    <link href="css/agency.css" rel="stylesheet">
</head>

<body >
    <nav class="navbar navbar-toggleable-sm navbar-inverse fixed-top bg-inverse">
        <a class="navbar-brand" href="/"></a>
    </nav>

    <section class="row1" id="chat-app" style="
    padding-top: 30px;
">
    	<div class="container" style="margin-left: 0px;">
    		<div class="row">
    			<div class="col-lg-4 col-md-4 mb-4">
    				Bienvenido : <h4 id="peer-id" data-toggle="tooltip" data-placement="top" title=""></h3>
                    <a href="http://localhost/llamadas/" >Cerrar sesión</a>
                    <a href="#getUserNameModal" data-toggle="modal">Cambiar</a>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Usuarios Activos</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="onlinepeers"></ul>
                        </div>
                    </div>
    			</div>
    			<div class="col-lg-6 col-md-6 mb-5 hide">
    				<div class="form-inline">
						<div class="form-group mr-sm-3">
							<label for="inputPeerUserId" class="sr-only">contraseña</label>
							<input type="text" class="form-control" id="inputPeerUserId" placeholder="Localizar id ">
						</div>
						<button type="button" class="btn btn-outline-primary" id='connect-btn'>Conectar</button>
					</div>
    			</div>
                <div class="col-lg-6 col-md-6 mb-4">
                    
                </div>
    		</div>
    	</div>
    </section>
<section  class="row2">
    <div class="container-fluid chat-container">
		<div class="row">
		</div>
    </div>
</section>
    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->
    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal" id="videoCallPanel" tabindex="-1" role="dialog" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal end-call hide" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="title">Sistemas de llamadas</h2>
                                <div class="pure-u-2-3" id="video-container">
                                    <video id="their-video" autoplay=""></video>
                                    <video id="my-video" muted="true" autoplay=""></video>
                                </div>
                                
                                <div class="text-center mt-3">
                                    <button type="button" class="btn btn-secondary mute-audio ml-3 mt-2"><i class="fa fa-microphone-slash"></i>Mute Audio</button>
                                    <button type="button" class="btn btn-secondary mute-video ml-3 mt-2"><i class="fa fa-video-camera"></i>Mute Video</button>
                                    <button type="button" class="btn btn-danger end-call ml-3 mt-2" data-dismiss="modal"><i class="fa fa-times"></i>Finalizar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="getUserNameModal" tabindex="-1" role="dialog" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop='static'>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Valida que eres tu </h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="user-name"   value="<?php  echo $_GET['user-name']; ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" id="llamada" class="btn btn-primary username-done">Si</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal" id="callConfirmationModal" tabindex="-1" role="dialog" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop='static'>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title peer-name"></h5>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger reject-call" data-dismiss="modal">Rechazar</button>
                    <button type="button" class="btn btn-primary accept-call" data-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    
    <script src="js/peer.js"></script>
    <script src="js/app.js"></script>
    <script src="js/peer-client.js"></script>
    <script>
        $(document).ready(function(){
        $('#llamada').trigger('click');
            });
    </script>
</body>

</html>
=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Video -  Chat</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
   
    <link href="css/agency.css" rel="stylesheet">
</head>

<body >
    <nav class="navbar navbar-toggleable-sm navbar-inverse fixed-top bg-inverse">
        <a class="navbar-brand" href="/"></a>
    </nav>

    <section class="row1" id="chat-app" style="
    padding-top: 30px;
">
    	<div class="container" style="margin-left: 0px;">
    		<div class="row">
    			<div class="col-lg-4 col-md-4 mb-4">
    				Bienvenido : <h4 id="peer-id" data-toggle="tooltip" data-placement="top" title=""></h3>
                    <a href="http://localhost/llamadas/" >Cerrar sesión</a>
                    <a href="#getUserNameModal" data-toggle="modal">Cambiar</a>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Usuarios Activos</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="onlinepeers"></ul>
                        </div>
                    </div>
    			</div>
    			<div class="col-lg-6 col-md-6 mb-5 hide">
    				<div class="form-inline">
						<div class="form-group mr-sm-3">
							<label for="inputPeerUserId" class="sr-only">contraseña</label>
							<input type="text" class="form-control" id="inputPeerUserId" placeholder="Localizar id ">
						</div>
						<button type="button" class="btn btn-outline-primary" id='connect-btn'>Conectar</button>
					</div>
    			</div>
                <div class="col-lg-6 col-md-6 mb-4">
                    
                </div>
    		</div>
    	</div>
    </section>
<section  class="row2">
    <div class="container-fluid chat-container">
		<div class="row">
		</div>
    </div>
</section>
    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->
    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal" id="videoCallPanel" tabindex="-1" role="dialog" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal end-call hide" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="title">Sistemas de llamadas</h2>
                                <div class="pure-u-2-3" id="video-container">
                                    <video id="their-video" autoplay=""></video>
                                    <video id="my-video" muted="true" autoplay=""></video>
                                </div>
                                
                                <div class="text-center mt-3">
                                    <button type="button" class="btn btn-secondary mute-audio ml-3 mt-2"><i class="fa fa-microphone-slash"></i>Mute Audio</button>
                                    <button type="button" class="btn btn-secondary mute-video ml-3 mt-2"><i class="fa fa-video-camera"></i>Mute Video</button>
                                    <button type="button" class="btn btn-danger end-call ml-3 mt-2" data-dismiss="modal"><i class="fa fa-times"></i>Finalizar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="getUserNameModal" tabindex="-1" role="dialog" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop='static'>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Valida que eres tu </h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="user-name"   value="<?php  echo $_GET['user-name']; ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" id="llamada" class="btn btn-primary username-done">Si</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal" id="callConfirmationModal" tabindex="-1" role="dialog" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop='static'>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title peer-name"></h5>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger reject-call" data-dismiss="modal">Rechazar</button>
                    <button type="button" class="btn btn-primary accept-call" data-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    
    <script src="js/peer.js"></script>
    <script src="js/app.js"></script>
    <script src="js/peer-client.js"></script>
    <script>
        $(document).ready(function(){
        $('#llamada').trigger('click');
            });
    </script>
</body>

</html>
>>>>>>> a4df0d546166e1c31bdc6361f82c27a9708651b3
