@csrf
<div class="form-control">
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ empty($article) ? '' : $article->title }}" class="form-control"/>
</div>
<div class="form-control">
    <label for="body">Body:</label>
    <textarea name="body" id="body" class="form-control">{{ empty($article) ? '' : $article->body }}</textarea>
</div>
<div class="form-control">
    <label for="published_at">Published At:</label>
    <input type="date" name="published_at" id="published_at" value="{{ empty($article) ? date("Y-m-d") : $article->published_at }}" class="form-control"/>
</div>
<div class="form-control">
    <label for="tags">Tags</label>
    <select name="tags[]" id="tags" multiple="multiple"  class="form-control">
        @foreach($tags as $tag)
            <option value="{{ $tag->id }}" @if(!empty($article) && in_array($tag->id, $article->tag_list->toArray())) selected="selected" @endif>{{ $tag->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-control">
    <button class="btn btn-primary form-control">{{ $submitButtonText }}</button>
</div>