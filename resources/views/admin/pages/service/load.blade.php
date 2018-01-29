<label for="serviceCategory">Services Category</label>
<select name="category[]" id="serviceCategory" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="" style="width: 100%;" tabindex="-1" aria-hidden="true">
    @if(!empty($categories))
        @foreach($categories as $category)
            <option value="{{$category->id}}" {{in_array($category->id,$selected_category)}}>{{$category->name.'/'.$category->price}}</option>
        @endforeach
    @endif
</select>