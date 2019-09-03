
<!-- TODO: fix form action/method -->

<form action="userProvidedEmail" method="post">
        <table>
            <tr>
                {{ csrf_field() }}
                <td>New Email:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr><td><input type="submit" name="submit" value="Change Email"></td></tr>
        </table>
    </form>





