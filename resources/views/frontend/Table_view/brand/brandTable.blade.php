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
    .action-bar {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 20px;
        flex-wrap: wrap;
    }

    .action-bar input[type="text"] {
        padding: 8px;
        border: 1px solid #ff9800;
        border-radius: 4px;
        height: 38px;
    }

    .btn-orange {
        padding: 8px 16px;
        background-color: #ff9800;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        height: 38px;
        font-size: 14px;
        font-weight: 500;
    }

    .btn-orange:hover {
        background-color: #fb8c00;
    }

    .action-bar form {
        display: flex;
        gap: 10px;
        align-items: center;
        margin: 0;
    }

</style>

<br><br><br><br><br><br><br>

<div class="form-action">
    <form action="brand/search" method="post" style="margin: 20px;">
        @csrf
        <input type="text" name="search" id="search" placeholder="Search by Name">
        <button class ="btn-orange">Search</button>
    </form>

    <a class="btn-orange" href="{{url('brand/add')}}">Add Brand</a>

</div>



<div class="table-wrapper">
    <table>
        <tr>
            <th>Id</th>
            <th>brand_name</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>View</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        @foreach ($brands as $brand)
            <tr>
                <td>{{$brand->id}}</td>
                <td>{{$brand->brand_name}}</td>
                <td>{{$brand->created_at}}</td>
                <td>{{$brand->updated_at}}</td>
                <td><a href="{{'brand/'.$brand->id}}">View</a></td>
                <td><a href="{{'brand/del/'.$brand->id}}">Delete</a></td>
                <td><a href="{{'brand/'.$brand->id.'/edit'}}">Update</a></td>
            </tr>
        @endforeach
    </table>
    {{$brands->links()}}
</div>

@endsection