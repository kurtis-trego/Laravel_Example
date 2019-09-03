@extends('layout')
<html>
<body>

<h1>Edit Functionality Still Under Construction</h1>

@section('content')
<h1>Record to Edit:</h1>
<table>

<tr>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
        <td>User Type</td>
</tr>
@foreach ($user as $object)
<tr>
<td> {{ $object->name }} &nbsp;<a href="{{  url('editName/'.$object->id)  }}"><button>Edit</button>&nbsp;</a> </td>
<td> {{ $object->email }} &nbsp;<a href="{{  url('editEmail/'.$object->id)  }}"><button>Edit</button>&nbsp;</a> </td>
<td> {{ $object->password }} &nbsp; </td>
<td> {{ $object->user_type }} &nbsp;<a href="{{  url('editUserType/'.$object->id)  }}"><button>Edit</button>&nbsp;</a> </td>
<td> 
</tr>
@endforeach
</table>

</body>
</html>
