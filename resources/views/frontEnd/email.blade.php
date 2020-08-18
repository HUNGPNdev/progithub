<font face="Arial">
	<div>
		<h3><font color="#FF9600">Client Information</font></h3>
		<p>
			<strong>Customer: </strong>
			{{$user[0]}}
		</p>
		<p>
			<strong>Email: </strong>
			{{$user[1]}}
		</p>
		<p>
			<strong>Phone number: </strong>
			{{$user[2]}}
		</p>
		<p>
			<strong>Address: </strong>
			{{$info['address']}}
		</p>
		<p>
			<strong>Departure Date: </strong>
			{{$info['departure']}}
		</p>
		<p>
			<strong>Children: </strong>
			{{$info['children']}}
		</p>
		<p>
			<strong>Adults: </strong>
			{{$info['adults']}}
		</p>
		<p>
			<strong>Airfares: </strong>
			{{$info['package']}}
		</p>
	</div>
	<div>
		<h3><font color="#FF9600">Receipt</font></h3>
		<table border="1" cellpadding="0">
			<tr>
				<td><strong>Destination</strong></td>
				<td><strong>Tour name</strong></td>
				<td><strong>Priece</strong></td>
				<td><strong>Amount</strong></td>
			</tr>
			<tr>
				<td>{{$cart['Destination']}}</td>
				<td>{{$cart['name']}}</td>
				<td>{{$cart['price']}}</td>
				<td>{{$cart['qty']}}</td>
			</tr>
			<tr>
				<td>Total monney</td>
				<td colspan="3" align="right">{{$total}}</td>
			</tr>
		</table>
	</div>
	<div>
		<h3><font color="#FF9600">You have successfully booked the tour!</font></h3>
		<p>Thank you for trusting us. We will contact you at the information on the email as soon as possible.</p>
	</div>
</font>

