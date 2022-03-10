@extends('admin.layoutAdmin.main')

@section('chart')
    <table border="1px">
        <thead>
          <tr>
            <th>name</th>
            <th>height</th>
            <th>weight</th>
            <th>age</th>
            <th>gender</th>
            <th>avatar</th>
        </tr>
        </thead>
        <tbody>
          @foreach($students as $student)
            <tr>
              <td style="width: 120px;">{{$student['name']}}</td>
              <td style="width: 120px;">{{$student['height']}}</td>
              <td style="width: 120px;">{{$student['weight']}}</td>
              <td style="width: 120px;">{{$student['age']}}</td>
              <td style="width: 120px;">{{$student['gender']}}</td>
              <td><img style="width: 90px" src="{{$student['avatar']}}" alt=""></td>
            </tr>
          @endforeach
        </tbody>
    </table>
@endsection