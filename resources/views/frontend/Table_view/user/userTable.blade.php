@extends("frontend.layouts.main")

@section("main-container")

<style>
    .table-wrapper {
        overflow-x: auto;
        margin: 0 20px; /* Left and Right Margin */
    }

    table {
        width: 100%;
        min-width: 1200px; /* Ensures horizontal scroll if content is wide */
        border-collapse: collapse;
        font-family: Arial, sans-serif;
        margin-top: 20px;
        box-shadow: 0 0 10px rgba(255, 165, 0, 0.4);
    }

    table, th, td {
        border: 1px solid #ffa500;
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
    }

    tr:nth-child(even) {
        background-color: #fff8e1;
    }

    tr:hover {
        background-color: #ffe0b2;
        transition: 0.3s ease;
    }

    th {
        background-color: #ff9800;
        color: white;
    }

    input[type="text"] {
        padding: 8px;
        border: 1px solid #ff9800;
        border-radius: 4px;
        margin-right: 10px;
    }

    button {
        padding: 8px 16px;
        background-color: #ff9800;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #fb8c00;
    }

    .w-5.h-5 {
        width:20px;
    }

</style>

<br><br><br><br><br><br><br>

<form action="searchUser" method="post" style="margin: 20px;">
    @csrf
    <input type="text" name="search" id="search" placeholder="Search by Name">
    <button>Search</button>
</form>

<div class="table-wrapper">
    <table>
        <tr>
            <th>Id</th>
            <th>user_name</th>
            <th>f_name</th>
            <th>l_name</th>
            <th>gender_id</th>
            <th>phone</th>
            <th>email</th>
            <th>address</th>
            <th>state</th>
            <th>r_date</th>
            <th>terms</th>
            <th>newsletters</th>
            <th>promotion</th>
            <th>status</th>
            <th>email_verified_at</th>
            <th>password</th>
            <th>remember_tocken</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->user_name}}</td>
                <td>{{$user->f_name}}</td>
                <td>{{$user->l_name}}</td>
                <td>{{$user->gender_id}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->state}}</td>
                <td>{{$user->r_date}}</td>
                <td>{{$user->terms}}</td>
                <td>{{$user->newsletters}}</td>
                <td>{{$user->promotion}}</td>
                <td>{{$user->status}}</td>
                <td>{{$user->email_verified_at}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->remember_tocken}}</td>
            </tr>
        @endforeach
    </table>
    {{$users->links()}}
</div>

@endsection
