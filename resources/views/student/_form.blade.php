{{-- Shared by create & edit. $student is optional (null on create). --}}
<div>
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ old('name', $student->name ?? '') }}" required>
</div>
<br>
<div>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="{{ old('email', $student->email ?? '') }}" required>
</div>
<br>
<div>
    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone" value="{{ old('phone', $student->phone ?? '') }}" required>
</div>
<br>
<div>
    <label for="address">Address</label>
    <textarea id="address" name="address">{{ old('address', $student->address ?? '') }}</textarea>
</div>
<br>
<div>
    <label for="date_of_birth">Date of Birth</label>
    <input type="date" id="date_of_birth" name="date_of_birth"
           value="{{ old('date_of_birth', isset($student) && $student->date_of_birth ? $student->date_of_birth->format('Y-m-d') : '') }}">
</div>
<br>
