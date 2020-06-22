<h1>Hello From User Profile</h1>
{{print_r($data)}}
@foreach($data as $item)
<span>Name: {{$item->name}}</span>
@endforeach
