@extends('admin.master')
@section('AdminContent')
<div class="table-container">
  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>المبلغ المستلم</th>
        <th>المبلغ المدفوع</th>
        <th>المكسب  بالنسبة</th>
        <th>المكسب  بالرقم</th>
        <th>التاريخ</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>{{ $wallet->section_1_name }}</td>
        <td>{{ $wallet->section_5_name }}</td>
        <td style="color: rgb(50, 202, 50)"> + {{ (($wallet->section_1_name - $wallet->section_5_name) / ($wallet->section_1_name))*100 }} %</td>
        <td style="color: rgb(50, 202, 50)"> + {{ $wallet->section_1_name - $wallet->section_5_name }}</td>
        <td>{{ $wallet->created_at->format('Y-m-d') }}</td>
    </tr>
    </tbody>
  </table>
</div>

@endsection
