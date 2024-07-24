<h1>Upload image</h1>
<form action="upload" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <button type="submit">upload</button>
</form>