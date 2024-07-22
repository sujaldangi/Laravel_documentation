<div class="wrapper d-flex align-items-stretch">
    <x-header />
    <div id="content" class="p-4 p-md-5 pt-5">


        <div class="col-10 col-md-8 col-lg-6">
            <h3>Update Employee</h3>
            <form action="{{ route('Employees.update', $Employees->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="id">Id</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{ $Employees->id }}" readonly>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $Employees->name }}" required>
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age" value="{{ $Employees->age }}" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <input type="text" class="form-control" id="gender" name="gender" value="{{ $Employees->gender }}" required>
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <input type="text" class="form-control" id="role" name="role" value="{{ $Employees->role }}" required>
                </div>
                <div class="form-group">
                    <label for="salary">Salary</label>
                    <input type="text" class="form-control" id="salary" name="salary" value="{{ $Employees->salary }}" required>
                </div>

                <button type="submit"  style="background-color: gold; color: black" class="btn mt-3 btn-primary">Update Employee</button>
            </form>
        </div>
    </div>
</div>
</div>