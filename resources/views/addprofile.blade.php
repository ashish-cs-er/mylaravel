<form action="addprofile" method="post">
    <input type="text" name="name" /><br/>
    <input type="text" name="email" /><br/>
    <input type="text" name="age" /><br/>
    {{@csrf_field()}}
    <button type="submit">Save</button>
</form>
