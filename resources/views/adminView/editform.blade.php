<div class="mb-3 text-black">
    <label for="stokA" class="form-label">Stock A</label>
    <input type="number"  class="form-control" id="stokA" name="stokA" value="{{ $item->stokA }}">
</div>
<div class="mb-3 text-black">
    <label for="stokB" class="form-label">Stock B</label>
    <input type="number"  class="form-control" id="stokB" name="stokB" value="{{ $item->stokB }}">
</div>
<div class="mb-3 text-black">
    <label for="stokAB" class="form-label">Stock AB</label>
    <input type="number"  class="form-control" id="stokAB" name="stokAB" value="{{ $item->stokAB }}">
</div>
<div class="mb-3 text-black">
    <label for="stokO" class="form-label">Stock O</label>
    <input type="number"  class="form-control" id="stokO" name="stokO" value="{{ $item->stokO }}">
</div>

<button type="submit" class="btn btn-danger">Update</button>
