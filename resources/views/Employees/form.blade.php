


<div class="wrapper d-flex align-items-stretch">
    <x-header />
    <div id="content" class="p-4 p-md-5 pt-5">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6">
                    <h3>{{ isset($employee) ? 'Update' : 'Add' }} Employee</h3>
                    <form action="{{ isset($employee) ? route('Employees.update', $employee->id) : route('Employees.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($employee))
                            @method('PUT')
                        @endif
                        
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ isset($employee) ? $employee->name : '' }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Mail</label>
                            <input type="email" class="form-control" id="mail" name="mail" value="{{ isset($employee) ? $employee->mail : '' }}" required>
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="text" class="form-control" id="age" name="age" value="{{ isset($employee) ? $employee->age : '' }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="role">Role</label>
                            <input type="text" class="form-control" id="role" name="role" value="{{ isset($employee) ? $employee->role : '' }}" required>
                        </div>
                        <div class="form-group">
                            <label for="salary">Salary</label>
                            <input type="text" class="form-control" id="salary" name="salary" value="{{ isset($employee) ? $employee->salary : '' }}" required>
                        </div>
                        <div class="form-group">
                            <label for="image_id">Image</label>
                            <input type="file" class="form-control" id="image_id" name="image_id" value="{{ isset($employee) ? $employee->image_id : '' }}" required>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" style="background-color: gold; color: black">
                            {{ isset($employee) ? 'Update' : 'Add' }} Employee
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<x-footer_files />

