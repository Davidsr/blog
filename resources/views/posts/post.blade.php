			<div class="blog-post">
	            <h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->titulo}}</a></h2>
	            <p class="blog-post-meta">{{$post->created_at->diffForHumans()}} by <a href="#">Mark</a></p>

	            <p>{{$post->mensaje}}</p>
	          </div><!-- /.blog-post -->
