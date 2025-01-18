<div class="mb-3 text-black">
    <label for="golonganDarah" class="form-label">Golongan Darah</label>
    <input type="text"  class="form-control" id="golonganDarah" name="golonganDarah" value="{{ Auth::user()->golonganDarah }}">
</div>
<div class="mb-3 text-black">
    <label for="tanggal" class="form-label">Tanggal</label>
    <input type="date"  class="form-control" id="tanggal" name="tanggal" >
</div>


<button type="submit" class="btn btn-danger">Submit</button>
