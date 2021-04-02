
@extends('task-layout')

@section('title', 'Danh sách bảng công việc')

@section('content')

  <div class="row">

      <div class="col-md-12">

          <h2>Bảng công việc</h2>

      </div>

      <div class="col-md-12">
        <div class="col-12">
            @if (Session::has('success'))
               <p class="text-success">
                  <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
               </p>
            @endif
        </div>
        <div>
              <a class="btn btn-primary" href="{{ route('task.create') }}">Thêm mới Task</a>
        </div>
    </div>
    <div class="row">
          <table class="table table-striped">
                <thead>
                <tr>
                      <th scope="col">#</th>
                      <th scope="col">Title</th>
                      <th scope="col">Content</th>
                      <th scope="col">Image</th>
                      <th scope="col">Due Date</th>
                      <th></th>
                      <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($tasks) == 0)
                <tr><td colspan="4">Không có dữ liệu</td></tr>
                @else
                      @foreach($tasks as $key => $task)
                      <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->content }}</td>
                            <td class="image-item"><img src="{{asset('/storage/'.$task->image)}}" alt="" > </td>
                            <td>{{ $task->due_date}}</td>
                            <td><a class="btn btn-warning" href="{{ route('task.edit', $task->id) }}">sửa</a></td>

                            <form action="{{ route('task.destroy', $task->id) }}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <td>
                                        <input type="submit" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')" value="Xóa">

                                  </td>
                            </form>
                      </tr>
                      @endforeach
                      
                @endif
                </tbody>
            </table>
</div>


@endsection