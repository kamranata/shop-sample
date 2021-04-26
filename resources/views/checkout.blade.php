<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop sample</title>
</head>
<body>
    <form action="/process" method="post">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product_id }}">
        <table border="0">
            <tr>
                <td>
                    <label>name<br> <input type="text" name="name"></label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>address<br> <input type="text" name="address"></label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>shipping<br> <select name="shipping">
                        <option value="0">free</option>
                        <option value="10">express</option>
                    </select></label>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Pay</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
