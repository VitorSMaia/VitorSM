<div>
    <article class="grid grid-cols-12 gap-10">

        @foreach($response->paragraphs as $key => $itemParagraph)
            {!! $itemParagraph['content'] !!}
        @endforeach
    </article>
</div>

