<!DOCTYPE html>
<html>
<body>
    <div>
        <h1>{{ $post->title }}</h1>
        <p>by {{ $post->author->name }}</p>
        <p>{{ $post->content }}</p>

        <h2>Comments</h2>
        @foreach ($post->comments as $comment)
            <p><strong>{{ $comment->commenter_name }}:</strong> {{ $comment->comment }}</p>
        @endforeach

        <h2>Leave a Comment</h2>
        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        <form action="{{ route('comments.store', $post->id) }}" method="POST">
            @csrf
            <input type="text" name="commenter_name" placeholder="Your name" required><br><br>
            <textarea name="comment" placeholder="Your comment" required></textarea><br><br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
