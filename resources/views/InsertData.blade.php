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
                    <tr>
                        <td>User Type:</td>
                        <td><input type="text" name="user_type"></td>
                    </tr>
                <tr><td><input type="submit" name="submit" value="Add"></td></tr>
            </table>
        </form>

        <p>Click To Edit</p>
            <table>
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>User Type</td>
            </tr>

            @foreach ($users as $object)
            <tr>
            <td> <a href="{{  url('editName/'.$object->id)  }}"> {{$object->name}} </a></td>
            <td> <a href="{{  url('editEmail/'.$object->id)  }}"> {{$object->email}} </a></td>
            <td> <a href="{{  url('editUserType/'.$object->id)  }}"> {{$object->user_type}} </a></td>
            <td> &nbsp;<a href="{{  url('delete/'.$object->id)  }}"><button>Delete</button></a> <td>
            </tr>
            @endforeach



 
            @endcan

</body>
</html>

