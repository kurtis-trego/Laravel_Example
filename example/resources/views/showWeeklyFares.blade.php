<h1>View Next Week's Fares</h1>
<table>
<tr>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Company</td>
        <td>Account Number</td>
        <td>Fare Date</td>
        <td>Pickup Time</td>
        <td>Pickup City</td>
        <td>Pickup State</td>
        <td>
</tr>
@foreach ($forms as $object)
<tr>
<td> {{ $object->firstName }} </td>
<td> {{ $object->lastName }} </td>
<td> {{ $object->company }} </td>
<td> {{ $object->accountNumber }} </td>
<td> {{ $object->fareDate }} </td>
<td> {{ $object->pickupTime }} </td>
<td> {{ $object->pickupCity }} </td>
<td> {{ $object->pickupState }} <br></td>

</tr>
@endforeach
</table>