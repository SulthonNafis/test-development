<!-- resources/views/vending_machine.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Vending Machine</title>
</head>
<body>
    <h1>Welcome to the Vending Machine</h1>
    <h2>Available Food Items:</h2>
    <ul id="food-list">
        @foreach ($items as $item)
            @if ($item->stock != 0)
            <li>{{ $item->name }}</li>
            @endif
        @endforeach
    </ul>

    <h2>Price List:</h2>
    <table>
        <tr>
            <th>Food Item</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->stock }}</td>
            </tr>
        @endforeach
    </table>

    <!-- Form untuk memasukkan uang dan membeli item -->
    <h2>Insert Money and Buy Item:</h2>
    <form method="post" action="{{ route('vending-machine.buy') }}">
        @csrf
        <label for="money">Money:</label>
        <input type="number" name="money" id="money" min="2000" step="1000" value="{{ $balance }}" required>
        <label for="food_item">Food Item:</label>
        <select name="food_item" id="food_item">
            @foreach ($items as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" min="1" max="10" required>
        <button type="submit" name="submit">Buy Item</button>
    </form>

    <h2>Current Balance:</h2>
    <p>{{ $balance }}</p>

    <!-- Tampilkan pesan jika ada -->
    @if(session('success'))
        <h2>Success:</h2>
        <p>{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <h2>Error:</h2>
        <p>{{ session('error') }}</p>
    @endif

    <!-- Form untuk mengembalikan uang -->
    <h2>Return Change:</h2>
    <form method="post" action="{{ route('vending-machine.return-change') }}">
        @csrf
        <label for="food_item">Food Item:</label>
        <select name="food_item" id="food_item">
            @foreach ($items as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
        <button type="submit" name="return_change">Return Change</button>
    </form>
</body>
</html>
