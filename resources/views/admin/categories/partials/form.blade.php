<label for="">Status</label>
<select class="form-control" name="published">
  @if (isset($category->id))
    <option value="0" @if ($category->published == 0) selected="" @endif>Not published</option>
    <option value="1" @if ($category->published == 1) selected="" @endif>Published</option>
  @else
    <option value="0">Not published</option>
    <option value="1">Published</option>
  @endif
</select>

<label for="">Name</label>
<input type="text" class="form-control" name="title" placeholder="Category title" value="{{ $category->title or "" }}" required>

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="Auto generated" value="{{ $category->slug or "" }}" readonly>

<label for="">Parent category</label>
<select name="parent_id" id="" class="form-control">
  <option value="0">-- No parent --</option>
  @include('admin.categories.partials.categories', ['categories' => $categories])
</select>

<hr>
<input type="submit" class="btn btn-primary" value="Save">
