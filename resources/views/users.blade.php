@include('header')

<h1>Users View</h1>
{{($users_data['name'])}}

@if($users_data['name']=="user_name")
    <h1>User_Name</h1>
    <h2>If has been successful</h2>
@else
    <h1>Other User</h1>
@endif


@foreach($users_data as $user)
<h2>{{$user}}</h2>
@endforeach

@forelse ($users_data as $user)
    <li>{{ $user }}</li>
@empty
    <p>No users</p>
@endforelse

@for($i=0;$i<5; $i++)
    <h1>{{$i}}</h1>
@endfor

<x-examplecomponent />
