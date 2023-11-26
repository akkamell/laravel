@extends ('layouts.layout')
@section ('content')
<style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        td button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
        }

        td button:hover {
            background-color: #bd2130;
        }
    </style>
@if (!empty($pizza))
<table>
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Size</th>
        <th>Toppings</th>
        <th>Delete</th>
    </tr>
    @foreach($pizza as $pz)
    <tr>
        <td>{{ $pz->name }}</td>
        <td>{{ $pz->type }}</td>
        <td>{{ $pz->size }}</td>
        <td>
            @foreach($pz->toppings as $top)
            {{ $top }}
            @endforeach
        </td>
        <td>
            <form action="/showpizza/{{ $pz->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Complete order</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endif


<h1><a href="/">back to all pizzas</a>

@endsection