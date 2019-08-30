@extends('layout')
<html>
    <body>
            @can('isAdmin')
            <div class="card-body">
                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                      </div><br />
                    @endif
          
        <form action="insert" method="post">
            <table>
                <tr>
                    {{ csrf_field() }}
                    <td>Name:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                        <td>Password(8 Chars):</td>
                        <td><input type="text" name="password"></td>
                    </tr>
                <tr><td><input type="submit" name="submit" value="Add"></td></tr>
            </table>
        </form>


            <table>
            <tr>
                <td>Name</td>
                <td>Email</td>
            </tr>

            @foreach ($users as $object)
            <tr>
            <td> {{$object->name}} </td>
            <td> {{$object->email}} </td>
            <td> <a href="{{action('DataController@edit', $object->id)}}"><button>Edit</button></a>&nbsp;<a href="{{  url('delete/'.$object->id)  }}"><button>Delete</button></a> <td>
            </tr>
            @endforeach



 
            @endcan

</body>
</html>

