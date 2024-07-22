<div class="wrapper d-flex align-items-stretch">
    <x-header />
    <div id="content" class="p-4 p-md-5 pt-5">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6">
                    <h3>Add a Employee</h3>
                    <form action="{{ route('Employees.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">id</label>
                            <input type="text" class="form-control" id="id" name="id" required>
                        </div>
                        <div class="form-group">
                            <label for="body">name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="body">age</label>
                            <input type="text" class="form-control" id="age" name="age" required>
                        </div>
                        <div class="form-group">
                            <label for="body">gender</label>
                            <input type="text" class="form-control" id="gender" name="gender" required>
                        </div>
                        <div class="form-group">
                            <label for="body">role</label>
                            <input type="text" class="form-control" id="role" name="role" required>
                        </div>
                        <div class="form-group">
                            <label for="body">salary</label>
                            <input type="text" class="form-control" id="salary" name="salary" required>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" style="background-color: gold; color: black">Add Employee</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<x-footer_files />