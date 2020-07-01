<form method="post" action="{{ route ('form_tambah')}}">
@csrf
Nama : <input type="text" name="nama"/><br/>
Kelas : <input type="text" name="kelas"/><br/>
NIM : <input type="text" name="nim"/><br/>
<input type="submit"/>
</form>