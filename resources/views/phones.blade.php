<div>
    <h1>
        @if (isset($phones))
            <table style="border-collapse: collapse; width: 100%;">
                <tr>
                    <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">ID</th>
                    <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Name</th>
                    <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Model</th>
                    <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Price</th>
                </tr>
                @foreach ($phones as $row)
                @if ($row['price'] < 2500)
                    <tr>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{$row["id"]}}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{$row["name"]}}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{$row["model"]}}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{$row["price"]}}</td>
                    </tr>
                @endif
                @endforeach
            </table>
        @else
            <h1>no value</h1>
        @endif
    </h1>
</div>