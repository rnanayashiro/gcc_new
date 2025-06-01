<!-- モーダル本体 -->
<div id="topicsModal" class="modal">
    <div class="topics-modal-content">
        <span class="close">&times;</span>
        <h2 class="send-email-title">topics 一覧</h2>

        <div class="modal-list-simple">
            @foreach ($topics as $topic)
                <div class="modal-card-item">
                    <div class="card-category">{{ $topic->category }}</div>
                    <p class="card-title">{{ $topic->title }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
