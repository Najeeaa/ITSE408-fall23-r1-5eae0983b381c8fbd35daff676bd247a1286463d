<!-- news.blade.php -->

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h2 class="title">Recent News</h2>
                    <h4 class="subtitle">We publish news about the latest changes, announcements, and recent projects</h4>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($news as $newsItem)
            <div class="col-md-4">
                <div class="card mb-4">
                    <a href="{{ route('newsDetails', $newsItem->id) }}" class="card-link">
                        <img src="{{ asset('storage/images/' . $newsItem->image) }}" alt="News Image" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $newsItem->title }}</h5>
                            <p class="card-text">{{ substr($newsItem->content, 0, 100) }}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">By {{ $newsItem->author }}</small>
                            <span class="badge badge-primary">{{ $newsItem->category }}</span>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>