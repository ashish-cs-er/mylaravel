@if($errors->any())
    @foreach($errors->all() as $err)
        <div class="errors">{{$err}}</div>
    @endforeach
@endif
<?php //print_r($errors); ?>
<form method="GET" action="items">
    @error('item_name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="text" name="item_name" placeholder="item name"/><br/>
    @error('item_cat')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="text" name="item_cat" placeholder="item category"/><br/>
    {{@csrf_field()}}
    <input type="submit" value="Submit" />
</form>
