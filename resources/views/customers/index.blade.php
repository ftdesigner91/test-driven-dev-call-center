
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>last name</th>
			<th>first name</th>
			<th>midlle name</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($customers as $customer)
		<tr>
			<td>{{ $customer->last_name }}</td>
			<td>{{ $customer->first_name }}</td>
			<td>{{ $customer->midlle_name }}</td>
		</tr>
		@endforeach
	</tbody>
</table>


</body>
</html>