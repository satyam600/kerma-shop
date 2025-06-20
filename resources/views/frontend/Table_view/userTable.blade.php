<form action="searchUser" method="post">
    @csrf
    <input type="text" name="search" id="search" placeholder="Search by Name">
    <button>Search</button>
</form>
<table border="1">
    <tr>
        <td>Id</td>
        <td>user_name</td>
        <td>f_name</td>
        <td>l_name</td>
        <td>gender_id</td>
        <td>phone</td>
        <td>email</td>
        <td>address</td>
        <td>state</td>
        <td>r_date</td>
        <td>terms</td>
        <td>newsletters</td>
        <td>promotion</td>
        <td>status</td>
        <td>email_verified_at</td>
        <td>password</td>
        <td>remember_tocken</td>
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