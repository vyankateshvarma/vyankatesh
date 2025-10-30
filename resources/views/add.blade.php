<h1>Add Member</h1>
<form action="upload" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name='file'><br><br>
    <button type="Upload">uploaded</button>
</form>
