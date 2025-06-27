@extends("frontend.layouts.main")
@section("main-container")

<style>
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

<br><br><br><br><br><br>

<label for="">Id:</label>  
<input type="text" id="brand" name="brand" value="{{$brand->id}}" readonly><br><br>

<label for="brand">Brand Name:</label>  
<input type="text" id="brand" name="brand" value="{{$brand->brand_name}}" readonly><br><br>

<label for="brand">Ceated At:</label>  
<input type="text" id="brand" name="brand" value="{{$brand->created_at}}" readonly><br><br>

<label for="brand">Updated At:</label>  
<input type="text" id="brand" name="brand" value="{{$brand->updated_at}}" readonly><br><br>

<a class="btn-orange" href="{{url('brand')}}">Go back</a>

@endsection