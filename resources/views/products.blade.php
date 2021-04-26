<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Shop sample</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Brand</th>
			<th>Price</th>
			<th></th>
		</tr>
		@foreach($products as $product)
		<tr>
			<td>{{ $product->id }}</td>
			<td>{{ $product->name }}</td>
			<td>{{ $product->brand->name }}</td>
			<td>{{ $product->price }}</td>
			<td>
				<form action="/checkout" method="post">
					@csrf
					<input type="hidden" name="product_id" value="{{ $product->id }}">
					<button type="submit">BUY</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>
