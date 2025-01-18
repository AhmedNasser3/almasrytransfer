@extends('admin.master')
@section('AdminContent')
<div style="padding: 0 10%">
<div class="table-container" >
  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>اسم المستخدم</th>
        <th>البريد الالكتروني للمستخدم</th>
        <th>مسح المستخدم</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $key => $user)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <form action="{{ route('user.deleteUser',['userId' => $user->id]) }}">
                @csrf
                @method('post')
                <button style="border-radius: 10px;border:none;padding:10px 20px;background:#912323;color:white;cursor:pointer">مسح</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection
