<div class="wrapper d-flex align-items-stretch">
<x-header />
<div id="content" class="p-4 p-md-5 pt-5">
<form action="{{ route('trait.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" id="image">
    <button type="submit">Upload</button>
</form>
</div>
</div>
<x-footer_files />