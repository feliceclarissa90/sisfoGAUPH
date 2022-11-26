<div class="form-group {{ $errors->has('missing_item_id') ? 'has-error' : ''}}">
    <label for="missing_item_id" class="control-label">{{ 'Missing Item Id' }}</label>
    <input class="form-control" name="missing_item_id" type="number" id="missing_item_id" value="{{ isset($requestedmissingitem->missing_item_id) ? $requestedmissingitem->missing_item_id : ''}}" >
    {!! $errors->first('missing_item_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($requestedmissingitem->user_id) ? $requestedmissingitem->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('missing_item_status_id') ? 'has-error' : ''}}">
    <label for="missing_item_status_id" class="control-label">{{ 'Missing Item Status Id' }}</label>
    <input class="form-control" name="missing_item_status_id" type="number" id="missing_item_status_id" value="{{ isset($requestedmissingitem->missing_item_status_id) ? $requestedmissingitem->missing_item_status_id : ''}}" >
    {!! $errors->first('missing_item_status_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('requested_at') ? 'has-error' : ''}}">
    <label for="requested_at" class="control-label">{{ 'Requested At' }}</label>
    <input class="form-control" name="requested_at" type="datetime-local" id="requested_at" value="{{ isset($requestedmissingitem->requested_at) ? $requestedmissingitem->requested_at : ''}}" >
    {!! $errors->first('requested_at', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
