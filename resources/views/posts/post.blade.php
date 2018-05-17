			<div class="blog-post">
	            <h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->titulo}}</a></h2>
	            <p class="blog-post-meta">{{$post->created_at->diffForHumans()}} by <a href="#">Mark</a></p>

	            <p>{{$post->mensaje}}</p>
	            <div class="row">
			        <div class="comments col-md-9" id="comments">
			            <h3 class="mb-2">Comentarios</h3>
			            <!-- comment -->
			            @foreach($post->comentarios as $comentario)
			            <div class="comment mb-2 row">
			                <div class="comment-avatar col-md-1 col-sm-2 text-center pr-1">
			                    <a href=""><img class="mx-auto rounded-circle img-fluid" src="http://demos.themes.guide/bodeo/assets/images/users/m103.jpg" alt="avatar"></a>
			                </div>
			                <div class="comment-content col-md-11 col-sm-10">
			                    <h6 class="small comment-meta"><a href="#">admin</a> {{$comentario->created_at->diffForHumans()}}</h6>
			                    <div class="comment-body">
			                        <p>{{$comentario->body}}
			                            <br>
			                            <a href="" class="text-right small"><i class="ion-reply"></i> Responder</a>
			                        </p>
			                    </div>
			                </div>
			                
			                <!-- reply is indented -->
			                <!-- <div class="comment-reply col-md-11 offset-md-1 col-sm-10 offset-sm-2">
			                    <div class="row">
			                        <div class="comment-avatar col-md-1 col-sm-2 text-center pr-1">
			                            <a href=""><img class="mx-auto rounded-circle img-fluid" src="http://demos.themes.guide/bodeo/assets/images/users/m101.jpg" alt="avatar"></a>
			                        </div>
			                        <div class="comment-content col-md-11 col-sm-10 col-12">
			                            <h6 class="small comment-meta"><a href="#">phildownney</a> Today, 12:31</h6>
			                            <div class="comment-body">
			                                <p>Really?? Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.
			                                    <br>
			                                    <a href="" class="text-right small"><i class="ion-reply"></i> Reply</a>
			                                </p>
			                            </div>
			                        </div>
			                    </div>
			               </div> -->
			               <!-- /reply is indented -->
			            </div>
			            <!-- /comment -->
			            @endforeach
			            <div class="row pt-2">
			                <div class="col-12">
			                    <a href="" class="btn btn-sm btn-primary">Comentar</a>
			                </div>
			            </div>

			        </div>
			    </div>
	          </div><!-- /.blog-post -->
