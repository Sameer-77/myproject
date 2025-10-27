@csrf
<div class="mb-3">
    <label>Key</label>
    <input type="text" name="key" value="{{ old('key', $content->key ?? '') }}" class="form-control" @if(isset($content)) readonly @endif>
    <small>Unique key, e.g. hero_title</small>
</div>

<div class="mb-3">
    <label>Title</label>
    <input type="text" name="title" value="{{ old('title', $content->title ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label>Description</label>
    <textarea name="description" rows="6" class="form-control">{{ old('description', $content->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Image</label>
    <input type="file" name="image" class="form-control">
    @if(!empty($content->image))
      <img src="{{ asset('storage/' . $content->image) }}" width="120" class="mt-2">
    @endif
</div>

<button class="btn btn-primary">Save</button>
