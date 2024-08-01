<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" value="{{old('name') ?? $company->name}}" id="name" name="name">
</div>
<div class="mb-3">
    <label for="adress" class="form-label">Adress</label>
    <input type="text" class="form-control" value="{{old('adress') ?? $company->adress}}" id="adress" name="adress">
</div>
<div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" class="form-control" value="{{old('phone') ?? $company->phone}}" id="phone" name="phone">
</div>
<div class="mb-3">
    <label for="resident" class="form-label">Resident</label>
    <input type="number" min="0" max="1" class="form-control" value="{{old('resident') ?? $company->resident}}" id="resident" name="resident">
</div>
<div class="mb-3">
    <label for="birthday" class="form-label">Birthday</label>
    <input type="date" class="form-control" value="{{old('birthday') ?? $company->birthday}}" id="birthday" name="birthday">
</div>
<div class="mb-3">
    <label for="satus" class="form-label">Status</label>
    <select name="satus" id="satus" class="form-select">
        <option value="active" @if($company->satus=='active') selected @endif>active</option>
        <option value="inactive" @if($company->satus=='inactive') selected @endif>inactive</option>
    </select>
</div>
