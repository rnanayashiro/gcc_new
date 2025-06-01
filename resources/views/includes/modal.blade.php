<!-- モーダル本体 -->
<div id="topicsModal" class="modal">
    <div class="topics-modal-content">
        <span class="close">&times;</span>
        <h2 class="send-email-title">topics 一覧</h2>

        @php $locale = app()->getLocale(); @endphp

        <div class="modal-list-simple">
            @foreach ($topics as $topic)
                <div class="modal-card-item">
                    <div class="card-category">{{ $locale === 'en' ? $topic->category_en : $topic->category_ja }}</div>
                    <p class="card-title">{{ $locale === 'en' ? $topic->title_en : $topic->title_ja }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
