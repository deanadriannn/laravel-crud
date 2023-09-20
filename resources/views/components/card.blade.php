<div style="background-color: gray; padding: 10px; margin: 10px;">
  <h3>{{ $post['title'] }} by {{ $post->user->name }}</h3>
  {{ $post['body'] }}
  <p><a href="/edit-post/{{ $post->id }}">Edit</a></p>
  <form action="/delete-post/{{ $post->id }}" method="POST">
      @csrf
      @method('DELETE')
      <button>Delete</button>
  </form>
</div>