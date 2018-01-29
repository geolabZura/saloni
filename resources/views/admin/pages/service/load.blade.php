
<label for="serviceCategoryLoad">Services Category</label>
<select name="category[]" id="serviceCategoryLoad" class=""  multiple="" data-placeholder="" style="width: 100%;" aria-hidden="true">
    @if(!empty($categories))
        @foreach($categories as $category)
            <option value="{{$category->id}}" {{in_array($category->id,$selected_category) ? "selected" : ''}}>{{$category->name.'/'.$category->price}}</option>
        @endforeach
    @endif
</select>

