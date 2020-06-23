<form action="updateprofile" method="post">
<input type="text" name="name" value=""/><br/>
    <input type="text" name="email" value=""/><br/>
    <input type="text" name="age" value=""/><br/>
    {{@csrf_field()}}
    <button type="submit">Save</button>
</form>
