@extends('admin.master')
@section('AdminContent')
<div style="padding: 0 10%">
<div class="table-container" >
  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>المبلغ المستلم</th>
        <th>سعر الصرف المستلم</th>
        <th>العملة المستلم</th>
        <th>القسم 2</th>
        <th>سعر الصرف 2</th>
        <th> العملة القسم 2</th>
        <th>القسم 3</th>
        <th>سعر الصرف 3</th>
        <th> العملة القسم 3</th>
        <th>القسم 4</th>
        <th>سعر الصرف 4</th>
        <th> العملة القسم 4</th>
        <th>المبلغ المدفوع</th>
        <th>سعر الصرف المدفوع</th>
        <th> العملة  المدفوع</th>
        <th>المكسب  بالنسبة</th>
        <th>المكسب  بالرقم</th>
        <th>التاريخ</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($wallets as $wallet)
        <tr>
            <td>1</td>
            <td>{{ $wallet->section_1_name }}</td>
            <td>{{ $wallet->section_1_rate }}</td>
            <td>{{ $wallet->section_1_currency }}</td>
            <td>{{ $wallet->section_2_name }}</td>
            <td>{{ $wallet->section_2_rate }}</td>
            <td>{{ $wallet->section_2_currency }}</td>
            <td>{{ $wallet->section_3_name }}</td>
            <td>{{ $wallet->section_3_rate }}</td>
            <td>{{ $wallet->section_3_currency }}</td>
            <td>{{ $wallet->section_4_name }}</td>
            <td>{{ $wallet->section_4_rate }}</td>
            <td>{{ $wallet->section_4_currency }}</td>
            <td>{{ $wallet->section_5_name }}</td>
            <td>{{ $wallet->section_5_rate }}</td>
            <td>{{ $wallet->section_5_currency }}</td>
            <td style="color: rgb(50, 202, 50)"> + {{ (($wallet->section_1_name - $wallet->section_5_name) / ($wallet->section_1_name))*100 }} %</td>
            <td style="color: rgb(50, 202, 50)"> + {{ $wallet->section_1_name - $wallet->section_5_name }}</td>
            <td>{{ $wallet->created_at->format('Y-m-d') }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection
