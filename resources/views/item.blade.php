<h1>Item Details</h1>
<form action="items" method="post">
    @csrf
    <input type="text" name="item_name"/><br/>
    <input type="text" name="item_origin"/><br/>
    <input type="submit" name="save" />
</form>
