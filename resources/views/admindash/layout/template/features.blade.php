<div class="col-12">
    <div class="form-group">
        <label for="">Select Features</label>
        <select class="custom-select" id="item_feature" name="item_feature[]" multiple="multiple">
            @foreach ($all_features as $item)
              <option value="{{$item->id}}"><i class="{{$item->f_icon}} fa-2x text-primary">{{$item->f_name}}</i></option>
            @endforeach
        </select>
    </div>
</div>