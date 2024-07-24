<div class="wrapper d-flex align-items-stretch">
  <x-header />
  <div id="content" class="p-4 p-md-5 pt-5">
    <a class="btn btn-sm " style="background-color: gold; color: black" href={{ route('Employees.form') }}>Add Employee</a>

    <div class="container mt-5">
      <div class="row">
        <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Mail</th>
              <th scope="col">Age</th>
              <th scope="col">Role</th>
              <th scope="col">Salary</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($Employees as $Employee)
            <tr>
              <th scope="row">{{ $Employee->name }}</th>
              <td>{{ $Employee->mail }}</td>
              <td>{{ $Employee->age }}</td>
              <td>{{ $Employee->role }}</td>
              <td>{{ $Employee->salary }}</td>
              <td><a href="{{ route('Employees.form', $Employee->id) }}" class="btn btn-outline-primary btn-sm">Edit</a></td>
              <td>
                <form action="{{ route('Employees.destroy', $Employee->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                </form>
              </td>
            </tr>



      </div>
    </div>
    @endforeach
  </div>
</div>
</div>
</div>

<x-footer_files />